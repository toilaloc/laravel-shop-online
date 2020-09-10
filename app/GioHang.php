<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = 'gio_hang';
    protected  $primaryKey =  'ma_dh';
    protected $fillable = ['ma_dh','ma_kh','thong_tin','tinh_trang','tong_gia', 'ten_kh','dia_chi','sdt','van_chuyen'];
   // protected $casts = [
     //   'thong_tin' => 'array',
    //];
}
