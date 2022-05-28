<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Sach;
use App\Models\TheLoai;
use App\Models\MaGiamGia;
use App\Models\TheLoaiCha;
use App\Models\Kho;
use Carbon\Carbon;
use session;
use App\Models\HoaDonBan;
use Illuminate\Support\Facades\Auth;
use App\Models\ChiTietHoaDonBan;
class CartController extends Controller
{
    public function addcart(Request $request)
    {
        //

        $sach = $request['Id_Sach'];
        if($request->session()->has('infoUser'))
        $IdTK = $request->session()->get('infoUser')['id'];

        if($request['So_Luong']){
            $soluong = $request['So_Luong'];
        }

        $check = Cart::where([ ['Id_Sach', '=', $sach], ['Id_TK', '=', $IdTK] ])->where('TrangThai',1)->first();

        if($check == null){
            $gio_hang = Cart::create([
                'Id_Sach'=>$sach,
                'Id_TK'=>$IdTK,
                'So_Luong'=>$soluong,
                'TrangThai'    =>1
            ]);
        }
        else
        {
            $check->So_Luong = $check->So_Luong + $soluong;
            $check->save();
        }

        // Lấy số lượng sp trong giỏ hàng
        $g_hang = Cart::where('Id_TK', '=',$IdTK)->where('TrangThai',1)->get();
        $s_luong = 0;
        if ($g_hang != null){
            foreach ($g_hang as $cart)
            {
              
                $s_luong = $s_luong + $cart->So_Luong;
            //     if($cart->TrangThai==0){
            //         $cart->TrangThai=1;
            //         $cart->So_luong=$soluong;
            //         $cart->save();
            //     }
            //    else{
            //     $cart->So_luong=$s_luong;
            //     $cart->save();
              // }
            }
        }
        return response()->json($s_luong);
    }
    public function updatecart(Request $request)
    {
        //


        $id = $request['Id_Cart'];
        $cart = Cart::find($id);

        if($cart != null){
            $cart->So_Luong = $request['So_Luong'];
            if($cart->save()){
                return 'Cập nhật thành công';
            };
        }
        return 'Thất bại';
    }
    public function deletecart(Request $request)
    {
        //
        $id = $request['Id_Cart'];
        $cart = Cart::find($id);
        if($cart != null){
            $cart->delete();
            if($cart->delete()){
                return 'Xoá thành công';
            };
            return 'Thất bại';
        }
    }

    public function CheckDiscount(Request $request){
        if($request->code){
            if(MaGiamGia::where('Code', '=', $request->code)->exists()) {


                $loaikm = MaGiamGia::where('Code', '=', $request->code)->value('LoaiKM');
                $chietkhau = MaGiamGia::where('Code', '=', $request->code)->value('ChietKhau');
                $ketqua = $chietkhau;
                if($loaikm == 1){ //%
                    $ketqua = ($request->priceOriginal/100) * $chietkhau;
                }

                $currentDate = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
                $date1 = Carbon::createFromFormat ('Y-m-d', $currentDate);
                $date2 = Carbon::createFromFormat ('Y-m-d', MaGiamGia::where('Code', '=', $request->code)->value('NgayKT'));

                if($date2->gte($date1) == false){
                    return false;
                }
                  return $ketqua;

            }else return false;
        };
    }
    public function payment(Request $request)
    {
        $MuaNgay='false';
        if($request->MuaNgay=='true'){
        $MuaNgay='true';
        }
        $listcha=TheLoaiCha::where('Xoa',0)->get();
        foreach($listcha as $cha){
            $cha->listcon=TheLoai::where('Xoa',0)->where('TenTLCha',$cha->id)->get();

        }
        //
        $idsach = $request['id'];
        $soluong = $request['So_Luong'];


        $tai_khoan = $request->session()->get('infoUser')['id'];
        if($idsach != null && $soluong != null)
        {
            $cart = Sach::where('id', $idsach)->get();
            foreach($cart as $book)
            $book->So_Luong = $soluong;
        }
    
        return View('user.pages.payment',compact('cart','MuaNgay','listcha','tai_khoan'));
    }

