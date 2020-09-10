@extends('admin.layouts.index')
<title>Danh sách loại hàng</title>
@section('content')
                <title>Danh sách loại hàng</title>
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
                                <div class="easion-card-title">Danh sách khách hàng</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-in-card">
                                    <thead>
                                    <tr>
                                        <th>Mã Loại</th>
                                        <th>Tên Loại</th>
                                        <th>Mô tả</th>
                                        <th colspan="2">Chức năng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($loaihang as $loaihangs)
                                        <tr>
                                            <th scope="row">{{$loaihangs->ma_loai}}</th>
                                            <td>{{$loaihangs->ten_loai}}</td>
                                            <td>{{$loaihangs->mo_ta}}</td>
                                            <td><a href="{{ route('loaihang.edit', $loaihangs->ma_loai)}}" class="btn btn-primary">Edit</a></td>
                                            <td>
                                                <form action="{{ route('loaihang.destroy', $loaihangs->ma_loai)}}" method="post">
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
                        <div class="container" style="margin-top: 60px;">{!! $loaihang->links()!!}</div>
@endsection
