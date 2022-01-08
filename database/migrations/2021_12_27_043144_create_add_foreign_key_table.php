<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Khoa ngoai bang sach
        Schema::table('sach', function (Blueprint $table) {
            $table->foreign('IdNCC')->references('id')->on('nhacungcap');
            $table->foreign('IdKM')->references('id')->on('khuyenmai');
        });

        //Khoa ngoai bang theloai_sach
        Schema::table('theloai_sach', function (Blueprint $table) {
            $table->foreign('IdSach')->references('id')->on('sach');
            $table->foreign('IdTheLoai')->references('id')->on('theloai');
        });

        //Khoa ngoai bang san pham yeu thich
        Schema::table('sanphamyeuthich', function (Blueprint $table) {
            $table->foreign('IdSach')->references('id')->on('sach');
            $table->foreign('IdKH')->references('id')->on('user');
        });
        
        //Khoa ngoai bang binh luan
        Schema::table('binhluan', function (Blueprint $table) {
            $table->foreign('IdSach')->references('id')->on('sach');
            $table->foreign('IdKH')->references('id')->on('user');
        });

        //Khoa ngoai bang hoa don ban
        Schema::table('hoadonban', function (Blueprint $table) {
            $table->foreign('IdKH')->references('id')->on('user');
        });

        //Khoa ngoai bang chi tiet hoa don ban
        Schema::table('chitiethoadonban', function (Blueprint $table) {
            $table->foreign('IdSach')->references('id')->on('sach');
            $table->foreign('IdHoaDB')->references('id')->on('hoadonban');

        });

         //Khoa ngoai bang hoa don nhap
         Schema::table('hoadonnhap', function (Blueprint $table) {
            $table->foreign('IdSach')->references('id')->on('sach');

        });

        //Khoa ngoai bang chi tiet hoa don nhap
        Schema::table('chitiethoadonnhap', function (Blueprint $table) {
            $table->foreign('IdSach')->references('id')->on('sach');
            $table->foreign('IdHoaDN')->references('id')->on('hoadonnhap');

        
        });

         //Khoa ngoai bang kho
        Schema::table('kho', function (Blueprint $table) {
            $table->foreign('IdSach')->references('id')->on('sach');
                
        });

          //Khoa ngoai bang chi tiet ma giam gia
          Schema::table('chitiet_ma_giamgia', function (Blueprint $table) {
            $table->foreign('IdMaGiamGia')->references('id')->on('ma_giamgia');
            $table->foreign('IdKH')->references('id')->on('user');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_foreign_key');
    }
}
