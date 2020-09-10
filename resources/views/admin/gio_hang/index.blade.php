@extends('admin.layouts.index')
<title>Quản lý giỏ hàng</title>
@section('content')
    <title>Danh sách đơn hàng</title>
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
    </div>
        <div class="col-lg-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Danh sách đơn hàng</div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-in-card">
                        <thead>
                        <tr>
                            <th>Mã ĐH</th>
                            <th>Mã KH</th>
                            <th>Tên KH</th>
                            <th>SĐT</th>
                            <th>Địa Chỉ</th>
                            <th>Thông Tin</th>
                            <th>Tổng giá</th>
                            <th>Vận chuyển</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($giohang as $giohangs)
                            <tr>
                                <th scope="row">{{$giohangs->ma_dh}}</th>
                                <td>{{$giohangs->ma_kh}}</td>
                                <td>{{$giohangs->ten_kh}}</td>
                                <td>{{$giohangs->sdt}}</td>
                                <td>{{$giohangs->dia_chi}}</td>
                                <td>
                                    <?php $thongtin =  $giohangs->thong_tin;
                                        echo $thongtin;
                                    ?>
                                </td>
                                <td>{{number_format($giohangs->tong_gia)}}</td>
                                <td>{{$giohangs->van_chuyen}}</td>
                                <td> <a href="{{url('admin/giohang/xoa/'.$giohangs->ma_dh)}}" class="btn btn-primary">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            </div>
        <div class="container" style="margin-top: 60px;">{!! $giohang->links()!!}</div>
@endsection

