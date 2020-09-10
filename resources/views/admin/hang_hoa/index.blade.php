
@extends('admin.layouts.index')
<title>Danh sách hàng hóa</title>
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
                        <div class="easion-card-title">Danh sách hàng hóa</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-in-card">
                            <thead>
            <tr>
                <th>Mã HH</th>
                <th>Tên HH</th>
                <th>Mô tả</th>
                <th>Mã LH</th>
                <th>Hình ảnh</th>
                <th>Tinh trang</th>
                <th>Số lương</th>
                <th>Giá</th>
                <th colspan="2">Quản lý</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hanghoa as $hanghoas)
                <tr>
                    <th scope="row">{{$hanghoas->id}}</th>
                    <td>{{$hanghoas->ten_hh}}</td>
                    <td>{{$hanghoas->mo_ta}}</td>
                    <td>{{$hanghoas->ma_loai}}</td>

                    <td>

                        @php
                          //  $single_image = json_encode($hanghoas->hinh[0]);
                           //  $str = str_replace( '"', '', $single_image );
                        @endphp
                        <img src="{{URL::asset('images/content/'.$hanghoas->thumbnail)}}" height="50px" width="50px"/>

                    </td>
                    <td>{{$hanghoas->tinh_trang}}</td>
                    <td>{{$hanghoas->so_luong}}</td>
                    <td>{{$hanghoas->gia}}</td>
                    <td><a href="{{ route('hanghoa.edit', $hanghoas->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('hanghoa.destroy', $hanghoas->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="container" style="margin-top: 60px;">{!! $hanghoa->links()!!}</div>
@endsection
