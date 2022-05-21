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
Route::get('logout','user/LoginController@getLogout')->name('getLogout');

Route::group(['prefix' => '', 'namespace' => 'user'], function() {
    Route::get("/","UserController@Index")->name("user.index");
    Route::get("shop","UserController@Shop")->name("user.shop");
    Route::get("contact","UserController@Contact")->name("user.contact");
    Route::get("single/{id?}","UserController@Single")->name("user.single");
    Route::get("about","UserController@About")->name("user.about");
    Route::get("new","UserController@New")->name("user.new");
    Route::get('cart','UserController@Cart')->name("user.cart");
    Route::get("payment","UserController@Payment")->name("user.payment");
    Route::post("checkout","CartController@checkout")->name("user.checkout");
    Route::get("promotion","UserController@Promotion")->name("user.promotion");
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
    //Thêm giỏ hàng
    Route::post('/them-gio-hang',"CartController@addcart")->name("account.addcart");
    //Load thể loại sách
    Route::get('the loai','UserController@TheLoai')->name('theloai');
    Route::get('the loai sach/{id}','UserController@TheLoaiSach')->name('theloaisach');
    //gửi phản hồi
    Route::post('gui-lien-he',"UserController@mailcontact")->name("user.mailcontact");
    //Cập nhật tài khoản người dùng
    Route::post('taikhoan/{id}','LoginController@updateAccount')->name('updateAccount');
    //Cập nhật giỏ hàng
    Route::post('/cap-nhat-gio-hang',"CartController@updatecart")->name("account.updatecart");
    //Delete giỏ hàng
    Route::delete('/xoa-gio-hang/{id?}',"CartController@deletecart")->name("account.cartdelete");
    //
    Route::get('/quan-ly-tai-khoan',"LoginController@index")->name("user.account");
    Route::post('/cap-nhat-thong-tin/{id}',"LoginController@updateinfomation")->name("user.updateinfomation");
    //
    Route::post('/them-sach-yeu-thich',"UserController@addfavoritebook")->name("user.accountheart");
    Route::get('/yeuthich',"UserController@YeuThich")->name("user.wishlist");
    Route::post('/xoa-sach-yeu-thich',"UserController@deletefavoritebook")->name("user.deleteheart");

    Route::post('/discount',"CartController@CheckDiscount")->name("user.check-discount");

    Route::post('/thanh-toan',"CartController@payment")->name("user.thanhtoan");

    
});

Route::group(["prefix" => "admin", "namespace" => "admin"], function() {
    Route::get("/index", "DashboardController@index")->name("admin.dashboard");
    Route::resource('dashboard',DashboardController::class);
    //Đường dẫn đến trang sách
    Route::resource('sach',BookController::class);
    Route::get('sach/{id}/delete','BookController@delete')->name('sach.delete');
    Route::post('search','BookController@search')->name('sach.search');
    //Đường dẫn đến trang thể loại
    Route::resource('theloai',TheLoaiController::class);
    Route::get('theloai/{id}/delete','TheLoaiController@delete')->name('theloai.delete');
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
    Route::get('kho/{id}/delete','KhoController@delete')->name('kho.delete');
    //Đường dẫn đến trang thể loại cha
    Route::resource('theloaicha',TheLoaiChaController::class);
    Route::get('theloaicha/{id}/delete','TheLoaiChaController@delete')->name('theloaicha.delete');
    //Đường dẫn đến trang mã giảm giá
    Route::resource('magiamgia',MaGiamGiaController::class);
    Route::get('magiamgia/{id}/delete','MaGiamGiaController@delete')->name('magiamgia.delete');
    //
    Route::resource('khuyenmai',KhuyenMaiController::class);
    Route::get('khuyenmai/{id}/delete','KhuyenMaiController@delete')->name('khuyenmai.delete');
});
