
@extends('layouts.index')

@section('content')


    <div class="home_slider_container">
    <!-- Home Slider -->
    <div class="owl-carousel owl-theme home_slider">

        <!-- Slider Item -->
        <div class="owl-item home_slider_item">
            <div class="home_slider_background" style="background-image:url(https://cdn.designbyhumans.com/file/module/grid/3/2020/06/15/1823/background/7038667-1280x480.min.png)"></div>
            <div class="home_slider_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                <div class="home_slider_title">Thanh toán Online.</div>
                                <div class="home_slider_subtitle">Dễ dàng mua sắm với việc thanh toán Online qua thẻ ATM hoặc các ví điện tử như MoMo, Viettel Pay,..</div>
                                <div class="button button_light home_button"><a href="#">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Item -->
        <div class="owl-item home_slider_item">
            <div class="home_slider_background" style="background-image:url(https://static.vecteezy.com/system/resources/previews/000/692/264/non_2x/modern-sale-banner-template-vector.jpg)"></div>
            <div class="home_slider_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                <div class="home_slider_title">Chất liệu tốt.</div>
                                <div class="home_slider_subtitle">Chất liệu mà chúng tôi lựa chọn để may trang phục cho các bạn đó là cotton 100%, điều này mang đến cảm giác
                                    mát mẻ và thoải mái khi sử dụng.</div>
                                <div class="button button_light home_button"><a href="#">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Item -->
        <div class="owl-item home_slider_item">
            <div class="home_slider_background" style="background-image:url(https://helpx.adobe.com/content/dam/help/en/illustrator/how-to/design-a-tshirt/_jcr_content/main-pars/image_630730513/design-a-tshirt_1408x792.jpg)"></div>
            <div class="home_slider_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                <div class="home_slider_title">Giá cả hợp lý.</div>
                                <div class="home_slider_subtitle">Mọi sản phẩm ở trên Gnouhp đều dưới 300.000đ và chất lượng nó mang lại còn hơn cả mức giả. Không còn sự lựa chọn phù
                                hợp nào khác tốt hơn chúng tôi.</div>
                                <div class="button button_light home_button"><a href="#">Shop Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Home Slider Dots -->

    <div class="home_slider_dots_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_slider_dots">
                        <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                            <li class="home_slider_custom_dot active">01.</li>
                            <li class="home_slider_custom_dot">02.</li>
                            <li class="home_slider_custom_dot">03.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    <!-- Ads -->

    <div class="avds">
        <div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
            <div class="avds_small">
                <div class="avds_background" style="background-image:url(https://cdn.shopify.com/s/files/1/0390/6749/products/Basic_E-shirt_Male_Model_grande.jpg?v=1554150213)"></div>
                <div class="avds_small_inner">
                    <div class="avds_discount_container">
                        <img src="images/discount.png" alt="">
                        <div>
                            <div class="avds_discount">
                                <div>20<span>%</span></div>
                                <div>Giảm Giá</div>
                            </div>
                        </div>
                    </div>
                    <div class="avds_small_content">
                        <div class="avds_title">T-shirt</div>
                        <div class="avds_link"><a href="categories.html">Xem Thêm</a></div>
                    </div>
                </div>
            </div>
            <div class="avds_large">
                <div class="avds_background" style="background-image:url(https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d975d954666943.5964eca75fa00.jpg)"></div>
                <div class="avds_large_container">
                    <div class="avds_large_content">
                        <div class="avds_title">Trang phục tự chọn</div>
                        <div class="avds_text">Chúng tôi sẽ gợi ý những sản phẩm phù hợp với bạn. Với nhiều mẫu áo quần khác nhau, đem đến
                        cho bạn một phong cách thời trang trẻ trung và năng động.</div>
                        <div class="avds_link avds_link_large"><a href="categories.html">Xem Thêm</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->
<style>
    .pro_title {
        display: inline-block;
        font-size: 24px;
        font-weight: 500;
        color: #1b1b1b;
        margin-bottom: 15px;
    }
