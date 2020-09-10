<?php

namespace App\Http\Controllers;

use App\HangHoa;
use App\LoaiHang;
use Illuminate\Http\Request;

class adminIndex extends Controller
{
    public function show() {
        return view('admin.layouts.index');
    }
    public function requestIndex() {
        $loaihang = LoaiHang::all();
        return view('admin.layouts.index', compact('loaihang'));
    }
}
