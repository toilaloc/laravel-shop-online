<style>
    .contact
    {
        width: 100%;
        background: #FFFFFF;
        z-index: 2;
        padding-top: 93px;
        padding-bottom: 97px;
    }
    .section_title
    {
        font-size: 24px;
        font-weight: 600;
        color: #1b1b1b;
    }
    .section_subtitle
    {
        font-size: 14px;
        font-weight: 400;
        color: #6c6a74;
        margin-top: 3px;
    }
    .contact_form_container
    {
        width: 100%;
        margin-top: 46px;
    }
    .contact_form > div:not(:last-child)
    {
        margin-bottom: 14px;
    }
    .contact_form label
    {
        font-size: 14px;
        font-weight: 400;
        color: #6c6a74;
    }
    .contact_input
    {
        width: 100%;
        height: 52px;
        background: #f2f4f8;
        border: none;
        outline: none;
        padding-left: 15px;
    }
    .contact_textarea
    {
        height: 197px;
        padding-top: 15px;
    }
    .contact_button
    {
        position: relative;
        margin-top: 10px;
    }
    .contact_button span
    {
        display: block;
        position: relative;
        color: #1b1b1b;
        z-index: 2;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }
    .contact_button:hover span
    {
        color: #FFFFFF;
    }
    .contact_info_section:not(:first-child)
    {
        margin-top: 74px;
    }
    .contact_info_title
    {
        font-size: 18px;
        font-weight: 500;
        color: #1b1b1b;
    }
    .contact_info_section ul
    {
        margin-top: 46px;
    }
    .contact_info_section ul li
    {
        font-size: 14px;
        font-weight: 400;
        color: #1b1b1b;
    }
    .contact_info_section ul li:not(:last-child)
    {
        margin-bottom: 7px;
    }
    .contact_info_section ul li span
    {
        color: #6c6a74;
        margin-left: 8px;
    }
    .map_row
    {
        margin-top: 98px;
    }
    .google_map
    {
        width: 100%;
        height: 577px;
    }
    .map_container
    {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    #map
    {
        width: 100%;
        height: calc(100% + 30px);
    }

</style>

<div class="contact_form_container">
    @if(Auth::check())
    <form action="{{url('binhluanmoi')}}" method="post" class="contact_form">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <!-- Name -->
                <label for="contact_name">Tên khách hàng*</label>
                <input type="text" class="contact_input" value="{{Auth::user()->name}}" readonly>
            </div>
            <div class="col-xl-6">
                <!-- Name -->
                <label for="contact_name">Mã khách hàng*</label>
                <input type="text" name="id_kh" class="contact_input" value="{{Auth::user()->id}}" readonly>
            </div>
            <div  class="col-xl-6 last_name_col">
                <label for="contact_name">Mã hàng hóa*</label>
                <input type="text" name="ma_hh" class="contact_input" value="{{$hanghoachitiet->id}}" readonly>
            </div></div>
            <div>
                <!-- Last Name -->
                <label for="contact_last_name">Ngày bình luận</label>
                <input type="datetime-local" name="ngay_bl" id="contact_last_name" class="contact_input" required="required">
            </div>

        <div>
            <label for="contact_textarea">Nội dung*</label>
            <textarea name="noi_dung" id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
        </div>
        <button class="button contact_button"><span>Send Message</span></button>
    </form>
    @else
       Vui lòng đăng nhập để bình luận
    @endif
</div>
