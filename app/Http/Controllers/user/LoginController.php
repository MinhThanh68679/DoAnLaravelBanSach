<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use session;
class LoginController extends Controller
{
    //Đăng Nhập
   
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect()->route('user.index');
        } else {
            return view('Login.Login');
        }
    }
    public function postLogin(Request $request)
    {   $login = [
        'Email' => $request->txtEmail,
        'password' => $request->txtMatKhau,
        'TrangThai'    =>"1",
        'Xoa'          =>"0"
                 ];
    
        if (Auth::attempt($login)) {
            $infoUser=['id'=>Auth::User()->id,'Email'=>Auth::User()->Email,'HoTen'=>Auth::User()->HoTen];
            $request->session()->put('infoUser',$infoUser);
            if(Auth::User()->LoaiTK=="0")
            { 
            return redirect()->route('user.index')->with('status', 'Đăng nhập thành công');
            } 
            else
            {
            return redirect('admin/dashboard')->with('status', 'Đăng nhập thành công');
            }
        }
        else 
        {
               return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    //Đăng Ký
    public function Register()
    {
        return view('Login.Login');
    }
    public function postRegister(Request $request)
    {
       
        $this->validate($request,
        [
            
            'HoTen'=>'required',
            'Email'=>'required|email|unique:user,email',
            'password'=>'required|min:6|max:20',
            'repassword'=>'required|same:password'
        ],
        [
            
            'HoTen.required'=>'Vui lòng nhập username',
            'Email.required'=>'Vui lòng nhập email',
            'Email.Email'=>'Không đúng định dạng email',
            'Email.unique'=>'Email đã tồn tại! Vui lòng nhập emal khác',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'repassword.required'=>'Vui lòng xác nhận mật khẩu',
            'repassword.same'=>'Xác nhận mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự'
        ]);
        $user = new User();
        $user->HoTen=$request->HoTen;
        $user->Email=$request->Email;
        $user->password = Hash::make($request->password);
        $user->LoaiTK=0;
        $user->TrangThai=1;
        $user->Xoa=0;
        if($user->save())
        return redirect()->route('getLogin')->with('status','Tạo tài khoản thành công!');  
    }
    public function getLogout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('infoUser');
        return view('Login.Login');
    }
           
}