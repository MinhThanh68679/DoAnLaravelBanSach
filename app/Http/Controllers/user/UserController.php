<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\SlideShow;
use Carbon\Carbon;
use App\Models\BinhLuan;
use App\Models\TheLoai;
use App\Models\TheLoaiCha;
use App\Models\Cart;
use App\Models\Kho;
use App\Models\User;
use App\Models\TheLoaiSach;
use DB;
use Mail;
use App\Mail\MailContact;
use App\Mail\MailResponse;
use Illuminate\Support\MessageBag;
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
        
        $listcha=TheLoaiCha::where('Xoa',0)->get();
       foreach($listcha as $cha){
           $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
           
       }

            return view($this->user."index",compact('slideshow','listcha','cha','slideshow2','slideshow3','slideshow4','slideshow5'));

    
    }

    public function Shop(){
        $sach=Sach::where('Xoa',0)->where('TrangThai',2)->paginate(12);
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
        return view($this->user."shop",compact('sach','listcha'));
    }
    public function Promotion(){
        $sach=Sach::where('Xoa',0)->where('TrangThai',2)->where('IdKM','!=',NULL)->paginate(12);
        foreach($sach as $sach1){
       if($sach1->IdKM!=null){
           $sach1->GiaKM= $sach1->GiaTien-(($sach1->GiaTien/100)*$sach1->KhuyenMai->ChietKhau);
        
       }
       else{
        $sach1->GiaKM=0;
       }
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
    }

        return view($this->user."promotion",compact('listcha','sach'));
    }
    public function TheLoai(){
       
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        $sach1=TheLoai::all();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
        return view('user.header.menu',compact('sach','listcha','sach1'));
    }
    public function TheLoaiSach($id){
    $idsach = TheLoaiSach::select('IdSach')->where('IdTheLoai', $id)->get();
    $sach= Sach::whereIn('id', $idsach)->where('Xoa',0)->where('TrangThai',2)->paginate(12);
    $listcha=TheLoaiCha::where('Xoa',0)->get();
    $sach1=TheLoai::all();
    foreach($listcha as $cha){
        $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
        
    }
     return view($this->user."theloai",compact('sach','listcha','sach1'));
    }
    public function Contact(){
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
       
        return view($this->user."contact",compact('listcha'));
    }
    public function Single($id,Request $request){
      
        $binhluan = BinhLuan::where('idSach',$id)->where('Duyet', 1)->where('TrangThai',1)->where('Xoa',0)->get();
        $sach = Sach::where('id',$id)->where('TrangThai',2)->where('Xoa',0)->get();
        foreach($sach as $key=>$value){
             $meta_desc = $value->MoTa;
             $meta_title = $value->TenSach;
             $url_canonical = $request->url();
             $share_images = url('images/'.$value->AnhSach);
            }

        $kho=DB::table('kho')->Where('IdSach','=',$id)->get();
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
       
        return view($this->user."single", compact('sach','binhluan','kho','listcha','url_canonical','meta_desc','meta_title','share_images'));
    }
    public function About(){
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
       
        return view($this->user."about",compact('listcha'));
    }
    public function Cart(Request $request){
        
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
 
        if($request->session()->has('infoUser')){
            
            $IdTK = $request->session()->get('infoUser')['id'];
            $gio_hang = Cart::where('Id_TK', '=',$IdTK)->get();
            foreach($gio_hang as $sp){
                $kho= Kho::where('IdSach','=',$sp->Id_Sach)->get();
                $sp->SLMax=$kho[0]->SoLuongTon;           }
            return view($this->viewprefix."cart", ['gio_hang' => $gio_hang,'listcha'=>$listcha]);
        }
        else
        {
            $errors = new MessageBag(['error' => ["Bạn chưa đăng nhập. Vui lòng đăng nhập để xem giỏ hàng!"]]);
            return view($this->viewprefix."error",compact('listcha'))->withErrors($errors);
        }
        return view($this->user."cart",compact('listcha'));
    }
    public function Payment(Request $request){
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
        
        $sach = Cart::where('Id_TK', $request->session()->get('infoUser')['id'])->get();
        
        $tai_khoan = User::find($request->session()->get('infoUser')['id']);
        return view($this->user."payment",compact('listcha','tai_khoan','sach'));
    }
    public function New(){
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
        
        return view($this->user."news",compact('listcha'));
    }
    //Hàm Tìm Kiếm
    public function Search(Request $request)
     {  
         $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();
            
        }
         $key=$request->keyword;
         $kq=Sach::where('TenSach','like','%'.$key.'%')->where('TrangThai',2)->where('Xoa',0)->get();
        
        
          return view($this->viewprefix."search",compact('kq','listcha'));
            
         
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
    public function mailcontact(Request $request)
    {
        $data = [
            'name' => $request['Name'],
            'email' => $request['Email'],
            'content' => $request['Content'],
        ];
        Mail::to('kieunga406365@gmail.com')->send(new MailContact($data));
        //password tài khoản: a@123456 
        Mail::to($request['Email'])->send(new MailResponse());    
        return redirect()->back();
        //return dd($data);
    }
}
