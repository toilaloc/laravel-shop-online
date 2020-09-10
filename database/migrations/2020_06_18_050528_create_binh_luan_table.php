<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhLuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->increments('ma_bl');
            $table->integer('ma_hh')->unsigned();
            $table->foreign('ma_hh')->references('id')->on('hang_hoa');
            $table->unsignedBigInteger('id_kh');
            $table->foreign('id_kh')->references('id')->on('users');
            $table->string('noi_dung');
            $table->dateTime('ngay_bl');
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
        Schema::dropIfExists('binh_luan');
    }
}
