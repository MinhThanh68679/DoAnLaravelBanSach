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

});
Route::resource('admin/dashboard',admin\DashboardController::class);
//Đường dẫn đến trang sách
Route::resource('admin/sach',admin\BookController::class);
Route::get('admin/sach/{id}/delete','admin\BookController@delete')->name('sach.delete');
//Đường dẫn đến trang thể loại
Route::resource('admin/theloai',admin\TheLoaiController::class);
//Đường dẫn đến trang thể loại sách
Route::resource('admin/theloaisach',admin\TheLoaiSachController::class);
//Đường dẫn đến trang nhà cung cấp
Route::resource('admin/nhacungcap',admin\NhaCungCapController::class);
Route::get('admin/nhacungcap/{id}/delete','admin\NhaCungCapController@delete')->name('nhacungcap.delete');
//Đường dẫn đến trang tài khoản
Route::resource('admin/taikhoan',admin\AccountController::class);
Route::get('admin/taikhoan/{id}/delete','admin\AccountController@delete')->name('taikhoan.delete');
//Đường dẫn đến trang slideshow
Route::resource('admin/slideshow',admin\SlideshowController::class);
Route::get('admin/slideshow/{id}/delete','admin\SlideshowController@delete')->name('slideshow.delete');