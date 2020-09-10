
@extends('admin.layouts.index')
<title>Danh sách khách hàng</title>
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
                        <div class="easion-card-title">Danh sách khách hàng</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-in-card">
                            <thead>
                            <tr>
                            <th>Mã KH</th>
                            <th>Tên KH</th>
                            <th>Ảnh</th>
                            <th>Email</th>
                            <th>Địa hỉ</th>
                            <th>Điện thoại</th>
                            <th>Vai trò</th>
                            <th colspan="2">Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $users)
                            <tr>

                                <th scope="row">{{$users->id}}</th>
                                <td>{{$users->name}}</td>
                                <td><img src="{{URL::asset('images/users')}}/{{$users->images}}" height="50px" width="50px"/></td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->address}}</td>
                                <td>{{$users->phone}}</td>
                                <td>{{$users->role}}</td>
                                <td><a href="{{ route('khachhang.edit', $users->id)}}" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <form action="{{ route('khachhang.destroy', $users->id)}}" method="post">
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
            <div class="container" style="margin-top: 60px;">{!! $user->links()!!}</div>
@endsection
