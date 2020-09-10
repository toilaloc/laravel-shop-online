@extends('layouts.index-ketqua')

@section('content')

    <div class="home_background" style="background-image:url({{URL::asset('sublime')}}/images/background-search.jpg); background-attachment: fixed;"></div>
    <div class="home_content_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_title" style=" -webkit-text-stroke-width: 2px;
-webkit-text-stroke-color: black;">{{$key}}<span>.</span></div>
                        <div class="home_text" style=" -webkit-text-stroke-width: 0.2px;
-webkit-text-stroke-color: white;"><p style="font-size: 17px;">Tất cả kết quả tìm kiếm từ khóa {{$key}} sẽ được tổng hợp bên dưới, có thể có nhiều kết quả hoặc không có bất cứ kết quả nào, đừng thất vọng, nếu không tìm thấy hãy liên hệ với chúng tôi, chúng tôi sẽ giúp bạn.</p></div>
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
                        <div class="results">Kết quả tìm kiếm "{{$key}}"</div>
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
                        @foreach($ketquatimkiem as $kqtk)
                            @php
                             //   $single_image = json_encode($kqtk->hinh[0]);
                                // $str = str_replace( '"', '', $single_image );
                            @endphp
                            <div class="product">
                                <div class="product_image"><img src="{{URL::asset('/images/content')}}/{{$kqtk->thumbnail}}" alt=""></div>
                                <div class="product_extra product_new"><a href="../chitiet/{{$kqtk->id}}">New</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="../chitiet/{{$kqtk->ma_loai}}/{{$kqtk->id}}">{{$kqtk->ten_hh}}</a></div>
                                    <div class="product_price">{{number_format($kqtk->gia)}} VNĐ</div>
                                </div>
                            </div>
                    @endforeach

                    <!-- Product -->

                    </div>
                  {!! $ketquatimkiem->links() !!}

                </div>
            </div>
        </div>
    </div>



@endsection

