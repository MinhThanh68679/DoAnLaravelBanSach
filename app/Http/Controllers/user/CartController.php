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
use Carbon\Carbon;
use session;
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
     
        $check = Cart::where([ ['Id_Sach', '=', $sach], ['Id_TK', '=', $IdTK] ])->first();
       
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
        $g_hang = Cart::where('Id_TK', '=',$IdTK)->get();
        $s_luong = 0;
        if ($g_hang != null){
            foreach ($g_hang as $cart)
            {
                $s_luong = $s_luong + $cart->So_Luong;
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
        
        return View('user.pages.payment',compact('cart','listcha','tai_khoan'));
    }


}
