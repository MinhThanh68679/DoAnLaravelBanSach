<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NhaCungCap;
use Session;
use DB;
class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhacungcap = NhaCungCap::where('Xoa',0)->orderBy('created_at', 'desc')->get();
        return View('admin.pages.NhaCungCap.index', compact('nhacungcap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.NhaCungCap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhacungcap = new NhaCungCap;
        $this->validate($request, [
            'TenNCC' => 'required',
            'DiaChi' => 'required',
            'SDT' => 'required',
            'Email' => 'required',
            'TrangThai' => 'required',         
        ]);
        $nhacungcap->TenNCC=$request->TenNCC;
        $nhacungcap->DiaChi=$request->DiaChi;
        $nhacungcap->SDT=$request->SDT;
        $nhacungcap->Email=$request->Email;
        $nhacungcap->TrangThai=$request->TrangThai;
        $nhacungcap->Xoa=0;
        if($nhacungcap->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('nhacungcap.index');
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
        $nhacungcap= NhaCungCap::find($id);//Nhacungcap t??n model      
        return view('admin.pages.NhaCungCap.edit')->with('nhacungcap', $nhacungcap);

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
        $nhacungcap= NhaCungCap::find($id);
        
        $data=$request->validate([
            'TenNCC' => 'required',
            'DiaChi' => 'required',
            'SDT' => 'required',
            'Email' => 'required',
            'TrangThai' => 'required',  
        ]);    
        
        if($nhacungcap->update($data))
        { 
            Session::flash('message', 'c???p nh???t th??nh c??ng!');
        }
        else
            Session::flash('message', 'c???p nh???t th???t b???i!');
            
        return redirect()->route('nhacungcap.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $nhacungcap = NhaCungCap::find($id);
        $nhacungcap->Xoa = 1;
        $nhacungcap->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        //
    }
    public function search(Request $request)
    {
        $nhacungcap = NhaCungCap::where([ ['TenNCC','like','%'.$request->bookName.'%'],['Xoa', '=', '0'] ])
                    ->paginate(5);
        return View('admin.pages.NhaCungCap.index', ['nhacungcap'=>$nhacungcap]);
    }
}
