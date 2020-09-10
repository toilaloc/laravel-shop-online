<?php

use Illuminate\Support\Facades\Route;
use App\LoaiHang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

// Route trang chủ
Route::get('/', 'PagesController@homepage');

// Route trang danh mục chi tiết
Route::get('/danhmuc/{id}', 'PagesController@categoripage');

// Route trang sản phẩm chi tiết
Route::get('chitiet/{ma_loai}/{id}', 'PagesController@productpage');

// Route trang admin
Route::get('/admin/', function() {
    return view('admin.layouts.index');
})->middleware('adminLogin');

// Route trang tìm kiếm
Route::post('search', 'PagesController@search');

// trang người dùng
Route::get('/homeuser', 'HomeController@index')->name('home');
// Lien he

Route::get('/lien-he', 'PagesController@show_contact');
Route::post('/lien-he', 'LienHeController@lien_he');

// Gio hang
Route::get('giohang/{id}', 'PagesController@cart');

// Nhật ký hoạt động người dùng
Route::get('/homeuser/nhatky/{id}', 'PagesController@nhatky');

// Xóa 1 bình luận cụ thể
Route::delete('/homeuser/nhatky/xoabinhluan/{id}', 'PagesController@xoabinhluan');

// Đổi thông tin người dùng
Route::get('homeuser/doithongtin/{id}', 'PagesController@show_update_info_member');
Route::post('homeuser/doithongtin/{id}', 'PagesController@update_info_member');

// Comment
Route::post('binhluanmoi', 'PagesController@binhluan');


Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function() {
    Route::resource('loaihang', 'LoaiHangController');
    Route::resource('hanghoa', 'HangHoaController');
    Route::resource('binhluan', 'BinhLuanController');
    Route::resource('khachhang', 'KhachHangController');
    Route::get('giohang', 'GioHangController@admin_cart');
    Route::get('giohang/xoa/{id}', 'GioHangController@xoa_gio_hang');
    Route::get('/nhat-ky/{id}', 'PagesController@nhatkyadmin');
    Route::delete('nhat-ky/xoabinhluan/{id}', 'PagesController@xoabinhluanadmin');
    Route::get('doi-thong-tin/{id}', 'PagesController@show_update_info_admin');
    Route::post('doi-thong-tin/{id}', 'PagesController@update_info_admin');
    Route::get('/lien-he', 'LienHeController@show');

});

Route::get('gioithieu', function() {
    $danhmuc = LoaiHang::all();
    return view('pages.gioi-thieu', compact('danhmuc'));
});
Route::get('upload', 'uploadImage@showForm');
Route::post('upload', 'uploadImage@uploadFile');

Route::post('save-cart/', 'GioHangController@save_cart');
Route::post('update-qualtity/', 'GioHangController@update_qualtity');
Route::get('show-cart/', 'GioHangController@show_cart');
Route::get('delete-cart/{rowId}', 'GioHangController@delete_cart');
Route::post('check-out', 'GioHangController@check_out');
Route::post('confirm-cart', 'GioHangController@confirm_cart');
Route::get('/hang-doi', function(){

    if(Auth::user()->route != 0) {
        $id = Auth::user()->id;
        return redirect("/admin/nhatky/$id")->with('success','Đơn hàng của bạn đã thanh toán thành công!');
    }
    else {
        $id = Auth::user()->id;
        return redirect("/homeuser/nhatky/$id")->with('success','Đơn hàng của bạn đã thanh toán thành công!');
    }
});
Route::post('xac-nhan', 'GioHangController@nhan_hang');

Auth::routes();

