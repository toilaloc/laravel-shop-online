<?php

namespace App\Http\Controllers;

use App\BinhLuan;
use App\HangHoa;
use App\KhachHang;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $binhluan = BinhLuan::orderBy('ma_bl', 'DESC')->paginate(10);
        $hanghoa = HangHoa::all();
        return view('admin.binh_luan.index', compact('binhluan', 'hanghoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'ma_hh' => 'required',
         'id_kh' => 'required',
         'noi_dung' => 'required',
        'ngay_bl' => 'required|date',
        ]);
        $show = BinhLuan::create($validatedData);
        return view('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function show(BinhLuan $binhLuan)
    {
        $binhluan = BinhLuan::paginate(10);
        $hanghoa = HangHoa::all();
       // $khachhang = User::all();
        return view('admin.binh_luan.viewfull', compact('binhluan', 'hanghoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function edit(BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BinhLuan $binhLuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BinhLuan  $binhLuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BinhLuan $binhLuan, $id)
    {
        $binhluan = BinhLuan::findOrFail($id);
        $binhluan->delete();
        return redirect('/admin/binhluan')->with('success', 'Xóa thành công');
    }
}
