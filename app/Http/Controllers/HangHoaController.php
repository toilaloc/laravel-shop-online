<?php

namespace App\Http\Controllers;

use App\HangHoa;
use App\LoaiHang;
use Illuminate\Http\Request;

class HangHoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hanghoa = HangHoa::orderBy('id', 'DESC')->paginate(8);
        return view('admin.hang_hoa.index', compact('hanghoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $theloai = LoaiHang::all();
        return view('admin.hang_hoa.create', compact('theloai'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrayimage = array();

        $request->validate([
            'ten_hh' => 'required',
            'thumbnail' => 'required',
            'thumbnail.*' => 'mimes:jpeg,png,jpg,gif,svg',
            'hinh' => 'required',
            'hinh.*' => 'mimes:jpeg,png,jpg,gif,svg',
            'gia' => 'required',
            'so_luong' => 'required|max:99',
            'mo_ta' => 'required',
            'tinh_trang'   => 'required',
            'ma_loai' => 'required',
        ]);

        if($request->hasfile('thumbnail')){
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $file->move(public_path('images/users'), $thumbnail);
        }
        else {
            $thumbnail = "default.png";
        }

        if($request->hasfile('hinh'))
        {
            foreach($request->file('hinh') as $image)
            {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path().'/images/content', $imageName);
                array_push($arrayimage,$imageName);
            }
        }
      HangHoa::create([
          'ten_hh' => $request->ten_hh,
          'thumbnail' => $thumbnail,
          'hinh' => $arrayimage,
          'gia' => $request->gia,
          'so_luong' => $request->so_luong,
          'mo_ta' => $request->mo_ta,
          'tinh_trang'   => $request->tinh_trang,
          'ma_loai' => $request->ma_loai,
      ]);

      return redirect('admin/hanghoa')
         ->with('success','Thêm bài viết thành công');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\HangHoa  $hangHoa
     * @return \Illuminate\Http\Response
     */
    public function show(HangHoa $hangHoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HangHoa  $hangHoa
     * @return \Illuminate\Http\Response
     */
    public function edit(HangHoa $hangHoa, LoaiHang $loaiHang, $id)
    {
        $loaiHang = LoaiHang::all();
        $hangHoa = HangHoa::findOrFail($id);
        return view('admin.hang_hoa.edit', compact('hangHoa','loaiHang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HangHoa  $hangHoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HangHoa $hangHoa, LoaiHang $loaiHang, $id)
    {

        $hangHoa = HangHoa::find($id);

        $request->validate([
            'ten_hh' => 'required',
            'thumbnail.*' => 'mimes:jpeg,png,jpg,gif,svg',
            'hinh.*' => 'mimes:jpeg,png,jpg,gif,svg',
            'gia' => 'required',
            'so_luong' => 'required|max:99',
            'mo_ta' => 'required',
            'tinh_trang'   => 'required',
            'ma_loai' => 'required',
        ]);

        $arrayimage = array();

        if($request->hasfile('thumbnail')){
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $file->move(public_path('images/users'), $thumbnail);
        }
        else {
            $thumbnail = $hangHoa->thumbnail;
        }

        if($request->hasfile('hinh'))
        {
            foreach($request->file('hinh') as $newimage)
            {
                $imageName = $newimage->getClientOriginalName();
                $newimage->move(public_path().'/images/content', $imageName);
                array_push($arrayimage,$imageName);
            }
        }
        else {
            $arrayimage = $hangHoa->hinh;
        }

        $hangHoa->update([
            'ten_hh' => $request->ten_hh,
            'thumbnail' => $thumbnail,
            'hinh' => $arrayimage,
            'gia' => $request->gia,
            'so_luong' => $request->so_luong,
            'mo_ta' => $request->mo_ta,
            'tinh_trang'   => $request->tinh_trang,
            'ma_loai' => $request->ma_loai,
        ]);

        return redirect('admin/hanghoa')
            ->with('success','Chỉnh sửa bài viết thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HangHoa  $hangHoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(HangHoa $hangHoa, $id)
    {
        $hanghoa = HangHoa::findOrFail($id);
        $hanghoa->delete();

        return redirect('/admin/hanghoa')->with('success', 'Xóa thành công');
    }

}
