@extends('admin.layouts.index')
<title>Chỉnh sửa hàng hóa</title>
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="card uper">
        <div class="card-header">
            Chỉnh sửa "{{$hangHoa->ten_hh}}"
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
            <form method="post" action="{{route('hanghoa.update', $hangHoa->id)}}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">

                    <label for="country_name">Tên bài viết:</label>
                    <input type="text" class="form-control" name="ten_hh" value="{{$hangHoa->ten_hh}}"/>
                </div>
                <div class="form-group">
                    <label for="country_name">Danh mục:</label>
                    <select class="form-control" name="ma_loai">
                        @foreach($loaiHang as $lh)
                            <option
                                @if($lh->ma_loai == $hangHoa->id)
                                    {{"selected"}}
                                @endif
                                value="{{$lh->ma_loai}}">{{$lh->ten_loai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="country_name">Ảnh đại diện:</label>
                    <input type="file" class="form-control" name="thumbnail"/><br>
                    <p>
                            <img src="{{URL::asset('/images/content/'.$hangHoa->thumbnail)}}" height="50px" width="50px"/>
                    </p>
                </div>
                <div class="form-group">
                    <label for="country_name">Hình ảnh:</label>
                    <input type="file" class="form-control" name="hinh[]" multiple="multiple"/><br>
                    <p>
                        @foreach($hangHoa->hinh as $hinh)
                            <img src="{{URL::asset('/images/content/'.$hinh)}}" height="50px" width="50px"/>
                        @endforeach
                     </p>
                </div>
                <div class="form-group">
                    <label for="country_name">Giá:</label>
                    <input type="text" class="form-control" name="gia" value="{{$hangHoa->gia}}"/>
                </div>
                <div class="form-group">
                    <label for="country_name">Số lượng:</label>
                    <input type="text" class="form-control" name="so_luong" value="{{$hangHoa->so_luong}}"/>
                </div>
                <div class="form-group">
                    <label for="tinh_trang">Tình trạng:</label>
                    <input class="form-check-input" type="radio"  name="tinh_trang" value="0"
                    @if($hangHoa->tinh_trang == 0)
                        {{"checked"}}
                        @endif
                    >
                    <label class="form-check-label" for="het_hang">Hết hàng</label>
                    <input class="form-check-input" type="radio" name="tinh_trang" value="1"
                    @if($hangHoa->tinh_trang == 1)
                        {{"checked"}}
                        @endif>
                    <label class="form-check-label" for="con_hang">Còn hàng</label>
                </div>
                <div class="form-group">
                    <label for="symptoms">Mô tả:</label>
                    <textarea rows="5" columns="5" class="form-control" name="mo_ta">{{$hangHoa->mo_ta}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
