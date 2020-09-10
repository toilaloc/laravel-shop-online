<?php

namespace App\Http\Controllers;

use App\GioHang;
use App\HangHoa;
use App\LoaiHang;
use App\BinhLuan;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Cart;


class PagesController extends Controller
{
    // Show content in home
    public function homepage() {
        $danhmuc = LoaiHang::all();
        $hanghoamoi = HangHoa::orderBy('id', 'DESC')->paginate(8);
        $tshirt = HangHoa::where('ma_loai',10)->paginate(4);
        $hoodie = HangHoa::where('ma_loai',11)->paginate(4);
        $accessories = HangHoa::where('ma_loai',12)->paginate(4);
        return view('pages.trangcchu', array('danhmuc' => $danhmuc, 'hanghoamoi' => $hanghoamoi, 'tshirt' => $tshirt, 'hoodie'=> $hoodie, 'accessories' => $accessories));
    }

    // Show all content in category has id
    public function categoripage($id) {
        $danhmuctheloai = LoaiHang::find($id);
        $danhmuc = LoaiHang::all();
        $danhmuchanghoa = HangHoa::where('ma_loai', $id)->paginate(8);
        return view('pages.danhmuc', compact('danhmuc','danhmuchanghoa', 'danhmuctheloai'));
    }

    // Show product page
    public function productpage($ma_loai, $id) {
        $danhmuc = LoaiHang::all();
        $hanghoachitiet = HangHoa::find($id);
        $hanghoalienquan = HangHoa::where('ma_loai',$ma_loai)->get()->take(4);
        $binhluan = BinhLuan::where('ma_hh',$id)->get()->take(8);
        return view('pages.sanpham', array('danhmuc' => $danhmuc, 'hanghoachitiet' => $hanghoachitiet, 'hanghoalienquan' => $hanghoalienquan, 'binhluan' => $binhluan));
    }

    // Show all result search content
    public function search(Request $request){
        $danhmuc = LoaiHang::all();
        $key = $request->get('key');
        $ketquatimkiem = HangHoa::where('ten_hh', 'like', '%'.$key.'%')->orWhere('gia', '=', "$key")->paginate(8);
        return view('pages.ketquatimkiem', array('key' => $key, 'ketquatimkiem' => $ketquatimkiem, 'danhmuc' => $danhmuc));
    }

    // Show cart page
    public function cart($id) {
        $danhmuc = LoaiHang::all();
        return view('pages.giohang', compact('danhmuc'));
    }

    // Xu ly binh luan
    public function binhluan(Request $request) {
        $validatedData = $request->validate([
            'ma_hh' => 'required',
            'id_kh' => 'required',
            'noi_dung' => 'required',
            'ngay_bl' => 'required|date',
        ]);
        $show = BinhLuan::create($validatedData);
        return back();
    }

    // Delete comment as id
    public function xoabinhluan(BinhLuan $binhLuan, $id){
        $binhluan = BinhLuan::find($id);
        $binhluan->delete();
        return back()->with('success', 'Xóa thành công');
    }
    // Delete comment as id
    public function xoabinhluanadmin(BinhLuan $binhLuan, $id){
        $binhluan = BinhLuan::find($id);
        $binhluan->delete();
        return back()->with('success', 'Xóa thành công');
    }

    // History user action on website
    public function nhatky($id){
        $binhluan = BinhLuan::where('id_kh', $id)->get();
        $giohang = GioHang::where('ma_kh', $id)->orderBy('ma_dh', 'DESC')->paginate(8);
        // $donhang = GioHang::where('id_kh', $id)->get()->take(10);
        return view('user.nhatky.index', compact('binhluan','giohang'));
    }

    // Show form Update information member as id
    public function show_update_info_member($id)
    {
        $user = User::find($id);
   return view('user.chucnang.doithongtin', compact('user'));
    }

    // Xu ly Update information member as id
    public function update_info_member(Request $request, User $user, $id)
    {
        // tạo 1 validation đến các cột trong bảng
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'address' => 'max:256',
            'phone' => 'numeric|required',
            'role' => 'required',
        ]);

        // tạo biến khachhang gán cho model KhachHang đang gọi đến id bài viết
        $user = User::find($id);

        // kiểm tra nếu tồn tại type="file" có name="hinh" thì sẽ tiếp tục
        if ($request->hasFile('images')) {
            // lấy tên của file hình ảnh
            $fileName = $request->images->getClientOriginalName();
            // di chuyển hình ảnh đến thư mục "public/images/users" bằng lệnh move
            // cấu trúc move('đường dẫn', 'file')
            $request->file('images')->move(public_path('images/users'), $request->file('images')->getClientOriginalName());
            // sử dụng biến khachhang vừa được tạo ở trên gọi đến các cột của bảng trong phần request
            // gán các cột đó cho giá trị mới người dùng đã nhập ở form
            // cuối cùng lưu lại

        }
          else {
              $fileName = $user->images;
          }
            $user->images = $fileName;
            $user->password = Hash::make($request->password);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->role = 0;

            $user->save();

            return back()
                ->with('success', 'Sửa thông tin thành viên thành công.')->with('images', $fileName);
        }

    // History admin action on website
    public function nhatkyadmin($id){
        $binhluan = BinhLuan::where('id_kh', $id)->paginate(10);
        $giohang = GioHang::where('ma_kh', $id)->orderBy('ma_dh', 'DESC')->paginate(8);
        // $donhang = GioHang::where('id_kh', $id)->get()->take(10);
        return view('admin.nhat_ky.index', compact('binhluan','giohang'));
    }

    // Show form Update information admin as id
    public function show_update_info_admin($id)
    {
        $user = User::find($id);
        return view('admin.chucnang.doi-thong-tin', compact('user'));
    }

    // Xu ly Update information member as id
    public function update_info_admin(Request $request, User $user, $id)
    {
        // tạo 1 validation đến các cột trong bảng
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'address' => 'max:256',
            'phone' => 'numeric|required',
            'role' => 'required',
        ]);

        // tạo biến khachhang gán cho model KhachHang đang gọi đến id bài viết
        $user = User::find($id);

        // kiểm tra nếu tồn tại type="file" có name="hinh" thì sẽ tiếp tục
        if ($request->hasFile('images')) {
            // lấy tên của file hình ảnh
            $fileName1 = $request->images->getClientOriginalName();
            // di chuyển hình ảnh đến thư mục "public/images/users" bằng lệnh move
            // cấu trúc move('đường dẫn', 'file')
            $request->file('images')->move(public_path('images/users'), $request->file('images')->getClientOriginalName());
            // sử dụng biến khachhang vừa được tạo ở trên gọi đến các cột của bảng trong phần request
            // gán các cột đó cho giá trị mới người dùng đã nhập ở form
            // cuối cùng lưu lại
        }
        else {
            $fileName1 = $user->images;
        }
        $user->images = $fileName1;
        $user->password = Hash::make($request->password);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->role = $request->role;

        $user->save();

        return back()
            ->with('success', 'Sửa thông tin thành viên thành công.')->with('images', $fileName1);
    }

    public function show_contact() {
        $danhmuc = LoaiHang::all();
        return view('pages.lien-he', compact('danhmuc'));
    }
}
