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
</style>
<div id="banner_gr" class="banner_gr section" >
    <div class="banner_def"></div>
    <img src="https://thebestcons.vn/wp-content/uploads/2023/10/Rectangle-903-1.jpg" alt="">
    <div class="gr_head" style="bottom: 3.49rem">
        <div class="grid-container">
            <h1>Giới thiệu về V Design</h1>
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
                    Liên hệ V Design để hiện thực hóa ý tưởng cho thương hiệu của bạn </div>
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
