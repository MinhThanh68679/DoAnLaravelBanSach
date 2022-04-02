<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\TheLoai;
use App\Models\TheLoaiSach;
use Session;
use DB;

class TheLoaiSachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theloaisach = TheLoaiSach::orderBy('created_at', 'desc')->get();
        return View('admin.pages.TheLoaiSach.index', compact('theloaisach'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sach = Sach::where('Xoa',0)->get();
        $theloai = TheLoai::all();
        return view('admin.pages.TheLoaiSach.create',['sach'=>$sach],['theloai'=>$theloai]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theloaisach = new TheLoaiSach;
        $this->validate($request, [
            'IdSach' => 'required',
            'IdTheLoai' => 'required',

        ]);
        $theloaisach->IdSach=$request->IdSach;
        $theloaisach->IdTheLoai=$request->IdTheLoai;
       
        if($theloaisach->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('theloaisach.index');
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
        //
        $sach = Sach::where('Xoa',0)->get();
        $theloai = TheLoai::all();
        $theloaisach= TheLoaiSach::find($id);//Nhacungcap tên model      
        return view('admin.pages.TheLoaiSach.edit')->with('theloaisach', $theloaisach)->with('theloai',$theloai)->with('sach',$sach);
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
        //
        $theloaisach= TheLoaiSach::find($id);
        
        $data=$request->validate([
            'IdTheLoai' => 'required',
            'IdSach' => 'required',
        ]);    
        
        if($theloaisach->update($data))
        { 
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
            
        return redirect()->route('theloaisach.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
