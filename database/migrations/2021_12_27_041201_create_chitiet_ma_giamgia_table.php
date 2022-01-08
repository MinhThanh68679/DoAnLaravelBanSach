<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietMaGiamgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiet_ma_giamgia', function (Blueprint $table) {
            $table->integer('IdMaGiamGia')->unsigned();//khoa ngoai
            $table->integer('IdKH')->unsigned();//khoa ngoai
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
        Schema::dropIfExists('chitiet_ma_giamgia');
    }
}
