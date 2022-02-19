<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('FrontEnd/index');
});
Route::get('/VeChungToi', function () {
    return view('FrontEnd/about');
}); */
Route::get('/DangNhap', function () {
    return view('Login/Login');
});
Route::get('/NguoiDung', function () {
    return view('user/pages/usermanagement');
});
Route::group(['prefix' => '', 'namespace' => 'user'], function() {
    Route::get("/","UserController@Index")->name("user.index");
    Route::get("shop","UserController@Shop")->name("user.shop");
    Route::get("contact","UserController@Contact")->name("user.contact");
    Route::get("single/{id?}","UserController@Single")->name("user.single");
    Route::get("about","UserController@About")->name("user.about");
    Route::get("new","UserController@New")->name("user.new");
    Route::get("cart","UserController@Cart")->name("user.cart");
    Route::get("payment","UserController@Payment")->name("user.payment");
    //Đăng Nhập
    Route::get('login','LoginController@getLogin')->name('getLogin');
    Route::post('login','LoginController@postLogin')->name('postLogin');
    //Đăng Xuất
    Route::get('logout','LoginController@getLogout')->name('getLogout');
    //Tìm Kiếm Sách
    Route::get('search','UserController@Search')->name('Search');
    Route::post('autocomplete_ajax',"UserController@autocomplete_ajax")->name("user.autocomplete_ajax");
    //Đăng Ký
    Route::get('register','LoginController@Register')->name('getregister');
    Route::post('register','LoginController@postRegister')->name('postRegister');
    //Bình Luận
    Route::post('comment','UserController@postComment')->name('postComment');
    //
    Route::post('/them-gio-hang',"CartController@addcart")->name("account.addcart");
});

Route::group(["prefix" => "admin", "namespace" => "admin"], function() {
    Route::resource('dashboard',DashboardController::class);
    //Đường dẫn đến trang sách
    Route::resource('sach',BookController::class);
    Route::get('sach/{id}/delete','BookController@delete')->name('sach.delete');
    Route::post('search','BookController@search')->name('sach.search');
    //Đường dẫn đến trang thể loại
    Route::resource('theloai',TheLoaiController::class);
    //Đường dẫn đến trang thể loại sách
    Route::resource('theloaisach',TheLoaiSachController::class);
    //Đường dẫn đến trang nhà cung cấp
    Route::resource('nhacungcap',NhaCungCapController::class);
    Route::get('nhacungcap/{id}/delete','NhaCungCapController@delete')->name('nhacungcap.delete');
    Route::post('search2','NhaCungCapController@search')->name('nhacungcap.search');
    //Đường dẫn đến trang tài khoản
    Route::resource('taikhoan',AccountController::class);
    Route::get('taikhoan/{id}/delete','AccountController@delete')->name('taikhoan.delete');
    Route::post('search1','AccountController@search')->name('taikhoan.search');
    //Đường dẫn đến trang slideshow
    Route::resource('slideshow',SlideshowController::class);
    Route::get('slideshow/{id}/delete','SlideshowController@delete')->name('slideshow.delete');
    //Binh Luan
    Route::resource('binhluan',BinhLuanController::class);
    Route::get('binhluan/{id}/delete','BinhLuanController@delete')->name('binhluan.delete');
    Route::get('binhluan/{id}/duyet','BinhLuanController@duyet')->name('binhluan.duyet');
    Route::post('allow_comment','BinhLuanController@allow_comment')->name('allow_comment');
    //Đường dẫn đến trang kho
    Route::resource('kho',KhoController::class);
});
