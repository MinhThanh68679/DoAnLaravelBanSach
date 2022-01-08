<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamyeuthichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphamyeuthich', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('IdSach')->unsigned();//khoa ngoai
            $table->integer('IdKH')->unsigned();//khoa ngoai
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
        Schema::dropIfExists('sanphamyeuthich');
    }
}
