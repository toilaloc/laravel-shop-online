<nav class="main_nav">
    <ul>
        <li>
            <a href="{{URL::asset('/')}}">Trang Chủ</a>
        </li>
        <li class="hassubs">
            <a href="#">Danh Mục</a>
            <ul>
                @foreach($danhmuc as $danhmucs)
                <li><a href="{{URL::asset('/danhmuc')}}/{{$danhmucs->ma_loai}}">{{$danhmucs->ten_loai}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{URL::asset('/gioithieu')}}">Giới Thiệu</a></li>
        <li><a href="{{URL::asset('/lien-he')}}">Liên Hệ</a></li>
        @if(Auth::check())
            <li>Hi, <a href="{{URL::asset('/homeuser')}}">{{Auth::user()->name}}</a></li>
        @else
            <li class="hassubs">
            <a href="{{URL::asset('/quydinh')}}">Tài khoản</a>
        <ul>
            <li><a href="{{URL::asset('/login')}}">Đăng nhập</a></li>
            <li><a href="{{URL::asset('/register')}}">Đăng ký</a></li>
            <li><a href="{{URL::asset('/password/reset')}}">Quên mật khẩu</a></li>
        </ul>
        </li>
        @endif
    </ul>
</nav>
