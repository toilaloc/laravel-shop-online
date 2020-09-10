@extends('layouts.index-lienhe')
@section('content')
    <div class="home_background" style="background-image:url({{URL::asset('sublime/')}}/images/contact.jpg)"></div>
    <div class="home_content_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- Contact -->
    <style>
        .uper {
            margin-top: 40px;
            text-align: center;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="page-wrapper">
                    <div class="heading-page">
                        <h1>Những câu hỏi thường gặp</h1>
                    </div>
                    <div class="wrapbox-content-page">
                        <div class="content-page ">
                            <p><span style="font-size:12pt"><span style="background-color:#ffffff; color:#ff6600"><strong>1/ Tôi chọn size áo như thế nào?</strong></span></span></p>
                            <p><span style="font-size:14px">Chất liệu sản phẩm: 100% Cotton (Nếu có sản phẩm nào cần chất liệu khác, chúng tôi sẽ lưu ý ngay bên dưới sản phẩm)</span></p>
                            <p><span style="font-size:14px"><em><strong>Lưu ý:</strong></em> Đối với Sweater | Hoodie, size sẽ lớn hơn áo thun 1 size, tương ứng nếu áo thun bạn mặc S | M thì Sweater | Hoodie sẽ mặc S,&nbsp;nếu áo thun bạn mặc L&nbsp;thì Sweater | Hoodie sẽ mặc M,&nbsp;nếu áo thun bạn mặc XL&nbsp;thì Sweater | Hoodie sẽ mặc L</span></p>
                            <p><img src="https://file.hstatic.net/1000088324/file/bts_3__1__f995a9cd961541a9beb16160577bb8cb_1024x1024.png"></p>
                            <p><span style="font-size:12pt"><span style="color:#ff6600"><strong>2/ Chất liệu áo là gì?</strong></span>
                                    <br>Shop cam kết dùng thun cotton 100% cho hầu hết sản phẩm của mình, là dòng vải cao cấp và thường dùng của hầu hết các hãng thời trang lớn. Trong trường hợp sử dụng chất liệu khác, chúng tôi sẽ lưu ý trong phần mô tả sản phẩm.<br>
                                    Đặc tính vải: Chất vải thoáng mát, không bị giãn form, hình in đẹp.</span></p>
                            <p><span style="font-size:12pt">* Lưu ý: Có thể bạn cảm nhận vải mỏng hơn những năm 2016 2017 nhưng xin cứ dùng thử, bạn sẽ yêu thích nó ngay. Cảm giác của bạn đến từ việc thay đổi chất liệu cao cấp hơn nên khiến bạn có cảm giác mới lạ mà thôi.</span></p>
                            <p><br><span style="font-size:12pt"><span style="color:#ff6600"><strong>3/ Phí ship được tính như thế nào?&nbsp;</strong></span><br>- Nội thành HCM: Ship 25.000 vnđ.&nbsp;</span></p><p><span style="font-size:12pt">- Nội thành Hà Nội: Ship 35.000 vnđ</span></p>
                            <p><span style="font-size:12pt">- Các tỉnh thành khác: Ship 40.000 vnđ</span></p>
                            <p><span style="font-size:12pt">- Ngoại thành và ngoại tỉnh: Phí ship tăng 5-10.000 vnđ tùy khu vực.&nbsp;</span></p>
                            <p><br><span style="font-size:12pt"><span style="color:#ff6600"><strong>4/ Tôi có thể nhận hàng sau bao lâu?</strong></span></span></p>
                            <p><span style="font-size:12pt">Điều này phụ thuộc vào nhiều yếu tố gồm tồn kho, xác nhận đơn hàng và địa chỉ nhận hàng. Thông thường bạn sẽ nhận được hàng sau 2-3 ngày xác nhận đơn hàng (qua tin nhắn hoặc điện thoại), sẽ lâu hơn một chút với các tỉnh thành ở xa, ngoại thành hay xã ấp.</span></p>
                            <p><span style="font-size:12pt"><span style="color:#ff6600"><strong>5/Tôi có thể thanh toán đơn hàng bằng hình thức gì?</strong></span></span></p>
                            <p><span style="font-size:12pt">Bạn có thể chọn hình thức COD hoặc chuyển khoản trước. Đối với hình thức chuyển khoản, vui lòng theo dõi kĩ thông tin bên dưới:</span></p>
                            <p><span style="font-size:12pt">Thanh toán qua ngân hàng:</span></p>
                            <p><span style="font-size:12pt">- Vietcombank: 0331000433947 - Lê Tiến Dương - Chi nhánh Bến Thành Hồ Chí Minh (Ngân hàng Ngoại Thương)</span></p>
                            <p><span style="font-size:12pt">- VIB: 601704060445870 - Lê Tiến Dương - Chi nhánh Phú Nhuận (Ngân hàng Quốc tế Việt Nam)</span></p>
                            <p><span style="font-size:12pt">- Timo - VPBank: 111782474 - Lê Tiến Dương - Chi nhánh TP HCM (Ngân hàng Việt Nam Thịnh Vượng)</span></p>
                            <p><span style="font-size:12pt">- Momo: 0987220101 - Lê Tiến Dương</span></p>
                            <p><span style="font-size:12pt">Vui lòng ghi rõ họ tên và số điện thoại hoặc mã đơn hàng khi chuyển khoản. </span></p>
                            <p><span style="font-size:12pt">Nếu cần hỗ trợ hãy liên hệ fanpage: <a href="https://www.facebook.com/teeworld.fashion/">https://www.facebook.com/teeworld.fashion/</a> hoặc số điện thoại:&nbsp;0963 990 812</span></p>
                            <p><br><span style="font-size:12pt"><span style="color:#ff6600"><strong>5/ Tôi có được kiểm tra hàng khi nhận không?</strong></span><br>
                                    - Bạn hoàn toàn được kiểm tra có đúng chất lượng, đúng mẫu và size bạn đã chọn không. Tuy nhiên bạn không được thử nhé!</span></p>
                            <p><br><span style="font-size:12pt"><span style="color:#ff6600"><strong>6/ Hướng dẫn giặt áo</strong></span></span></p>
                            <p><span style="font-size:12pt">- Bạn hoàn toàn có thể giặt bằng máy giặt, nhưng lộn ngược áo lại để giữ hình in được lâu hơn.</span></p>
                            <p><span style="font-size:12pt">- Không giặt chung áo trắng và áo tối màu</span></p>
                            <p><span style="font-size:12pt">- Không chà mạnh vào hình in</span></p>
                            <p><span style="font-size:12pt">- Không đổ trực tiếp bột giặc lên hình in</span></p>
                            <p><br><span style="font-size:12pt"><strong><span style="color:#ff6600">7/ Tôi có được đổi trả hàng không?</span></strong></span></p>
                            <p><span style="font-size:12pt">Bạn được đổi trả hàng khi:&nbsp;</span><br>
                                <span style="font-size:12pt">- Áo bị lỗi: Chắc chắn rồi. Shop sẽ đổi lại cho bạn và chịu hoàn toàn phí ship.</span></p>
                            <p><span style="font-size:12pt">- Không vừa size: Bạn có thể liên hệ shop qua fanpage để nhận áo khác size phù hợp hơn (bạn vui lòng chịu phí ship giúp shop nhé)</span></p>
                            <p><span style="font-size:12pt">Đối với những câu hỏi khác, vui lòng liên hệ trực tiếp fanpage Teeworld - Thế Giới Áo Thun qua đường link sau:&nbsp;<a href="https://www.facebook.com/teeworld.fashion/">https://www.facebook.com/teeworld.fashion/</a></span></p>
            </div>
        </div>
    </div>

@endsection
