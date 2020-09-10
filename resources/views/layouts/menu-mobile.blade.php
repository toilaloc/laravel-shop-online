
<div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
        <div class="page_menu_content">

            <div class="page_menu_search menu_mm">
                <form action="#">
                    <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                </form>
            </div>
            <ul class="page_menu_nav menu_mm">
                <li class="page_menu_item menu_mm"><a href="{{URL::asset('/')}}">Trang Chủ<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="/">Danh Mục<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        @foreach($danhmuc as $danhmucs)
                            <li class="page_menu_item menu_mm"><a href="{{URL::asset('/danhmuc')}}/{{$danhmucs->ma_loai}}">{{$danhmucs->ten_loai}}<i class="fa fa-angle-down"></i></a></li>
                        @endforeach
                        </ul>
                </li>
                <li class="page_menu_item menu_mm"><a href="{{URL::asset('/')}}">Giới thiệu<i class="fa fa-angle-down"></i></a></li>
                <li class="page_menu_item menu_mm"><a href="{{URL::asset('/')}}">Liên hệ<i class="fa fa-angle-down"></i></a></li>
                @if(Auth::check())
                    <li class="page_menu_item has-children menu_mm"><a href="{{URL::asset('/homeuser')}}">{{Auth::user()->name}}</a></li>
                @else
                    <li class="page_menu_item has-children menu_mm">
                        <a href="">Tài khoản</a>
                        <ul class="page_menu_selection menu_mm">
                            <li class="page_menu_item menu_mm"><a href="{{URL::asset('/login')}}">Đăng nhập</a></li>
                            <li class="page_menu_item menu_mm"><a href="{{URL::asset('/register')}}">Đăng ký</a></li>
                            <li class="page_menu_item menu_mm"><a href="{{URL::asset('/password/reset')}}">Quên mật khẩu</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="menu_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
