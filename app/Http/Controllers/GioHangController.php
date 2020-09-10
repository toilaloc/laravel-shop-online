<?php

namespace App\Http\Controllers;
use  App\GioHang;
use Session;
use App\HangHoa;
use App\LoaiHang;
use Illuminate\Http\Request;
use Cart;
use Auth;

class GioHangController extends Controller
{

        public function admin_cart() {
            $giohang = GioHang::paginate(8);
            return view('admin.gio_hang.index', compact('giohang'));
        }
        public function xoa_gio_hang($id){
            $xoa = GioHang::find($id);
            $xoa->delete();
            return redirect('admin/giohang/');
        }
        public function save_cart(Request $request) {

            $qualtity = $request->so_luong;
            $id = $request->id;
            $hangkho = $request->hang_trong_kho;
            $product_infor = HangHoa::where('id', $id)->first();

            $data['id'] = $product_infor->id;
            $data['qty'] = $qualtity;
            $data['name'] = $product_infor->ten_hh;
            $data['price'] = $product_infor->gia;
            $data['weight'] = $hangkho;
            $data['options']['image'] = $product_infor->thumbnail;
            Cart::add($data);
            return redirect('/show-cart');
        }
        public function show_cart() {
            $donhang = GioHang::orderBy('ma_dh', 'desc')->first();
            $danhmuc = LoaiHang::all();


            return view('pages.giohang', compact( 'danhmuc', 'donhang'));

        }
    public function delete_cart($rowId) {
        Cart::update($rowId,0);
        return redirect('/show-cart');
    }
    public function update_qualtity(Request $request){
            $rowId = $request->rowId;
            $qty = $request->qty;
            $hangkho = $request->hang_trong_kho;
            $mahh = $request->ma_hh;
            $soluong = $hangkho - $qty;

        $hangHoa = HangHoa::find($mahh);
        $hangHoa->update([
            'ten_hh' => $hangHoa->ten_hh,
            'thumbnail' => $hangHoa->thumbnail,
            'hinh' => $hangHoa->hinh,
            'gia' => $hangHoa->gia,
            'so_luong' => $soluong,
            'mo_ta' => $hangHoa->mo_ta,
            'tinh_trang'   => $hangHoa->tinh_trang,
            'ma_loai' => $hangHoa->ma_loai,
        ]);
            Cart::update($rowId,$qty);
            return back();
    }
    public function check_out(Request $request){
        if(Auth::check()) {
            $data = $request->all();
            GioHang::create($data);
            Cart::destroy();
            return back()->with('success', 'Đơn hàng của bạn đã được đặt thành công, và đang chời xử lý. Bạn có thể xác nhận lại đơn bạn đã đặt theo thông tin bên dưới');
        }
        else {
           return redirect('login')->with('success', 'Vui lòng đăng nhập để thanh toán');
        }
    }

    public function confirm_cart(Request $request){
          $id = $request->ma_dh;
         $data = $request->all();
       // $data['ten_kh'] = $request->all();
        //$data['ma_kh'] = $request->;
        //$data['thong_tin'] = $request->;
        //$data['tinh_trang'] = $request->;
        //$data['dia_chi'] = $request->;
        //$data['sdt'] = $request->;
        //$data['van_chuyen'] = $request->;
        //$data['tong_gia'] = $request->;
        GioHang::find($id)->update($data);
        return redirect('/hang-doi');
    }
    public function nhan_hang(Request $request){
            $ma_dh = $request->ma_dh;
            $giohang = GioHang::find($ma_dh);
        $data['ten_kh'] = $giohang->ten_kh;
        $data['ma_kh'] = $giohang->ma_kh;
        $data['thong_tin'] = $giohang->thong_tin;
        $data['tinh_trang'] = $giohang->tinh_trang;
        $data['dia_chi'] = $giohang->dia_chi;
        $data['sdt'] = $giohang->sdt;
        $data['van_chuyen'] = "Đã nhận được hàng (Miễn phí)";
        $data['tong_gia'] = $giohang->tong_gia;
        $giohang->update($data);
            return back()->with('success', 'Xác nhận đã nhận hàng thành công');
    }
}
