<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiHang extends Model
{
    protected $table = 'loai_hang';
    protected $primaryKey = 'ma_loai';

    protected $fillable = [
        'ma_loai', 'ten_loai', 'mo_ta'
    ];


}
