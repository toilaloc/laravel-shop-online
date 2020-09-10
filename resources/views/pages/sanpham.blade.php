@extends('layouts.index-chitiet')
@section('content')
    @php
      //  $single_image = json_encode($hanghoachitiet->hinh[0]);
       //  $thumb = str_replace( '"', '', $single_image );
    @endphp
    <div class="home_background" style="background-image:url({{URL::asset('images/content/'.$hanghoachitiet->thumbnail)}}); background-attachment: fixed;"></div>
    <div class="home_content_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title" style="color: black;">{{$hanghoachitiet->ten_hh}}<span>.</span></div>
                        <div class="home_text" ><p style="color: black;">{{$hanghoachitiet->mo_ta}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Product Details -->

    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large"><img src="{{URL::asset('/images/content/'.$hanghoachitiet->thumbnail)}}" alt=""><div class="product_extra product_new"><a href="categories.html">New</a></div></div>
                        <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                            @foreach($hanghoachitiet->hinh as $hinh)
                                <div class="details_image_thumbnail active" data-image="{{URL::asset('/images/content/'.$hinh)}}"><img src="{{URL::asset('/images/content/'.$hinh)}}" alt=""></div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Product Content -->

                <div class="col-lg-6">
                    <form action="{{url('save-cart')}}" method="post"/>
                    @csrf
                    <div class="details_content">
                        <div class="details_name">{{$hanghoachitiet->ten_hh}}</div>
                        <div class="details_discount">{{number_format($hanghoachitiet->gia)}} VNĐ</div>
                        <div class="details_price">{{number_format($hanghoachitiet->gia)}} VNĐ</div>

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Số lượng: {{$hanghoachitiet->so_luong}} </div>
                            <span>
                                @if($hanghoachitiet->so_luong > 0)
                                    {{"Còn hàng trong kho"}}
                                @else
                                    {{"Hết hàng"}}
                                    @endif
                            </span>
                        </div>
                        <div class="details_text">
                            <p>{{$hanghoachitiet->mo_ta}}</p>
                        </div>

                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                            <div class="product_quantity clearfix">
                                <span>Qty</span>
                                <input name="so_luong" id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                <input name="id" type="hidden"   value="{{$hanghoachitiet->id}}">
                                <input name="hang_trong_kho" type="hidden" value="{{$hanghoachitiet->so_luong}}">
                                <div class="quantity_buttons">
                                    <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                    <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <style>
                                .them-vao-gio {
                                    width: 178px;
                                    height: 61px;
                                    background: none;
                                    text-align: center;
                                    border: solid 2px #1b1b1b;
                                    overflow: hidden;
                                    cursor: pointer;
                                }
                                .them-vao-gio:hover {
                                    background: black;
                                    color: white;
                                }
                            </style>
                            <button type="submit" class="them-vao-gio" @if($hanghoachitiet->so_luong == 0)
                                {{"disabled"}} @endif>THÊM VÀO GIỎ</button>
                        </div>

                        <!-- Share -->
                        <div class="details_share">
                            <span>Share:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Mô tả</div>
                    </div>
                    <div class="description_text">
                        <p>{{$hanghoachitiet->mo_ta}}</p>
                    </div>
                </div>
            </div>

            <div class="row>
                <div class="col">
                    <div class="description_title_container" style="margin-top: 20px;">
                        <div class="description_title">Bình luận</div>
                    </div>
                    <div class="description_text">
                       <ul>
                        @foreach($binhluan as $bl)
                               <li><strong>{{$bl->id_kh}}</strong> đã bình luận "<em>{{$bl->noi_dung}}</em>" vào {{$bl->ngay_bl}}</li>
                           @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col">
                    @include('layouts.binhluan')
                </div>
            </div>
        </div>
    </div>

    <!-- Products -->

    @include('pages.sanphamlienquan')
    @endsection
