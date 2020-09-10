@extends('admin.layouts.index')
<title>Yêu cầu liên hệ</title>
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
                    <div class="easion-card-title">Danh sách liên hệ gửi đến</div>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-in-card">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lienhe as $lh)
                            <tr>
                                <th scope="row">{{$lh->id}}</th>
                                <td>{{$lh->name}}</td>
                                <td>
                                    {{$lh->email}}
                                </td>
                                <td>
                                    {{$lh->phone}}
                                </td>
                                <td>{{$lh->subject}}</td>
                                <td>{{$lh->message}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
