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
    Route::get("single","UserController@Single")->name("user.single");
    Route::get("about","UserController@About")->name("user.about");
    Route::get("cart","UserController@Cart")->name("user.cart");

});
Route::resource('admin/dashboard',admin\DashboardController::class);
Route::resource('admin/quan-ly-sach',admin\BookController::class);
Route::resource('admin/quan-ly-tai-khoan',admin\AccountController::class);