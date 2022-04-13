<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NhaCungCap;
use App\Models\KhuyenMai;
use App\Models\Sach;
use App\Classes\Helper;
use Session;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sach = Sach::where('Xoa', 0)->orderBy('created_at', 'desc')->get();
        return View('admin.pages.Book.index', compact('sach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $km = KhuyenMai::where('TrangThai',1)->get();
        $nhacc = NhaCungCap::all();
        return view('admin.pages.Book.create',['nhacc'=>$nhacc],['km'=>$km]);
    }
    public function imageUpload(Request $request){
        if($request->hasFile('AnhSach')){
            if($request->file('AnhSach')->isValid()){
                $request->validate(['AnhSach'=>'required|image|mimes:jpeg,jpg,png|max:2048',]);
                $imageName = time().'.'.$request->AnhSach->extension();
                $request->AnhSach->move(public_path('image'),$imageName);
                return $imageName;
            }
        }
        return 'x';
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sach = new Sach;
       // dd($request);dd($request);
        $this->validate($request, [
            'TenSach' => 'required',
            'AnhSach' => 'required',
            'NhaXuatBan' => 'required',
            'IdNCC' => 'required',
            'LoaiBia' => 'required',
            'SoTrang' => 'required',
            'NamXB' => 'required',
            'GiaTien' => 'required',
            'DichGia'=>'required',
            'KichThuoc'=>'required',
            'MoTa' => 'required',
            'IdKM' => 'required',
            'TrangThai'=>'required',

        ]);
        
        $sach->TenSach=$request->TenSach;
        $sach->AnhSach=$this->imageUpload($request);
        $sach->NhaXuatBan=$request->NhaXuatBan;
        $sach->IdNCC=$request->IdNCC;
        $sach->LoaiBia=$request->LoaiBia;
        $sach->SoTrang=$request->SoTrang;
        
        $sach->GiaTien=$request->GiaTien;
        $sach->DichGia=$request->DichGia;
        $sach->NamXB=$request->NamXB;
        $sach->KichThuoc=$request->KichThuoc;
        $sach->MoTa=$request->MoTa;
        if(empty($request->check)){
        $sach->IdKM=$request->IdKM;
    }
        
        $sach->TrangThai=$request->TrangThai;
        $sach->Xoa=0;
        if($sach->save())
        {
            Session::flash('message','thêm sản phẩm thành công');
        }
        else
        {
        Session::flash('message','thêm sản phẩm thất bại');
        }
        return redirect()->route('sach.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sach= Sach::find($id);//Nhacungcap tên model      
        $km = KhuyenMai::all();
        $nhacc = NhaCungCap::all();
        return view('admin.pages.Book.edit',$sach,['nhacc'=>$nhacc,'km'=>$km])->with('sach', $sach);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sach = Sach::find($id);
        $data=$request->validate([
            'TenSach' => 'required',
            'NhaXuatBan' => 'required',
            'IdNCC' => 'required',
            'LoaiBia' => 'required',
            'SoTrang' => 'required',
            'NamXB' => 'required',
            'GiaTien' => 'required',
            'DichGia'=>'required',
            'KichThuoc'=>'required',
            'IdKM' => 'required',
            'TrangThai'=>'required',
        ]);    
        if ($request->AnhSach == null) $imageName = $sach->AnhSach;
        else 
        $data['AnhSach']=$this->imageUpload($request);
        
       
        //if(Category::create($request->all()))
        if($sach->update($data))
        { 
            Session::flash('message','cập nhật sản phẩm thành công');
        }
        else
        {
             Session::flash('message','cập nhật sản phẩm thất bại');
        }

        return redirect()->route('sach.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $sach = Sach::find($id);
        $sach->Xoa = 1;
        $sach->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
       
    }
    public function search(Request $request)
    {
        $sach = Sach::where([ ['TenSach','like','%'.$request->bookName.'%'],['Xoa', '=', '0'] ])
                    ->orwhere([ ['DichGia','like','%'.$request->bookName.'%'],['Xoa', '=', '0'] ])
                    ->paginate(5);
        return View('admin.pages.Book.index', ['sach'=>$sach]);
    }

}
