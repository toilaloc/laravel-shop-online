@extends('admin.layouts.index')
<title>Thêm khách hàng mới</title>
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div><br />


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title">Thêm khách hàng mới</div>
                                </div>
                                <div class="card-body ">
                                    <form method="post" action="{{route('khachhang.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="ten_kh">Tên khách hàng</label>
                                                <input type="text" class="form-control" name="name" placeholder="Tên khách hàng">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Hình ảnh</label>
                                                <input type="file" class="form-control" name="images">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Mật khẩu</label>
                                                <input type="password" class="form-control" name="password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Điện thoại</label>
                                                <input type="text" class="form-control" name="phone" placeholder="Điện thoại">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Địa chỉ</label>
                                                <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-2 pt-0">Vai trò</legend>
                                                    <div class="col-sm-10">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio1" name="role" value="0" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio1">Khách hàng</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="role" value="1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadio2">Quản trị viên</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>


@endsection
