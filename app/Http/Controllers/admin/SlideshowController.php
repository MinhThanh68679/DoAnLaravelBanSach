<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlideShow;
use Session;
use App\Classes\Helper;
use DB;
class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $slideshow = SlideShow::where('Xoa',0)->orderBy('created_at', 'desc')->get();
        return View('admin.pages.Slideshow.index', compact('slideshow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.Slideshow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function imageUpload(Request $request){
        if($request->hasFile('HinhAnh')){
            if($request->file('HinhAnh')->isValid()){
                $request->validate(['HinhAnh'=>'required|image|mimes:jpeg,jpg,png|max:2048',]);
                $imageName = time().'.'.$request->HinhAnh->extension();
                $request->HinhAnh->move(public_path('image'),$imageName);
                return $imageName;
            }
        }
        return 'x';
    }
    public function store(Request $request)
    {
        //
        $slideshow = new SlideShow;
        $this->validate($request, [
            'link' => 'required',
            'HinhAnh' => 'required',
            
        ]);
        $slideshow->HinhAnh=$this->imageUpload($request);
        $slideshow->link=$request->link;
        $slideshow->Xoa=0;
       
        if($slideshow->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('slideshow.index');
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
        $slideshow= SlideShow::find($id);//Nhacungcap tên model      
        return view('admin.pages.Slideshow.edit')->with('slideshow', $slideshow);
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
        $slideshow = SlideShow::find($id);
        $data=$request->validate([
            'link' => 'required',
        
        ]);    
        if ($request->HinhAnh == null) $imageName = $slideshow->HinhAnh;
        else 
        $data['HinhAnh']=$this->imageUpload($request);
        
       
        //if(Category::create($request->all()))
        if($slideshow->update($data))
        { 
            Session::flash('message','cập nhật sản phẩm thành công');
        }
        else
        {
             Session::flash('message','cập nhật sản phẩm thất bại');
        }

        return redirect()->route('slideshow.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $slideshow = SlideShow::find($id);
        $slideshow->Xoa = 1;
        $slideshow->save();
        return redirect()->back();
    }
    public function destroy($id)
    {
        //
    }
}
