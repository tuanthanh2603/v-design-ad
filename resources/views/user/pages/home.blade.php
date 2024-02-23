@extends('user.layouts.master')
@php
    $showLoading = true;
@endphp
@section('bodyClass',
    'home page-template page-template-templates page-template-home page-template-templateshome-php
    page page-id-316 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers
    header-aligned-left dropdown-hover featured-image-active')
@section('content')
    <style>
        .num svg{
            font-weight: 900;
            line-height: 1;

        }
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

        .container::before {
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


        .title-info-page {
            display: flex;
            align-items: center;
            margin-bottom: 1.302rem;
        }

        .title-info-page .num {
            line-height: .8;
            font-size: 4.167rem;
            color: #C5A47E;
            margin-right: 0.677rem;
        }

        .title-info-page h3 {
            color: #C5A47E;
            font-size: 1.146rem;
            margin: 0;
            font-weight: 600;
        }

        .content-info-page {
            font-size: 0.9375rem;
            color: white;
            line-height: 1.6;
            margin-bottom: 0;
        }

        .icon-intro {
            height: 3.4375rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-end;
            position: relative;
            display: inline-block;
            color: #C5A47E;
        }

        .icon-intro svg {
            max-height: 100%;
            width: auto;
            text-align: center;
            transition: transform 0.5s ease;
            color: #C5A47E;

        }

        .icon-intro:hover svg {
            transform: rotate(360deg);
        }
        .btn_contact_home{
            display: inline-flex;
            height: 2.604rem;
            align-items: center;
            min-width: 10.417rem;
            font-size: 0.729rem;
            font-weight: 500 !important;
            line-height: 1.458rem;
            color: #fff;
            border: 1px solid #fff;
            justify-content: center;
            cursor: pointer;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }
        .btn_contact_home:hover{
            background-color: #C5A47E
        }
    </style>
    <section class="section home_banner">
        <div class="swiper home_swiper">
        <div class="swiper-wrapper">
            @foreach ($projects_featured as $project_featured)
                <div class="swiper-slide">
                    <div class="img_wrap">
                        <img width="2560" height="1235" src="{{ $project_featured->image }}" class="lazyloaded" alt=""
                            decoding="async" sizes="(max-width: 2560px) 100vw, 2560px"
                            srcset="{{ $project_featured->image }} 2560w, {{ $project_featured->image }} 300w, {{ $project_featured->image }} 1024w, {{ $project_featured->image }} 768w, {{ $project_featured->image }} 1536w, {{ $project_featured->image }} 2048w"
                            data-ll-status="loaded">
                        <noscript>
                            <img width="2560" height="1235" src="{{ $project_featured->image }}" class="" alt="" decoding="async"
                                srcset="{{ $project_featured->image }} 2560w, {{ $project_featured->image }} 300w, {{ $project_featured->image }} 1024w, {{ $project_featured->image }} 768w, {{ $project_featured->image }} 1536w, {{ $project_featured->image }} 2048w"
                                sizes="(max-width: 2560px) 100vw, 2560px" />
                        </noscript>
                    </div>
                    <a class="wrap_link" href="/du-an/{{ $project_featured->slug }}"
                        title="{{ mb_strtoupper($project_featured->name, 'UTF-8') }}">{{ mb_strtoupper($project_featured->name, 'UTF-8') }}</a>
                    <a href="/du-an/{{ $project_featured->slug }}" class="flex_box al_center">
                        <div class="plus_btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0.400391" y1="11.6523" x2="23.6001" y2="11.6523" stroke="white" />
                                <line x1="12.0527" y1="23.1997" x2="12.0527" y2="2.18557e-08" stroke="white" />
                            </svg>
                        </div>
                        <h3 class="m_0 text_white font_oswald fw300">{{ mb_strtoupper($project_featured->name, 'UTF-8') }}</h3>
                    </a>
                </div>
            @endforeach
        </div>

        </div>
    </section>

    <section data-bg="/assets/images/slide-1-1.jpeg" class="section home_1 bg_cus rocket-lazyload">
        <div class="grid-container">
            <div class="flex_box tablet_flex_col">
                <div class="col_4 tablet_col_12" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                    <h2 class="sec_title text_white">V Design AD</h2>
                    <div class="des fs_20 lh_30 fw400 text_white">V Design AD - Biến ý tưởng thành hiện thực</div>
                </div>
                <div class="col_8 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                    <div class="fs_15 lh_30 fw300 text_gray">
                        <p>V Design AD cam kết phục vụ cộng đồng thông qua việc tạo ra những bảng hiệu quảng cáo độc đáo và chất lượng. Chúng tôi kết hợp sự sáng tạo trong thiết kế với kỹ thuật thi công chuyên nghiệp để mang đến những giải pháp quảng cáo đáng tin cậy và ấn tượng cho khách hàng. Đội ngũ nhân viên tài năng và đam mê của chúng tôi luôn sẵn lòng làm việc hết mình để đáp ứng mọi yêu cầu và mang lại sự hài lòng tối đa cho quý khách hàng.</p>

                    </div>
                </div>
            </div>
            <section style="padding: 5rem 0;" class=" home_3 bg_cus rocket-lazyload lazyloaded" data-ll-status="loaded">
                <div class="grid-container">

                    <div class="grid_box grid_3 mobile_grid_1">
                        <div class=" relative hover_zoom_img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300"
                            data-aos-duration="500"
                            style="border: 1px solid #C5A47E; background: #000; padding: 2.604rem; ">
                            <div class="title-info-page">
                                <div class="num">
                                    <i class="fa fa-users"></i>
                                 </div>
                                <h3> TƯ VẤN BẢNG HIỆU</h3>
                            </div>
                            <div class="content-info-page">
                                Để bạn có được một bảng hiệu vừa phụ hợp với yêu cầu, vừa tiết kiệm chi phí và bền vững nhất. Chất liệu, kết cấu, phong thuỷ ... là những vấn đề rất quan trọng bạn nên quan tâm khi chuẩn bị làm bảng hiệu.
                            </div>
                        </div>

                        <div class=" relative hover_zoom_img aos-init aos-animate" data-aos="fade-up" data-aos-delay="500"
                            data-aos-duration="500"
                            style="border: 1px solid #C5A47E; background: #000; padding: 2.604rem; ">
                            <div class="title-info-page">
                                <div class="num">
                                    <i class="fa fa-cube"></i>
                                </div>
                                <h3> BÁO GIÁ BẢNG HIỆU</h3>
                            </div>
                            <div class="content-info-page">

                                Chúng tôi sẵn lòng đến trực tiếp công trình để đo đạc, khảo sát, chụp hình và lên phối cảnh (Bản vẽ thiết kế) cho công trình của quý khách hàng. Những hoạt động này chúng tôi miễn phí hoàn toàn.
                            </div>
                        </div>

                        <div class="relative hover_zoom_img aos-init aos-animate" data-aos="fade-up" data-aos-delay="700"
                            data-aos-duration="500"
                            style="border: 1px solid #C5A47E; background: #000; padding: 2.604rem; ">
                            <div class="title-info-page">
                                <div class="num">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                                      </svg>
                                </div>
                                <h3> THI CÔNG BẢNG HIỆU</h3>
                            </div>
                            <div class="content-info-page">

                                V Design AD nhận thi công tất cả các loại bảng hiệu, biển led, bảng ma trận, màn hình led, biển chỉ dẫn, biển bảng văn phòng trên toàn miền Nam. Cam kết với chất lượng tốt nhất, uy tín và bảo hành lâu nhất
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <div class="flex_box jus_between al_center tablet_flex_col">
                <div class="col_4 tablet_col_12 tablet_text_center" data-aos="fade-right" data-aos-delay="300"
                    data-aos-duration="500">
                    <h2 class="sec_title text_white">DỰ ÁN TIÊU BIỂU</h2>
                    <div class="des fs_20 lh_30 fw400 text_white">Các dự án V Design AD đã thực hiện</div>
                </div>
                <div class="col_7 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                    <div class="terms_menu">
                        <ul class="ls_none m_0 flex_box al_center jus_end tablet_jus_center">
                            <li>
                                <a class="flex_box al_center" href="{{ url('/du-an') }}">
                                    <svg width="0" height="1" viewBox="0 0 35 1" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="35" y1="0.5" x2="-4.37114e-08" y2="0.499997"
                                            stroke="#FFF"></line>
                                    </svg>
                                    <span class="fs_14 lh_28 fw500 text_white">TẤT CẢ DỰ ÁN</span>
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                <li>
                                    <a class="flex_box al_center" href="/danh-muc/{{ $category->slug }}">
                                        <svg width="0" height="1" viewBox="0 0 35 1" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <line x1="35" y1="0.5" x2="-4.37114e-08" y2="0.499997"
                                                stroke="#FFF"></line>
                                        </svg>
                                        <span class="fs_14 lh_28 fw500 text_white">{{ $category->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <section class="section about_menu" >
        <div class="menu_about">
            <ul id="menu-menu-media" class="m_0 flex_box al_center ls_none">
                @foreach ($categories_2 as $key => $categories)
                    @if ($key < 6)
                        <li id="menu-item-{{$key}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{$key}}">
                            <a href="/danh-muc/{{ $categories->slug }}">{{ $categories->name }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>

            @if (count($categories_2) > 6)
                <ul id="menu-menu-media" class="m_0 flex_box al_center ls_none">
                    @foreach ($categories_2 as $key => $categories)
                        @if ($key >= 6)
                            <li id="menu-item-{{$key}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{$key}}">
                                <a href="/danh-muc/{{ $categories->slug }}">{{ $categories->name }}</a>
                            </li>
                            <li id="menu-item-{{$key}}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{$key}}">
                                <a href="{{ url('/du-an') }}">Xem tất cả dự án</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif

        </div>
    </section>



    <section class="section home_2" >
        <div data-bg="{{ isset($projects[0]) ? $projects[0]->image : '' }}"
            class="box_project_home bg_cus rocket-lazyload" data-aos="fade-up" data-aos-delay="300"
            data-aos-duration="500">
            <div class="grid_box grid_3 mobile_grid_2">
                @foreach ($projects as $project)
                    <div data-bg="{{ $project->image }}" class="item relative bg_cus rocket-lazyload"
                        data-image="{{ $project->image }}">
                        <a href="/du-an/{{ $project->slug }}" class="wrap_link"></a>
                        <h3 class="fs_25 lh_28 fw300 text_white font_oswald text_uppercase">
                            {{ mb_strtoupper($project->name, 'UTF-8') }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section home_3 bg_cus rocket-lazyload lazyloaded"
                        style="background-image: url(&quot;{{ asset('assets/images/slide-1-1-1.jpeg') }}&quot;);"
                        data-ll-status="loaded">
                        <div class="grid-container">
                            <div class="flex_box jus_between al_center tablet_flex_col">
                                <div class="col_4 tablet_col_12 tablet_text_center aos-init aos-animate" data-aos="fade-right"
                                    data-aos-delay="300" data-aos-duration="500">
                                    <h2 class="sec_title text_white">
                                        DỊCH VỤ </h2>
                                    <div class="des fs_20 lh_30 fw400 text_white">
                                        Các dịch vụ được cung cấp bởi V Design AD</div>
                                </div>
                                <div class="col_7 tablet_col_12 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300"
                                    data-aos-duration="500">
                                    <div class="terms_menu">
                                        <ul class="ls_none m_0 flex_box al_center jus_end tablet_jus_center">

                                            <li>
                                                <a class="flex_box al_center" href="{{ url('/dich-vu') }}" target="">
                                                    <svg width="0" height="1" viewBox="0 0 35 1" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <line x1="35" y1="0.5" x2="-4.37114e-08" y2="0.499997"
                                                            stroke="#FFF"></line>
                                                    </svg>
                                                    <span class="fs_14 lh_28 fw500 text_white">
                                                        TẤT CẢ DỊCH VỤ </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <section class="section post_text_img">
                                @foreach ($services_2 as $key => $service)
                    @if ($key % 2 == 0)

                        <div class="grid-container" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" style="margin-bottom: 5rem;">
                            <h2 class="box_title" style="text-align: center; color: #C5A47E; ">
                                {{ $service->name }}
                            </h2>
                            <div class="flex_box al_start tablet_col_reverse" >
                                <div class="col_6 tablet_col_12" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                                    <div class="img_wrap">
                                        <img width="573" height="379" src="{{ $service->image }}" class="lazyloaded" alt="" decoding="async" data-ll-status="loaded">
                                        <noscript>
                                            <img width="573" height="379" src="{{ $service->image }}" class="" alt="" decoding="async">
                                        </noscript>
                                    </div>
                                </div>
                                <div class="col_6 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                                    <div class="content_post" >
                                        <p style="color: #FFF">{{ $service->description }}</p>
                                        <div class="text_center">
                                            <div class="load_more_projects btn_contact_home" onclick="window.location.href='{{ url('/lien-he') }}'">
                                                Liên hệ tư vấn
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else

                        <div class="grid-container" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" style="margin-bottom: 5rem;">
                            <h2 class="box_title" style="text-align: center; color: #C5A47E; ">
                                {{ $service->name }}
                            </h2>
                            <div class="flex_box al_start tablet_col_reverse">
                                <div class="col_6 tablet_col_12" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                                    <div class="content_post" >
                                        <p style="color: #FFF">{{ $service->description }}</p>
                                        <div class="text_center">
                                            <div class="load_more_projects btn_contact_home" onclick="window.location.href='{{ url('/lien-he') }}'">
                                                Liên hệ tư vấn
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col_6 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                                    <div class="img_wrap">
                                        <img width="573" height="379" src="{{ $service->image }}" class="lazyloaded" alt="" decoding="async" data-ll-status="loaded">
                                        <noscript>
                                            <img width="573" height="379" src="{{ $service->image }}" class="" alt="" decoding="async">
                                        </noscript>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

        </div>
    </section>


    <section data-bg="/assets/images/slide-1-1-1.jpeg" class="section home_3 bg_cus rocket-lazyload">
        <div class="grid-container">
            <div class="flex_box jus_between al_center tablet_flex_col">
                <div class="col_4 tablet_col_12 tablet_text_center" data-aos="fade-right" data-aos-delay="300"
                    data-aos-duration="500">
                    <h2 class="sec_title text_white" style="font-size: 3rem">
                        XU HƯỚNG THIẾT KẾ </h2>
                    <div class="des fs_20 lh_30 fw400 text_white">
                        Xu hướng, kiến thức thiết kế mới nhất </div>
                </div>
                <!-- <div class="col_7 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                        <div class="terms_menu">
                            <ul class="ls_none m_0 flex_box al_center jus_end tablet_jus_center">
                                @foreach ($topics as $topic)
    <li>
                                    <a class="flex_box al_center" href="/chu-de/{{ $topic->slug }}">
                                        <svg width="0" height="1" viewBox="0 0 35 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line x1="35" y1="0.5" x2="-4.37114e-08" y2="0.499997" stroke="#FFF"></line>
                                        </svg>
                                        <span class="fs_14 lh_28 fw500 text_white">{{ mb_strtoupper($topic->name, 'UTF-8') }}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> -->
            </div>
            <div class="grid_box grid_3 mobile_grid_1">
                @foreach ($posts as $post)
                    <div class="post_item relative hover_zoom_img" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="500">
                        <a href="/bai-viet/{{ $post->slug }}" class="wrap_link"></a>
                        <div class="img_wrap">
                            <img width="840" height="511"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20840%20511'%3E%3C/svg%3E"
                                class="hover_zoom" alt="" decoding="async"
                                data-lazy-src="{{ $post->image }}" />
                            <noscript>
                                <img width="840" height="511" src="{{ $post->image }}" class="hover_zoom"
                                    alt="" decoding="async" />
                            </noscript>
                        </div>
                        <div class="cont_wrap">
                            <div class="date_cat flex_box al_center">
                                <a href="/chu-de/{{ $post->topic->slug }}">{{ $post->topic->name }}</a>
                                <div class="date">{{ $post->created_at->format('d/m/Y') }}</div>
                            </div>
                            <h3 class="font_oswald fw300 limit_line ts_04 limit_2 text_uppercase">
                                {{ mb_strtoupper($post->title, 'UTF-8') }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section data-bg="/assets/images/slide-1-1-1.jpeg" class="section home_3 bg_cus rocket-lazyload">
        <div class="grid-container">
            <div class="flex_box jus_between al_center tablet_flex_col">
                <div class=" tablet_col_12 tablet_text_center" data-aos="fade-right" data-aos-delay="300"
                    data-aos-duration="500">
                    <h2 class="sec_title text_white" style="font-size: 3rem">
                        LÝ DO BẠN NÊN CHỌN V DESIGN AD </h2>
                </div>
            </div>
            <div class=" recruit_content flex_box mobile_col_12" data-aos="fade-right" data-aos-delay="300"  data-aos-duration="500">
                <div class="col_6" data-aos="fade-right" data-aos-delay="300"  data-aos-duration="500">
                    <ul style="color: #FFF;">
                        <li style="padding: 1rem">Đội ngũ nhân viên thiết kế chuyên nghiệp</li>
                        <li style="padding: 1rem">Xưởng sản xuất đa năng đáp ứng tốt nhất yêu cầu của quý khách</li>
                        <li style="padding: 1rem">Phong cách làm việc chuyên nghiệp và nhanh nhẹn, đơn giản</li>
                        <li style="padding: 1rem">Giá thành cạnh tranh và rẻ nhất</li>
                        <li style="padding: 1rem">Giao hàng tận nơi cho khách hàng</li>
                    </ul>
                </div>
                <div class="col_6" data-aos="fade-left" data-aos-delay="300"  data-aos-duration="500">
                    <ul style="color: #FFF;">
                        <li style="padding: 1rem">Chiết khấu cao cho người đặt hàng</li>
                        <li style="padding: 1rem">Thời gian sản xuất cũng như thi công nhanh</li>
                        <li style="padding: 1rem">Đến tận nơi tư vấn và ký hợp đồng</li>
                        <li style="padding: 1rem">Hình thức đặt hàng - thanh toán đơn giản</li>
                        <li style="padding: 1rem">Luôn luôn lắng nghe - luôn luôn thấu hiểu</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
