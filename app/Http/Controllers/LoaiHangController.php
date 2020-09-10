<?php

namespace App\Http\Controllers;

use App\LoaiHang;
use Illuminate\Http\Request;

class LoaiHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaihang = LoaiHang::orderBy('ma_loai', 'DESC')->paginate(5);
        return view('admin.loai_hang.index', compact('loaihang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loai_hang.create');
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
            'ten_loai' => 'required',
            'mo_ta' => 'required',
        ]);
        $show = LoaiHang::create($validatedData);
        return redirect('/admin/loaihang')->with('success', 'Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoaiHang  $loaiHang
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiHang $loaiHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoaiHang  $loaiHang
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiHang $loaiHang ,$ma_loai)
    {
        $loaiHang = LoaiHang::findOrFail($ma_loai);

        return view('admin.loai_hang.edit', compact('loaiHang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoaiHang  $loaiHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiHang $loaiHang, $ma_loai)
    {
        $validatedData = $request->validate([
            'ten_loai' => 'required',
            'mo_ta' => 'required',
        ]);

        LoaiHang::wherema_loai($ma_loai)->update($validatedData);
        return redirect('/admin/loaihang')->with('success', 'Sửa danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoaiHang  $loaiHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiHang $loaiHang, $ma_loai)
    {
        $loaihang = LoaiHang::findOrFail($ma_loai);
        $loaihang->delete();

        return redirect('/admin/loaihang')->with('success', 'Xóa thành công');
    }

}
