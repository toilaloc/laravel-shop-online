@extends('user.layouts.index')
<title>Nhật ký hoạt động</title>
@section('content')

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
        <div class="col-lg-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Nhật ký bình luận</div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-in-card">
                        <thead>
                        <tr>
                            <th>Mã BL</th>
                            <th>ID HH</th>
                            <th>Nội dung</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($binhluan as $bl)
                            <tr>
                                <th scope="row">{{$bl->ma_bl}}</th>
                                <td>{{$bl->ma_hh}}</td>
                                <td>{{$bl->noi_dung}}</td>
                                <td>
                                    <form action="{{url('admin/nhat-ky/xoabinhluan/'.$bl->ma_bl)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
            <div class="col-lg-12">
                <div class="card easion-card">
                    <div class="card-header">
                        <div class="easion-card-icon">
                            <i class="fas fa-table"></i>
                        </div>
                        <div class="easion-card-title">Nhật ký mua hàng</div>
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
                                <th>Vận chuyển</th>
                                <th>Tình trạng</th>
                                <th>Tổng giá</th>
                                <th>Xác nhận</th>
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
                                    <td><?php $thongtin = $giohangs->thong_tin; echo $thongtin; ?></td>
                                    <td>{{$giohangs->van_chuyen}}</td>
                                    <td>
                                        <?php
                                        $tinhtrang = $giohangs->tinh_trang;
                                        if($tinhtrang == 0)
                                            echo "Chưa thanh toán";
                                        else
                                            echo "Đã thanh toán";
                                    ?></td>
                                    <td>{{number_format($giohangs->tong_gia)}} VNĐ</td>
                                    <td>
                                    @if($giohangs->van_chuyen == "Miễn phí")
                                            <form action="{{url('xac-nhan/')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="ma_dh" value="{{$giohangs->ma_dh}}"/>
                                            <button class="btn btn-primary" type="submit">Đã nhận được hàng</button>
                                        </form>
                                        @else
                                        Đã nhận
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

@endsection
