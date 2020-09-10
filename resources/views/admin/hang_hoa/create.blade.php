@extends('admin.layouts.index')
<title>Thêm hàng hóa mới</title>
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="card uper">
        <div class="card-header">
            Thêm hàng hóa mới
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
            <form method="post" action="{{route('hanghoa.store')}}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <label for="ten_hh">Tên bài viết:</label>
                    <input type="text" class="form-control" name="ten_hh"/>
                </div>
                <div class="form-group">
                    <label for="ma_loai">Danh mục:</label>
                    <select class="form-control" name="ma_loai">
                        @foreach($theloai as $lh)
                        <option value="{{$lh->ma_loai}}">{{$lh->ten_loai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Ảnh đại diện:</label>
                    <input type="file" class="form-control" name="thumbnail"/>
                </div>
                <div class="form-group">
                    <label for="hinh">Hình ảnh (có thể chọn nhiều cái):</label>
                    <input type="file" class="form-control" name="hinh[]" multiple="multiple"/>
                </div>
                <div class="form-group">
                    <label for="gia">Giá:</label>
                    <input type="text" class="form-control" name="gia"/>
                </div>
                <div class="form-group">
                    <label for="so_luong">Số lượng:</label>
                    <input type="number" class="form-control" name="so_luong"/>
                </div>
                <div class="form-group">
                    <label for="tinh_trang">Tình trạng:</label>
                    <input type="radio" name="tinh_trang" value="0"> Hết hàng
                    <input type="radio" name="tinh_trang" value="1"> Còn hàng
                </div>
                <div class="form-group">
                    <label for="mo_ta">Mô tả:</label>
                    <textarea rows="5" columns="5" class="form-control" name="mo_ta"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm Hàng Hóa</button>
            </form>
        </div>
    </div>
@endsection
