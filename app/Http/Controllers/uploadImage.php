<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadImage extends Controller
{
    public function showForm() {
 return view('uploadimg');
    }
    public function uploadFile(Request $request) {
        if($request->hasFile('hinh')) {
            $file = $request->file('hinh');
            $file->move('images','tenmoi.jpg');
        }
    }
}
