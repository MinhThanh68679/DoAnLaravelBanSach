<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethoadonbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethoadonban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdSach')->unsigned();//khoa ngoai
            $table->integer('IdHoaDB')->unsigned();//khoa ngoai
            $table->integer('SoLuong');
            $table->integer('GiaBan');
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
        Schema::dropIfExists('chitiethoadonban');
    }
}
