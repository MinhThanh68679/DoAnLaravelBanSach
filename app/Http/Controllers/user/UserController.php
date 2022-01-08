<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\SlideShow;
class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->user='user/pages/';
    }
    public function Index(){
        $slideshow=SlideShow::where('Xoa',0)->where('id',1)->get();
        $slideshow2=SlideShow::where('Xoa',0)->where('id',2)->get();
        $slideshow3=SlideShow::where('Xoa',0)->where('id',3)->get();
        $slideshow4=SlideShow::where('Xoa',0)->where('id',4)->get();
        $slideshow5=SlideShow::where('Xoa',0)->where('id',5)->get();

        return view($this->user."index",compact('slideshow','slideshow2','slideshow3','slideshow4','slideshow5'));
    }

    public function Shop(){
        $sach=Sach::where('Xoa',0)->where('TrangThai',2)->paginate(12);
        return view($this->user."shop",compact('sach'));
    }
    public function Contact(){
        return view($this->user."contact");
    }
    public function Single($id){
        $sach = Sach::where('id',$id)->where('TrangThai',2)->where('Xoa',0)->get();
        return view($this->user."single",compact('sach'));
    }
    public function About(){
        return view($this->user."about");
    }
    public function Cart(){
        return view($this->user."cart");
    }
    public function Payment(){
        return view($this->user."payment");
    }
    public function New(){
        return view($this->user."news");
    }
}
