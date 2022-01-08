<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonbanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadonban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdKH')->unsigned();//khoa ngoai
            $table->date('NgayLap');
            $table->date('DiaChiGH');
            $table->integer('TongTien');
            $table->integer('TrangThai');
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
        Schema::dropIfExists('hoadonban');
    }
}
