@extends('admin.layouts.index')
<title>Chỉnh sửa loại hàng</title>
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            CHỈNH SỬA DANH MỤC "{{$loaiHang->ten_loai}}"
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
            <form method="post" action="{{ route('loaihang.update', $loaiHang->ma_loai ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Country Name:</label>
                    <input type="text" class="form-control" name="ten_loai" value="{{ $loaiHang->ten_loai }}"/>
                </div>
                <div class="form-group">
                    <label for="symptoms">Symptoms :</label>
                    <textarea rows="5" columns="5" class="form-control" name="mo_ta">{{ $loaiHang->mo_ta }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
