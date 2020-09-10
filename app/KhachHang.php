<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = "user";
    protected $primaryKey = "id";
    protected $fillable = [
'id', 'name', 'email', 'images', 'address', 'phone', 'role', 'email_verified_at', 'password', 'remember_token',
    ];
}
