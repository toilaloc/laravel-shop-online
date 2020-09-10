@extends('layouts.index-giohang')
@section('content')
<div class="home_container">
    <div class="home_background" style="background-image:url({{url('sublime')}}/images/cart.jpg)"></div>
    <div class="home_content_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="categories.html">Categories</a></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Cart Info -->

<div class="cart_info">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Column Titles -->
                <div class="cart_info_columns clearfix">
                    <div class="cart_info_col cart_info_col_product">Sản phẩm</div>
                    <div class="cart_info_col cart_info_col_price">Đơn giá</div>
                    <div class="cart_info_col cart_info_col_quantity">Số lượng</div>
                    <div class="cart_info_col cart_info_col_total">Tổng giá</div>
                </div>
            </div>
        </div>
        <?php
        $content = Cart::content();
      // echo '<pre>';
        //print_r($content);
       // echo '</pre>';
        ?>


        @if(session()->get('success'))
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Thanh toán thành công!</h4>
            <p>{{ session()->get('success') }}.</p>
            <hr>
            <p class="mb-0">
                Đơn hàng: <strong>#{{$donhang->ma_dh}}</strong><br>
                   Mã khách hàng: {{$donhang->ma_kh}}<br>
                   Tên khách hàng: {{$donhang->ten_kh}}<br>
                   Đơn hàng: <br>
                <?php $don = $donhang->thong_tin; echo $don;?>
                   Tình trạng: {{$donhang->tinh_trang}}<br>
                    Địa chỉ nhận hàng: {{$donhang->dia_chi}}<br>
                    Số điện thoại: {{$donhang->sdt}}<br>
                    Phương thức vận chuyển: {{$donhang->van_chuyen}}<br>
                    Số tiền thanh toán: {{$donhang->tong_gia}}
            </p>
            <form action="{{url('confirm-cart/')}}" method="post">
                @csrf
                <input type="hidden" name="ma_dh" value="{{$donhang->ma_dh}}">
                <input type="hidden" name="ma_kh" value="{{$donhang->ma_kh}}">
                <input type="hidden" name="ten_kh" value="{{$donhang->ten_kh}}">
                <input type="hidden" name="thong_tin" value="{{$donhang->thong_tin}}">
                <input type="hidden" name="tinh_trang" value="1">
                <input type="hidden" name="dia_chi" value="{{$donhang->dia_chi}}">
                <input type="hidden" name="sdt" value="{{$donhang->sdt}}">
                <input type="hidden" name="van_chuyen" value="{{$donhang->van_chuyen}}">
                <input type="hidden" name="tong_gia" value="{{$donhang->tong_gia}}">
                <button type="submit" style="width: 100%;
    height: 50px;
    background: none;
    text-align: center;
    border: solid 2px #1b1b1b;
    overflow: hidden;
    cursor: pointer;">Xác Nhận</button>
            </form>
            <br/><p>Nếu đơn hàng của bạn có lỗi, hãy liên hệ với tôi qua <a href="{{url('lien-he')}}" class="alert-link">FORM</a>. Với tiêu đề <strong>Yêu cầu hỗ trợ đơn hàng #xyz</strong></strong> (xyz là mã đơn hàng của bạn)</p>
        </div>
        @endif
        <div class="row cart_items_row">
            <div class="col">

                <!-- Cart Item -->
                @foreach($content as $cts)
                <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                    <!-- Name -->
                    <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                        <div class="cart_item_image">
                            <div><img src="{{url('/images/content/'.$cts->options->image)}}" alt=""></div>
                        </div>
                        <div class="cart_item_name_container">
                            <div class="cart_item_name"><a href="#">{{$cts->name}}</a></div>
                            <div class="cart_item_edit"><a href="{{url('delete-cart/'.$cts->rowId)}}">Xóa khỏi giỏ</a></div>
                        </div>
                    </div>
                    <!-- Price -->
                    <div class="cart_item_price">{{number_format($cts->price)}} VNĐ</div>
                    <!-- Quantity -->
                    <div class="cart_item_quantity">
                        <div class="product_quantity_container">
                                <form action="{{url('update-qualtity')}}" method="post">
                                    @csrf
                                <input type="number" name="qty" style="
    display: inline-block;
    width: 50px;
    height: 50px;
    border: solid 2px #d0d0d0;
    overflow: hidden;
    padding-left: 15px;
    vertical-align: middle;" type="text" pattern="[0-9]*" value="{{$cts->qty}}">
                                    <input type="hidden" name="rowId" value="{{$cts->rowId}}"/>
                                    <input type="hidden" name="ma_hh" value="{{$cts->id}}"/>
                                    <input type="hidden" name="hang_trong_kho" value="{{$cts->weight}}"/>
                                    <button type="submit" style="width: 100px;
    height: 50px;
    background: none;
    text-align: center;
    border: solid 2px #1b1b1b;
    overflow: hidden;
    cursor: pointer;" <?php $so = $cts->weight - $cts->qty; if($so == 0 ) echo "disabled";?>>Cập nhật</button>
                        </div>

                      </form>
                    </div>
                    <!-- Total -->
                    <div class="cart_item_total"><?php $subtotal = $cts->qty * $cts->price;
                    echo number_format($subtotal)." VND";?></div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="row row_extra">
            <div class="col-lg-4">

                <!-- Delivery -->
                <div class="delivery">
                    <div class="section_title">Phương thức vận chuyển</div>
                    <div class="section_subtitle">Select the one you want</div>
                    <div class="delivery_options">
                        <label class="delivery_option clearfix">Vận chuyển nhanh
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">$4.99</span>
                        </label>
                        <label class="delivery_option clearfix">Vận chuyển dài ngày
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">$1.99</span>
                        </label>
                        <label class="delivery_option clearfix">Vận chuyển miễn phí
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                            <span class="delivery_price">Free</span>
                        </label>
                    </div>
                </div>

                <!-- Coupon Code -->
                <div class="coupon">
                    <div class="section_title">Mã giảm giá</div>
                    <div class="section_subtitle">Nhập mã giảm giá nếu có</div>
                    <div class="coupon_form_container">
                        <form action="#" id="coupon_form" class="coupon_form">
                            <input type="text" class="coupon_input" required="required">
                            <button class="button coupon_button"><span>Apply</span></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-lg-2">
                <div class="cart_total">
                    <div class="section_title">Tổng kết đơn hàng</div>
                    <div class="section_subtitle">Bước  cuối cùng</div>
                    <div class="cart_total_container">
                        <form action="{{url('check-out')}}" method="post">
                            @csrf
                        <ul>

                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Phí vận chuyển</div>
                                <div class="cart_total_value ml-auto">Miễn phí</div>
                            </li>
                            @if(Auth::user())
                                <input type="hidden" name="ma_kh" value="{{Auth::user()->id}}" />
                                <input type="hidden" name="ten_kh" value="{{Auth::user()->name}}" />
                                <input type="hidden" name="dia_chi" value="{{Auth::user()->address}}" />
                                <input type="hidden" name="sdt" value="{{Auth::user()->phone}}" />
                                <input type="hidden" name="tinh_trang" value="0" />
                            <input type="hidden" name="van_chuyen" value="Miễn phí"/>

                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Tên khách hàng</div>
                                    <div class="cart_total_value ml-auto">{{Auth::user()->name}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">SĐT khách hàng</div>
                                    <div class="cart_total_value ml-auto">{{Auth::user()->phone}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Địa chỉ khách hàng</div>
                                    <div class="cart_total_value ml-auto">{{Auth::user()->address}}</div>
                                </li>
                            @endif
                                <input type="hidden" name="thong_tin" value="@foreach($content as $contents) - {{$contents->name}} x {{$contents->qty}} x {{number_format($contents->price)."VND <br/>"}}@endforeach">
                            <?php
                            $gia_tong = Cart::total();
                            $gia_max = str_replace( ',', '', $gia_tong);
                            $gia_end = str_replace( '.00', '', $gia_max);
                            ?>
                            <input type="hidden" name="tong_gia" value="{{$gia_end}}" />
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Thông tin đơn hàng</div>
                            </li>
                                    @foreach($content as $contents)
                                <li class="d-flex flex-row align-items-center justify-content-start"><div class="cart_total_title">{{$contents->name}} x {{$contents->qty}} x {{number_format($contents->price)." VNĐ"}}</div> </li>
                                    @endforeach

                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_total_title">Tổng giá</div>
                                <div class="cart_total_value ml-auto">
                                  {{$gia_end}} VNĐ</div>
                            </li>
                        </ul>
                    </div>
<style>
    .thanh-toan {
        width: 100%;
        height: 50px;
        background: none;
        text-align: center;
        border: solid 2px #1b1b1b;
        overflow: hidden;
        cursor: pointer;
    }
    .thanh-toan:hover {
        background: black;
        color: white;
    }
</style>
                    <button type="submit" class="thanh-toan"
                    <?php
                        $cart = Cart::count();
                        if($cart == 0 )
                            echo "disabled";
                    ?>>Thanh Toán</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
