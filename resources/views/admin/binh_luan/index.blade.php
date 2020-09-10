@extends('admin.layouts.index')
<title>Quản lý bình luận</title>
@section('content')
    <title>Danh sách bình luận</title>
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
                            <th>Mã bình luận</th>
                            <th>Nội dung</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($binhluan as $bl)
                            <tr>
                                <th scope="row">{{$bl->ma_bl}}</th>
                                <td>{{$bl->noi_dung}}</td>
                                <td>
                                    <form action="{{ route('binhluan.destroy', $bl->ma_bl)}}" method="post">
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
            <div class="container" style="margin-top: 60px;">{!! $binhluan->links()!!}</div>
@endsection