    public function checkout(Request $request){
        // dd('abc');
        $hoadonban=new HoaDonBan();
    
        $sach = Cart::where('Id_TK', $request->session()->get('infoUser')['id'])->get();
        $mytime = Carbon::now();
        // echo $mytime->toDateString();
        $hoadonban->idKH=Auth::user()->id;
        $hoadonban->NgayLap=$mytime->toDateString();
        $hoadonban->DiaChiGH=Auth::user()->DiaChi;
        $hoadonban->TongTien=$request->tongTien;
        $hoadonban->TrangThai=1;
        // dd($sach);
        $hoadonban->save();
        if($request->menthodPay==1){
            if($request->MuaNgay=='true'){
               
                $chitiethoadonban=new ChiTietHoaDonBan();
                $sachInfo=Sach::find($request->idsach);
                $chitiethoadonban->IdSach=$request->idsach;
                $chitiethoadonban->IdHoaDB=$hoadonban->id;
                $chitiethoadonban->SoLuong=$request->soluong;
                $chitiethoadonban->GiaBan=$sachInfo->GiaTien;
                $kho=Kho::where('IdSach',$request->idsach)->get();
               foreach($kho as $sanpham){
                   $sanpham->SoLuongTon=$sanpham->SoLuongTon-$request->soluong;
                   $sanpham->save();
               }
    
                $chitiethoadonban->save();
                
            }
            else{
                foreach($sach as $item){
                    $chitiethoadonban=new ChiTietHoaDonBan();
                    $sachInfo=Sach::find($item->Id_Sach);
                    $chitiethoadonban->IdSach=$item->Id_Sach;
                    $chitiethoadonban->IdHoaDB=$hoadonban->id;
                    $chitiethoadonban->SoLuong=$item->So_Luong;
                    $chitiethoadonban->GiaBan=$sachInfo->GiaTien;
                    $item->TrangThai=0;
                    $kho=Kho::where('IdSach',$item->Id_Sach)->get();
                   foreach($kho as $sanpham){
                       $sanpham->SoLuongTon=$sanpham->SoLuongTon-$item->So_Luong;
                       $sanpham->save();
                   }
        
                    $item->save();
                    $chitiethoadonban->save();
                    
                }
            }
        
        return redirect("/");
    }
    else{
        // dd($count);

        if($request->MuaNgay=='true'){
               
            $chitiethoadonban=new ChiTietHoaDonBan();
            $sachInfo=Sach::find($request->idsach);
            $chitiethoadonban->IdSach=$request->idsach;
            $chitiethoadonban->IdHoaDB=$hoadonban->id;
            $chitiethoadonban->SoLuong=$request->soluong;
            $chitiethoadonban->GiaBan=$sachInfo->GiaTien;
            $kho=Kho::where('IdSach',$request->idsach)->get();
           foreach($kho as $sanpham){
               $sanpham->SoLuongTon=$sanpham->SoLuongTon-$request->soluong;
               $sanpham->save();
           }

            $chitiethoadonban->save();
            
        }
        else{
            foreach($sach as $item){
                $chitiethoadonban=new ChiTietHoaDonBan();
                $sachInfo=Sach::find($item->Id_Sach);
                $chitiethoadonban->IdSach=$item->Id_Sach;
                $chitiethoadonban->IdHoaDB=$hoadonban->id;
                $chitiethoadonban->SoLuong=$item->So_Luong;
                $chitiethoadonban->GiaBan=$sachInfo->GiaTien;
                $item->TrangThai=0;
                $kho=Kho::where('IdSach',$item->Id_Sach)->get();
               foreach($kho as $sanpham){
                   $sanpham->SoLuongTon=$sanpham->SoLuongTon-$item->So_Luong;
                   $sanpham->save();
               }
    
                $item->save();
                $chitiethoadonban->save();
                
            }
        }

            $total = $hoadonban->TongTien; // chuyen sang tien vn
            return redirect("vnpay?total=$total");
    }
        // foreach($sach as $item){
        //     $chitiethoadonban=new ChiTietHoaDonBan();
        //     $sachInfo=Sach::find($item->Id_Sach);
        //     $chitiethoadonban->IdSach=$item->Id_Sach;
        //     $chitiethoadonban->IdHoaDB=$hoadonban->id;
        //     $chitiethoadonban->SoLuong=$item->So_Luong;
        //     $chitiethoadonban->GiaBan=$sachInfo->GiaTien;
        //     $item->TrangThai=0;
        //     $item->save();
        //     $chitiethoadonban->save();
        // }
        // dd($count);
    }

    public function vnpay()
    {
        // $vnp_TmnCode = "XMKT96TQ"; //Host
        $vnp_TmnCode = "RZUIZ6V8"; //Mã website tại VNPAY
        // $vnp_HashSecret = "USVCWXTZLLEEPFUCWKDEIJXRZUOUOCRN"; //Chuỗi bí mật //Host
        $vnp_HashSecret = "PUUNKQKSFEBYLSOBPGNPGIGUJVXAPYFY"; //Chuỗi bí mật
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = url('/');
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = request('total', 10000) * 100;
        $vnp_Locale = 'en';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
}
