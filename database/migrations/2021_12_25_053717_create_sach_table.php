<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TenSach');
            $table->string('AnhSach');
            $table->string('NhaXuatBan');
            $table->integer('IdNCC')->unsigned();//khoa ngoai
            $table->string('LoaiBia');
            $table->integer('SoTrang');
            $table->date('NamXB');
            $table->integer('GiaTien');
            $table->string('DichGia');
            $table->string('KichThuoc');
            $table->string('MoTa');
            $table->integer('IdKM')->unsigned();//khoa ngoai
            $table->integer('TrangThai');
            $table->integer('Xoa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sach');
    }
}
