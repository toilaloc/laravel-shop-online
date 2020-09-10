<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHangHoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hang_hoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_hh');
            $table->string('hinh');
            $table->float('gia');
            $table->integer('so_luong');
            $table->boolean('tinh_trang');
            $table->integer('ma_loai')->unsigned();
            $table->foreign('ma_loai')->references('ma_loai')->on('loai_hang');
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
        Schema::dropIfExists('hang_hoa');
    }
}
