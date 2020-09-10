<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    protected $table = 'binh_luan';
    protected $primaryKey = 'ma_bl';
    protected $fillable = [ 'ma_bl','ma_hh','id_kh','noi_dung','ngay_bl'];
}
