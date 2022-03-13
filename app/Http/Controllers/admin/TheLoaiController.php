<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TheLoai;
use Session;
use DB;

class TheLoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $theloai = TheLoai::all();
        return View('admin.pages.TheLoai.index', compact('theloai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.pages.TheLoai.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theloai = new TheLoai;
        $this->validate($request, [
            'TenTheLoai' => 'required',
            
        ]);
        $theloai->TenTheLoai=$request->TenTheLoai;
        
       
        if($theloai->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('theloai.index');
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
        $theloai= TheLoai::find($id);//Nhacungcap tên model      
        return view('admin.pages.TheLoai.edit')->with('theloai', $theloai);
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
        $theloai= TheLoai::find($id);
        
        $data=$request->validate([
            'TenTheLoai' => 'required',
            
        ]);    
        
        if($theloai->update($data))
        { 
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
            
        return redirect()->route('theloai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)
    {
       
    }
}
