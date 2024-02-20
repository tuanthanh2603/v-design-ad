@extends('user.layouts.master')
@section('bodyClass', 'page-template page-template-templates page-template-projects page-template-templatesprojects-php page page-id-78 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover vsc-initialized using-mouse')
@section('content')
<style>
    div#banner_gr {
        text-align: center;
    }
    .section {
        width: 100vw !important;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        overflow: hidden;
    }
    div#banner_gr:before {
        height: 100%;
        width: 100%;
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        background: radial-gradient(#ff000000, black);
    }
    div#banner_gr img {
        display: block;
        width: 100%;
    }
    .gr_head {
        width: 100%;
        position: absolute;
        z-index: 9;
        bottom: 3.49rem;
        left: 50%;
        transform: translateX(-50%);
        max-width: 72.917rem;
    }

    .container::before{
        content: ".";
        display: block;
        overflow: hidden;
        visibility: hidden;
        font-size: 0;
        line-height: 0;
        width: 0;
        height: 0;
    }
    div#banner_gr h1 {
        color: var(--1, #FFF);
        text-align: center;
        font-size: 3.646rem;
        text-transform: uppercase;
        margin: 0;
    }
    section {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    nav.breadcrumb ul {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    nav.breadcrumb * {
        font-style: unset;
        font-size: 0.78125rem;
    }
    nav.breadcrumb a {
        color: white;
        opacity: 0.5;
    }
    nav.breadcrumb ul svg {
        display: block;
        margin: 0 0.521rem;
    }


.title-info-page{
    display: flex;
    align-items: center;
    margin-bottom: 1.302rem;
}
.title-info-page .num{
    line-height: .8;
    font-size: 4.167rem;
    color: #C5A47E;
    margin-right: 0.677rem;
}
.title-info-page h3{
    color: #C5A47E;
    font-size: 1.146rem;
    margin: 0;
    font-weight: 600;
}
.content-info-page{
    font-size: 0.9375rem;
    color: white;
    line-height: 1.6;
    margin-bottom: 0;
}
.icon-intro{
    height: 3.4375rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: flex-end;
    position: relative;
    display: inline-block;
    color: #C5A47E;
}
.icon-intro svg{
    max-height: 100%;
    width: auto;
    text-align: center;
    transition: transform 0.5s ease;
    color: #C5A47E;

}
.icon-intro:hover svg {
        transform: rotate(360deg);
    }
</style>
<div id="banner_gr" class="banner_gr section" >
    <div class="banner_def"></div>
    <img src="{{ asset('static/intro.jpg') }}" alt="">
    <div class="gr_head" style="bottom: 3.49rem">
        <div class="grid-container">
            <h1>Giới thiệu về V Design AD</h1>
            <section class="breadcrumbs">
                <div class="row">
                    <div class="col-xl-12">
                        <div id="breadcrumb" class="navigation">
                            <nav class="breadcrumb">
                                <ul style="list-style-type: none;">
                                    <li class="list_br"><a title="Home" itemprop="url" href="{{ url('/') }}"><cite itemprop="title">Trang chủ</cite></a>
                                    </li><span class="divider"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                            height="21" viewBox="0 0 20 21" fill="none">
                                            <path d="M7.5 4.0791L13.75 10.3291L7.5 16.5791" stroke="white"
                                                stroke-linecap="square"></path>
                                        </svg></span>
                                    <li title="Giới thiệu" style="color: #C5A47E">
                                        <cite itemprop="title">Giới thiệu</cite>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<section class="section home_3 bg_cus rocket-lazyload lazyloaded"
    style="padding: 4rem 0; background-image: url(&quot;{{ asset('assets/images/slide-1-1-1.jpeg') }}&quot;);"
    data-ll-status="loaded">
    <div class="grid-container">
        <div class="flex_box jus_between al_center tablet_flex_col">
            <div class="col_4 tablet_col_12 tablet_text_center aos-init aos-animate" data-aos="fade-right" data-aos-delay="300"
                data-aos-duration="500">
                <img src="{{ asset('static/logo-vdesign.png') }}" alt="">
                <div style="color: #fff">V Design AD - Đối Tác Hoàn Hảo Cho Bảng Hiệu Quảng Cáo</div>
            </div>
            <div class="col_7 tablet_col_12 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300"
                data-aos-duration="500" style="color:#fff">

                <span >GIỚI THIỆU</span>
                <h2 style="color: #C5A47E; font-size: 3.3rem;">V Design AD</h2>
                <div>Chúng tôi tạo nên những sản phẩm đẳng cấp, kết hợp sự hiện đại, đơn giản thanh lịch và màu sắc sang trọng. Tại V Design AD, chúng tôi cam kết mang lại chất lượng tốt nhất thông qua dịch vụ thiết kế & thi công trọn gói. Chúng tôi chăm sóc từng công đoạn với sự chỉnh chu và tỉ mỉ, biến ý tưởng trên bảng vẽ thành hiện thực với thời gian hợp lý.</div>
                <div class="grid_box grid_3 mobile_grid_3" style="margin-top: 3rem">
                    <div>
                        <div class="icon-intro">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                            </svg>
                        </div>
                        <h3 style="font-size: 0.8rem; color:#C5A47E;">TƯ VẤN</h3>
                    </div>
                    <div>
                        <div class="icon-intro">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-dropbox" viewBox="0 0 16 16">
                                <path d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555z"/>
                              </svg>
                        </div>
                        <h3 style="font-size: 0.8rem; color:#C5A47E;">THIẾT KẾ</h3>
                    </div>
                    <div>
                        <div class="icon-intro">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-palette2" viewBox="0 0 16 16">
                                <path d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a3 3 0 0 1-2.121-.879A3 3 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0M15 15v-4H9.258l-4.015 4zM0 .5v12.495zm0 12.495V13z"/>
                              </svg>
                        </div>
                        <h3 style="font-size: 0.8rem; color:#C5A47E;">THI CÔNG</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section home_3 bg_cus rocket-lazyload lazyloaded"
    style="background-image: url(&quot;{{ asset('assets/images/slide-1-1-1.jpeg') }}&quot;);"
    data-ll-status="loaded">
    <div class="grid-container">
        <div class="flex_box jus_between al_center tablet_flex_col">
            <div class="col_4 tablet_col_12 tablet_text_center aos-init aos-animate" data-aos="fade-right" data-aos-delay="300"
                data-aos-duration="500">
                <h2 class="sec_title text_white">
                    GIÁ TRỊ CỐT LÕI </h2>

            </div>
            <div class="col_7 tablet_col_12 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300"
                data-aos-duration="500" style="color:#fff">

                Với mục tiêu mang đến những trải nghiệm hoàn hảo và tuyệt vời nhất. Sự hài lòng của khách hàng chính là động lực phát triển của Công ty và chúng tôi luôn tự hào và không ngừng phấn đấu để đạt được đánh giá tích cực và sự giới thiệu từ những khách hàng cũ.
            </div>
        </div>
        <div class="grid_box grid_3 mobile_grid_1">
            <div class=" relative hover_zoom_img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300"
                data-aos-duration="500" style="border: 1px solid #C5A47E; background: #000; padding: 2.604rem; ">
                <div class="title-info-page">
                    <div class="num"> 01 </div>
                    <h3> CÔNG NGHỆ HÓA</h3>
                </div>
                <div class="content-info-page">
                    Áp dụng công nghệ 4.0 toàn bộ khâu để tối ưu hiệu quả. Tìm hiểu và thực hành, sẵn sàng thử sức với những điều mới để có chất lượng hoàn thiện nhất.
                </div>
            </div>

            <div class=" relative hover_zoom_img aos-init aos-animate" data-aos="fade-up" data-aos-delay="500"
                data-aos-duration="500" style="border: 1px solid #C5A47E; background: #000; padding: 2.604rem; ">
                <div class="title-info-page">
                    <div class="num"> 02 </div>
                    <h3> ĐỀ CAO LỢI ÍCH KHÁCH HÀNG</h3>
                </div>
                <div class="content-info-page">

                    Lấy “Tốc độ, hiệu quả và tiết kiệm chi phí” làm tiền đề cho mỗi dự án. Đặt trọn tâm huyết và khả năng vào mọi dự án của Khách hàng.
                </div>
            </div>

            <div class="relative hover_zoom_img aos-init aos-animate" data-aos="fade-up" data-aos-delay="700"
                data-aos-duration="500" style="border: 1px solid #C5A47E; background: #000; padding: 2.604rem; ">
                <div class="title-info-page">
                    <div class="num"> 03 </div>
                    <h3> ĐỘI NGŨ CHUYÊN NGHIỆP</h3>
                </div>
                <div class="content-info-page">

                    Tư duy học hỏi, trau dồi và sẵn sàng cập nhật xu hướng mới để cải thiện kỹ năng chuyên môn. Tư vấn và giải đáp mọi thắc mắc nhanh chóng và chuyên nghiệp.
                </div>
            </div>
           
        </div>

    </div>
</section>
<section class="section" style="background: #AE8B63; padding: 3.125rem 0 2.604rem;">
    <div class="grid-container">
        <div class="flex_box jus_between al_center tablet_flex_col">
            <div class="col_4 tablet_col_12 tablet_text_center aos-init aos-animate" data-aos="fade-right" data-aos-delay="300"
                data-aos-duration="500">
                <h2 class="sec_title text_white">
                    Liên hệ tư vấn </h2>
                <div class="des fs_20 lh_30 fw400 text_white">
                    Liên hệ V Design AD để hiện thực hóa ý tưởng cho thương hiệu của bạn </div>
            </div>
            <div class="col_7 tablet_col_12 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300"
                data-aos-duration="500">
                <div class="terms_menu">
                    @include('user.components.form-contact')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
