<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HangHoa extends Model
{
    protected $table = 'hang_hoa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ten_hh', 'thumbnail', 'hinh', 'gia', 'so_luong', 'tinh_trang', 'ma_loai', 'mo_ta',
    ];
    protected $guarded = ['_method', '_token'];

    protected $casts = [
        'hinh' => 'array',
    ];
}
