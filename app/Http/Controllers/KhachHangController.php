<?php

namespace App\Http\Controllers;
use App\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id', 'DESC')->paginate(7);
        return view('admin.khach_hang.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.khach_hang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'images' => 'required',
            'address' => 'max:256',
            'phone' => 'numeric|required',
            'role' => 'required',
        ]);
        $input = $request->all();
        $file = $request->file('images');
        $input['password'] = Hash::make($request->mat_khau);
        $input['images'] = $file->getClientOriginalName();
        $file->move(public_path('images/users'), $file->getClientOriginalName());
        KhachHang::create($input);
        return redirect('admin/khachhang')->with('success', 'Thêm khách hàng mới thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\KhachHang $khachHang
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('admin.khach_hang.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\KhachHang $khachHang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
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
            $user->role = $request->role;

            $user->save();

            return back()
                ->with('success', 'Sửa thông tin thành viên thành công.')->with('hinh', $fileName);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */

    // Tạo phần xóa khách hàng
    // Gọi đến Model KhachHang với một ma_kh được truyền vào
    // Sau đó dùng lệnh delete để xóa
    // Khi xóa thành công sẽ chuyển hướng đến trang chủ phần quản lý khách hàng
    public function destroy(User $user, $id)
    {
        $khachhang = User::find($id);
        $khachhang->delete();
        return redirect('/admin/khachhang')->with('success', 'Xóa thành công');
    }

}
