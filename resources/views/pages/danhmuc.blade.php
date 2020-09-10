@extends('layouts.index-loaihang')

@section('content')

    <div class="home_background" style="background-image:url(https://www.digitalartsonline.co.uk/cmsdata/slideshow/3698149/lydia-one.jpg); background-attachment: fixed;"></div>
    <div class="home_content_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title">{{$danhmuctheloai->ten_loai}}<span>.</span></div>
                        <div class="home_text"><p>{{$danhmuctheloai->mo_ta}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Products -->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Showing <span>8</span> results</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Sort by</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="product_grid">

                        <!-- Product -->
                        @foreach($danhmuchanghoa as $dmhh)
                        <div class="product">
                            @php
                             //   $single_image = json_encode($dmhh->hinh[0]);
                               //  $str = str_replace( '"', '', $single_image );
                            @endphp
                            <div class="product_image"><img src="{{URL::asset('images/content/'.$dmhh->thumbnail)}}" alt=""></div>
                            <div class="product_extra product_new"><a href="../chitiet/{{$dmhh->id}}">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="../chitiet/{{$dmhh->ma_loai}}/{{$dmhh->id}}">{{$dmhh->ten_hh}}</a></div>
                                <div class="product_price">{{number_format($dmhh->gia)}} VNĐ</div>
                            </div>
                        </div>
                    @endforeach

                        <!-- Product -->

                    </div>
                    {!! $danhmuchanghoa->links() !!}

                </div>
            </div>
        </div>
    </div>



@endsection