</style>
    <div class="products">
        <div class="container">
            <div class="pro_title">SẢN PHẨM MỚI</div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                @foreach($hanghoamoi as $hanghoamois)
                        <!-- Product -->
                            @php
                             //   $single_image = json_encode($hanghoamois->hinh[0]);
                                // $str = str_replace( '"', '', $single_image );
                            @endphp
                        <div class="product">
                            <div class="product_image"><img src="{{URL::asset('images/content/'.$hanghoamois->thumbnail)}}" alt=""></div>
                            <div class="product_extra product_new"><a href="chitiet/{{$hanghoamois->ma_loai}}/{{$hanghoamois->id}}">NEW</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="chitiet/{{$hanghoamois->ma_loai}}/{{$hanghoamois->id}}">{{$hanghoamois->ten_hh}}</a></div>
                                <div class="product_price">{{number_format($hanghoamois->gia)}} VNĐ</div>
                            </div>
                        </div>
                @endforeach
                        <!-- END Product -->


                    </div>
                    {!!$hanghoamoi->links()!!}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pro_title">T-SHIRTS</div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                    @foreach($tshirt as $tshirts)
                        <!-- Product -->
                            @php
                               // $single_image = json_encode($aos->hinh[0]);
                                // $str = str_replace( '"', '', $single_image );
                            @endphp
                            <div class="product">
                                <div class="product_image"><img src="{{URL::asset('images/content/'.$tshirts->thumbnail)}}" alt=""></div>
                                <div class="product_extra product_new"><a href="chitiet/{{$tshirts->ma_loai}}/{{$tshirts->id}}">NEW</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="chitiet/{{$tshirts->ma_loai}}/{{$tshirts->id}}">{{$tshirts->ten_hh}}</a></div>
                                    <div class="product_price">{{number_format($tshirts->gia)}} VNĐ</div>
                                </div>
                            </div>
                    @endforeach
                    <!-- END Product -->


                    </div>
                    {!!$tshirt->links()!!}
                </div>
            </div></div>

        <div class="container">
            <div class="pro_title">HOODIES</div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                    @foreach($hoodie as $hoodies)
                        <!-- Product -->
                            @php
                               // $single_image = json_encode($quans->hinh[0]);
                                // $str = str_replace( '"', '', $single_image );
                            @endphp
                            <div class="product">
                                <div class="product_image"><img src="{{URL::asset('images/content/'.$hoodies->thumbnail)}}" alt=""></div>
                                <div class="product_extra product_new"><a href="chitiet/{{$hoodies->ma_loai}}/{{$hoodies->id}}">NEW</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="chitiet/{{$hoodies->ma_loai}}/{{$hoodies->id}}">{{$hoodies->ten_hh}}</a></div>
                                    <div class="product_price">{{number_format($hoodies->gia)}} VNĐ</div>
                                </div>
                            </div>
                    @endforeach
                    <!-- END Product -->


                    </div>
                    {!!$hoodie->links()!!}
                </div>
            </div></div>

        <div class="container">
            <div class="pro_title">ACCESSORIES</div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">
                    @foreach($accessories as $accessorie)
                        <!-- Product -->
                            @php
                                // $single_image = json_encode($quans->hinh[0]);
                                 // $str = str_replace( '"', '', $single_image );
                            @endphp
                            <div class="product">
                                <div class="product_image"><img src="{{URL::asset('images/content/'.$accessorie->thumbnail)}}" alt=""></div>
                                <div class="product_extra product_new"><a href="chitiet/{{$accessorie->ma_loai}}/{{$accessorie->id}}">NEW</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="chitiet/{{$accessorie->ma_loai}}/{{$accessorie->id}}">{{$accessorie->ten_hh}}</a></div>
                                    <div class="product_price">{{number_format($accessorie->gia)}} VNĐ</div>
                                </div>
                            </div>
                    @endforeach
                    <!-- END Product -->


                    </div>
                    {!!$accessories->links()!!}
                </div>
            </div></div>
    </div>

    <!-- Ad -->

    <div class="avds_xl">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="avds_xl_container clearfix">
                        <div class="avds_xl_background" style="background-image:url(https://www.quentinblake.com/sites/default/files/styles/homepage_slider/public/shop2lp136b_075.jpg)"></div>
                        <div class="avds_xl_content">
                            <div class="avds_title">T-shirt 2020</div>
                            <div class="avds_text">Sự đột phá về ý tưởng lẫn chất liệu trên các mẫu áo T-shirt trong năm 2020.</div>
                            <div class="avds_link avds_xl_link"><a href="">See More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
