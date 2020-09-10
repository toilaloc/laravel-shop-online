@extends('admin.layouts.index')
<title>Đổi thông tin tài khoản</title>
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="card uper">
        <div class="card-header">
            Thêm khách hàng mới
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{url('admin/doi-thong-tin/'.$user->id)}}" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="ten_kh">Tên khách hàng:</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}"/>
                </div>
                <div class="form-group">
                    <label for="hinh">Hình ảnh:</label>
                    <input type="file" class="form-control" name="images"/>
                    <p><img src="{{url('/images/users')}}/{{$user->images}}" height="50px" width="50px"/></p>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value="{{$user->email}}"/>
                </div>
                <div class="form-group">
                    <label for="mat_khau">Mật khẩu:</label>
                    <input type="password" class="form-control" name="password" value="{{$user->password}}"/>
                </div>
                <div class="form-group">
                    <label for="dien_thoai">Điện thoại:</label>
                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}"/>
                </div>
                <div class="form-group">
                    <label for="dia_hi">Địa chỉ:</label>
                    <input type="text" class="form-control" name="address" value="{{$user->address}}"/>
                </div>
                <div class="form-group">
                    <label for="role">Vai trò:</label>
                    <input type="radio" name="role" value="0"
                           @if($user->role == 0) {
                           {{"checked"}}
                           }
                        @endif
                    > Khách hàng
                    <input type="radio" name="role" value="1"
                           @if($user->role == 1) {
                           {{"checked"}}
                           }
                        @endif
                    > Quản lý
                </div>

                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </form>
        </div>
    </div>
@endsection
