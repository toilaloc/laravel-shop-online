<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LienHeModel extends Model
{
    protected $table = 'lien_he';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','email','phone','subject','message'];
}
