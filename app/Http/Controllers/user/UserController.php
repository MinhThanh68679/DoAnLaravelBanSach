<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\SlideShow;
use Carbon\Carbon;
use App\Models\BinhLuan;
use DB;
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
      
        $binhluan = BinhLuan::where('idSach',$id)->where('Duyet', 1)->where('TrangThai',1)->where('Xoa',0)->get();
        $sach = Sach::where('id',$id)->where('TrangThai',2)->where('Xoa',0)->get();
        $kho=DB::table('kho')->Where('IdSach','=',$id)->get();
        return view($this->user."single", compact('sach','binhluan','kho'));
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
    //Hàm Tìm Kiếm
    public function Search(Request $request)

     { 
         $key=$request->keyword;
         $kq=Sach::where('TenSach','like','%'.$key.'%')->where('TrangThai',2)->where('Xoa',0)->get();
          return view($this->viewprefix."search",compact('kq'));
            
         
     }
     public function autocomplete_ajax(Request $request){
        
        $data = $request->all();
        
        if($data['query']){

            $product = Sach::where('TrangThai', 2)->where('TenSach','LIKE','%'.$data['query'].'%')->get();
            $output = '
            <ul class="dropdown-menu tai2" style="display:block; position:relative;  margin-right: 5px;
            ">'
            ;

            foreach($product as $key => $val){
               $output .= '
               <li class="li_search_ajax"><a href="#">'.$val->TenSach.'</a></li>
               ';
            }

            $output .= '</ul>';
            echo $output;
        }


    }
    public function postComment(Request $request)
    {
        // $this->validate($request,
        // [
        //     'NoiDung'=>'required'
        // ],
        // [
        //     'NoiDung.required'=>"Vui lòng nhập nội dung"
        // ]);
        $binhluan = new BinhLuan();
        $binhluan->idKH=$request->idKH;
        $binhluan->HoTen=$request->HoTen;
        $binhluan->idSach=$request->idSach;
        $binhluan->NoiDung=$request->NoiDung;
        $binhluan->TrangThai=$request->TrangThai;
        $binhluan->Ngay= Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i');   //lấy ngày hiện tại
        $binhluan->Duyet = 0;
        $binhluan->Xoa = 0;
        if($binhluan->save())
        {
           return 'Đã gửi bình luận';  
        }else return 'Có lỗi xảy ra';
    }
    
}
