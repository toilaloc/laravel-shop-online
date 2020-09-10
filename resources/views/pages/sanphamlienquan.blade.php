<div class="products">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="products_title">Sản phẩm liên quan</div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">

                    <!-- Product -->
                    @foreach($hanghoalienquan as $hhlq)
                        @php
                         //   $single_image = json_encode($hhlq->hinh[0]);
                           //  $str = str_replace( '"', '', $single_image );
                        @endphp
                        <div class="product">
                            <div class="product_image"><img src="{{URL::asset('images/content/'.$hhlq->thumbnail)}}" alt=""></div>
                            <div class="product_extra product_new"><a href="">New</a></div>
                            <div class="product_content">
                                <div class="product_title"><a href="{{url('chitiet')}}/{{$hhlq->ma_loai}}/{{$hhlq->id}}">{{$hhlq->ten_hh}}</a></div>
                                <div class="product_price">${{number_format($hhlq->gia)}} VNĐ</div>
                            </div>
                        </div>
                @endforeach
                <!-- Product -->

                </div>
            </div>
        </div>
    </div>
</div>
