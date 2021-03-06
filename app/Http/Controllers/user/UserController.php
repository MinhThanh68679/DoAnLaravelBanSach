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
use App\Models\SanPhamYeuThich;
use App\Models\Cart;
use App\Models\Kho;
use App\Models\HoaDonBan;
use App\Models\ChiTietHoaDonBan;
use App\Models\User;
use App\Models\TheLoaiSach;
use DB;
use Mail;
use App\Mail\MailContact;
use App\Mail\MailResponse;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->user='user/pages/';
    }
    public function Index(){
        $slideshow=SlideShow::where('Xoa',0)->where('id',6)->get();
        $slideshow2=SlideShow::where('Xoa',0)->where('id',2)->get();
        $slideshow3=SlideShow::where('Xoa',0)->where('id',3)->get();
        $slideshow4=SlideShow::where('Xoa',0)->where('id',4)->get();
        $slideshow5=SlideShow::where('Xoa',0)->where('id',5)->get();

        $sach_moi_nhat = Sach::where('Xoa', 0)->where('IdKM','=',NULL)->orderBy('created_at', 'desc')->where('TrangThai',2)->take(8)->get();
        $listcha=TheLoaiCha::where('Xoa',0)->get();
       foreach($listcha as $cha){
           $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();

       }
       $hoaDonBanThanhCong = HoaDonBan::where('TrangThai', 2)->get();

       $listIDHoadon = array();
       $listTop4IDs = array();
       foreach($hoaDonBanThanhCong as $hoaDon){
        array_push($listIDHoadon, $hoaDon->id);
       }
       $listIDs = ChiTietHoaDonBan::select('IdSach')
                        ->groupBy('IdSach')
                        ->orderByRaw('COUNT(SoLuong) DESC')
                        ->whereIn('IdHoaDB', $listIDHoadon)
                        ->take(4)
                        ->get();
        $detailBill = ChiTietHoaDonBan::whereIn('IdHoaDB', $listIDHoadon)->get();
        foreach($listIDs as $id){
            array_push($listTop4IDs, $id->IdSach);
        }
        $bestSellers = SACH::whereIn('id', $listTop4IDs)->get();
        foreach($bestSellers as $product){
            $product->SoLuong = 0;
            foreach($detailBill as $detail){
                if($product->id == $detail->IdSach){
                    $product->SoLuong += $detail->SoLuong;
                }
            }
        }
        $result = $bestSellers->sortByDesc(function($pro) {
            return $pro->SoLuong;
        });

        return view($this->user."index",compact('slideshow','sach_moi_nhat','listcha','cha','slideshow2','slideshow3','slideshow4','slideshow5', 'result'));


    }

    public function Shop(Request $request){
        $sach=Sach::where('Xoa',0)->where('IdKM','=',NULL)->where('TrangThai',2)->paginate(12);
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();

        }
        $min_price = Sach::min('GiaTien');
        $max_price = Sach::max('GiaTien');
        $min_price_range = Sach::min('GiaTien');
        $max_price_range = Sach::max('GiaTien');
        if(isset($_GET['start_price']) && $_GET['end_price']){
            $min_price=$request->start_price;
            $max_price=$request->end_price;
            $sach=Sach::whereBetween('GiaTien',[$min_price,$max_price])->where('TrangThai',2)->orderBy('GiaTien',"ASC")->paginate(12);

        }else $min_price = 0;
         return view($this->user."shop",compact('sach','listcha','min_price','max_price', 'min_price_range', 'max_price_range'));
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
    $min_price = Sach::min('GiaTien');
    $max_price = Sach::max('GiaTien');
    $min_price_range = Sach::min('GiaTien');
    $max_price_range = Sach::max('GiaTien');
    if(isset($_GET['start_price']) && $_GET['end_price']){
        $min_price=$request->start_price;
        $max_price=$request->end_price;
        $sach=Sach::whereBetween('GiaTien',[$min_price,$max_price])->where('TrangThai',2)->orderBy('GiaTien',"ASC")->paginate(12);

    }else $min_price = 0;
        return view($this->user."promotion",compact('listcha','sach','min_price','max_price', 'min_price_range', 'max_price_range'));
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
    $min_price = Sach::min('GiaTien');
    $max_price = Sach::max('GiaTien');
    $min_price_range = Sach::min('GiaTien');
    $max_price_range = Sach::max('GiaTien');
    if(isset($_GET['start_price']) && $_GET['end_price']){
        $min_price=$request->start_price;
        $max_price=$request->end_price;
        $sach=Sach::whereBetween('GiaTien',[$min_price,$max_price])->where('TrangThai',2)->orderBy('GiaTien',"ASC")->paginate(12);

    }else $min_price = 0;

     return view($this->user."theloai",compact('sach','listcha','sach1','min_price','max_price', 'min_price_range', 'max_price_range'));
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
        foreach($sach as $sach1){
            if($sach1->IdKM!=null){
                $sach1->GiaKM= $sach1->GiaTien-(($sach1->GiaTien/100)*$sach1->KhuyenMai->ChietKhau);

            }
            else{
             $sach1->GiaKM=0;
            }}
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
            $gio_hang = Cart::where('Id_TK', '=',$IdTK)->where('TrangThai',1)->get();
            foreach($gio_hang as $sp){
                $kho= Kho::where('IdSach','=',$sp->Id_Sach)->get();
                $sp->SLMax=$kho[0]->SoLuongTon;           }
            return view($this->viewprefix."cart", ['gio_hang' => $gio_hang,'listcha'=>$listcha]);
        }
        else
        {
            $errors = new MessageBag(['error' => ["B???n ch??a ????ng nh???p. Vui l??ng ????ng nh???p ????? xem gi??? h??ng!"]]);
            return view($this->viewprefix."error",compact('listcha'))->withErrors($errors);
        }
        return view($this->user."cart",compact('listcha'));
    }
    public function Payment(Request $request){
        $MuaNgay='false';
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();

        }
        if($request->session()->has('infoUser')){
        $cart = Cart::where('Id_TK', $request->session()->get('infoUser')['id'])->where('TrangThai',1)->get();
        foreach($cart as $book){
            $sach = Sach::find($book->Id_Sach);
            $book->AnhSach = $sach->AnhSach;
            $book->GiaTien = $sach->GiaTien;
            $book->TenSach = $sach->TenSach;
        }
        $tai_khoan = User::find($request->session()->get('infoUser')['id']);
        return view($this->user."payment",compact('listcha','MuaNgay','tai_khoan','cart'));
        }
      else
                {
        $errors = new MessageBag(['error' => ["B???n ch??a ????ng nh???p. Vui l??ng ????ng nh???p ????? xem trang thanh to??n!"]]);
        return view($this->user."error",compact('listcha'))->withErrors($errors);}
     }
    public function New(){
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();

        }

        return view($this->user."news",compact('listcha'));
    }
    //H??m T??m Ki???m
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
        //     'NoiDung.required'=>"Vui l??ng nh???p n???i dung"
        // ]);
        $binhluan = new BinhLuan();
        $binhluan->idKH=$request->idKH;
        $binhluan->HoTen=$request->HoTen;
        $binhluan->idSach=$request->idSach;
        $binhluan->NoiDung=$request->NoiDung;
        $binhluan->TrangThai=$request->TrangThai;
        $binhluan->Ngay= Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i');   //l???y ng??y hi???n t???i
        $binhluan->Duyet = 0;
        $binhluan->Xoa = 0;
        if($binhluan->save())
        {
           return '???? g???i b??nh lu???n';
        }else return 'C?? l???i x???y ra';
    }
    public function mailcontact(Request $request)
    {
        $data = [
            'name' => $request['Name'],
            'email' => $request['Email'],
            'content' => $request['Content'],
        ];
        Mail::to('kieunga406365@gmail.com')->send(new MailContact($data));
        //password t??i kho???n: a@123456
        Mail::to($request['Email'])->send(new MailResponse());
        return redirect()->back();
        //return dd($data);
    }
    //
    public function addfavoritebook(Request $request)
    {
        $sach = $request['IdSach'];
        $check = SanPhamYeuThich::where([ ['IdSach', '=', $sach], ['IdKH', '=', $request->session()->get('infoUser')['id']] ])->first();
        if($check == null){
            $sach_yeu_thich=SanPhamYeuThich::create([
                'IdSach'=>$sach,
                'IdKH'=>$request->session()->get('infoUser')['id'],
                'TrangThai'=>0
            ]);
            return response()->json('???? th??m v??o s??ch y??u th??ch!');
        }
        return response()->json('S??ch ???? y??u th??ch');
    }
    public function YeuThich(Request $request)
    {
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();

        }
        $sach_yeu_thich = SanPhamYeuThich::where('IdKH', $request->session()->get('infoUser')['id'])->get();
        foreach($sach_yeu_thich as $sach1){
       if($sach1->Sach->IdKM!=null){
           $sach1->Sach->GiaKM= $sach1->Sach->GiaTien-(($sach1->Sach->GiaTien/100)*$sach1->Sach->KhuyenMai->ChietKhau);

       }
       else{
        $sach1->Sach->GiaKM=0;
       }}


        return view($this->user."wishlist", ['sach_yeu_thich'=>$sach_yeu_thich],compact('listcha'));
    }
    public function deletefavoritebook(Request $request)
    {
        $sach = $request['id'];
        $sach_yt = SanPhamYeuThich::find($sach);
        if($sach_yt != null){
            $sach_yt->delete();
        }
        $sach_yeu_thich = SanPhamYeuThich::where('IdKH', $request->session()->get('infoUser')['id'])->get();
        return response()->json($sach_yeu_thich);
    }


}
