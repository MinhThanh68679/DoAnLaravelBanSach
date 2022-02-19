<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kho;
use App\Models\Sach;
use Session;

class KhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kho = Kho::where('Xoa', 0)->orderBy('created_at', 'desc')->get();
        return View('admin.pages.Kho.index', compact('kho'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sach = Sach::where('Xoa',0)->get();
        return view('admin.pages.Kho.create',['sach'=>$sach]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->IdSach==$request->idSach){
        $kho = new Kho;
        $this->validate($request, [
            'IdSach' => 'required',
            'SoLuongTon' => 'required',
                  
        ]);
        $kho->IdSach=$request->IdSach;
        $kho->SoLuongTon=$request->SoLuongTon;
        $kho->Xoa=0;
        if($kho->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
    }else {
        Session::flash('message', 'Sách đã có trong kho!');
    }
        return redirect()->route('kho.index');
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
        $kho= Kho::find($id);//Kho tên model      
        return view('admin.pages.Kho.edit')->with('kho', $kho);
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
        $kho= Kho::find($id);
        
        $data=$request->validate([
            'SoLuongTon' => 'required',
          
        ]);    
        
        if($kho->update($data))
        { 
            Session::flash('message', 'cập nhật thành công!');
        }
        else
            Session::flash('message', 'cập nhật thất bại!');
            
        return redirect()->route('kho.index');
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
