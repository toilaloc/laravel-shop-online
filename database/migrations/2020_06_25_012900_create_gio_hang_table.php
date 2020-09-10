<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGioHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gio_hang', function (Blueprint $table) {
            $table->increments('ma_dh');
            $table->unsignedBigInteger('ma_kh');
            $table->foreign('ma_kh')->references('id')->on('users');
            $table->string('thong_tin');
            $table->boolean('tinh_trang');
            $table->float('tong_gia');
            $table->string('ten_kh');
            $table->string('dia_chi',256);
            $table->string('sdt');
            $table->string('van_chuyen');
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
        Schema::dropIfExists('gio_hang');
    }
}
