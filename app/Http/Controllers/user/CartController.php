<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
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
                'So_Luong'=>$soluong
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
}
