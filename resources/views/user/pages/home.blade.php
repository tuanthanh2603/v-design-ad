@extends('user.layouts.master')
@php
    $showLoading = true;
@endphp
@section('bodyClass', 'home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-316 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover featured-image-active')
@section('content')
<section class="section home_banner">
    <div class="swiper home_swiper">
        <div class="swiper-wrapper">
            @foreach($projects as $project)
            <div class="swiper-slide">
                <div class="img_wrap">
                    {{-- <img width="2560" height="1235" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202560%201235'%3E%3C/svg%3E" class="" alt="" decoding="async" data-lazy-src="{{ $project->image }}" /> --}}
                    <img width="2560" height="1235" src="{{ $project->image }}" class="lazyloaded" alt="" decoding="async" sizes="(max-width: 2560px) 100vw, 2560px" srcset="{{ $project->image }} 2560w, {{ $project->image }} 300w, {{ $project->image }} 1024w, {{ $project->image }} 768w, {{ $project->image }} 1536w, {{ $project->image }} 2048w" data-ll-status="loaded">
                    {{-- <noscript>
                        <img width="2560" height="1235" src="{{ $project->image }}" class="" alt="" decoding="async" />
                    </noscript> --}}
                    <noscript><img width="2560" height="1235" src="{{ $project->image }}" class="" alt="" decoding="async" srcset="{{ $project->image }} 2560w, {{ $project->image }} 300w, {{ $project->image }} 1024w, {{ $project->image }} 768w, {{ $project->image }} 1536w, {{ $project->image }} 2048w" sizes="(max-width: 2560px) 100vw, 2560px" /></noscript>
                </div>
                <a class="wrap_link" href="/du-an/{{ $project->slug }}" title="{{ mb_strtoupper($project->name, 'UTF-8') }}">{{ mb_strtoupper($project->name, 'UTF-8') }}</a>
                <a href="/du-an/{{ $project->slug }}" class="flex_box al_center">
                    <div class="plus_btn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="0.400391" y1="11.6523" x2="23.6001" y2="11.6523" stroke="white" />
                            <line x1="12.0527" y1="23.1997" x2="12.0527" y2="2.18557e-08" stroke="white" />
                        </svg>
                    </div>
                    <h3 class="m_0 text_white font_oswald fw300">{{ mb_strtoupper($project->name, 'UTF-8') }}</h3>
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
                <div class="des fs_20 lh_30 fw400 text_white">V Design AD - kiến tạo nên môi trường sống bền vững cho con người</div>
            </div>
            <div class="col_8 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                <div class="fs_15 lh_30 fw300 text_gray">
                    <p>V Design AD lựa chọn sứ mệnh phục vụ cộng đồng thông qua những thiết kế quy hoạch, cảnh quan, kiến trúc, nội thất và việc xây dựng các công trình bền vững bởi một đội ngũ cộng sự tài năng và đầy lòng đam mê.</p>
                    <p>Chúng tôi cam kết kiến tạo những công trình chất lượng, bền vững nhất và giúp cộng đồng nhận ra được những giá trị của chính họ.</p>
                </div>
            </div>
        </div>
        <div class="flex_box jus_between al_center tablet_flex_col">
            <div class="col_4 tablet_col_12 tablet_text_center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                <h2 class="sec_title text_white">DỰ ÁN</h2>
                <div class="des fs_20 lh_30 fw400 text_white">Các dự án V Design AD đã thực hiện</div>
            </div>
            <div class="col_7 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                <div class="terms_menu">
                    <ul class="ls_none m_0 flex_box al_center jus_end tablet_jus_center">
                        <li>
                            <a class="flex_box al_center" href="{{ url('/du-an') }}">
                                <svg width="0" height="1" viewBox="0 0 35 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="35" y1="0.5" x2="-4.37114e-08" y2="0.499997" stroke="#FFF"></line>
                                </svg>
                                <span class="fs_14 lh_28 fw500 text_white">TẤT CẢ DỰ ÁN</span>
                            </a>
                        </li>
                        @foreach($categories as $category)
                        <li>
                            <a class="flex_box al_center" href="/danh-muc/{{ $category->slug }}">
                                <svg width="0" height="1" viewBox="0 0 35 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="35" y1="0.5" x2="-4.37114e-08" y2="0.499997" stroke="#FFF"></line>
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
<section class="section home_2">
    <div data-bg="{{ isset($projects[0]) ? $projects[0]->image : '' }}" class="box_project_home bg_cus rocket-lazyload" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
        <div class="grid_box grid_3 mobile_grid_2">
            @foreach($projects as $project)
            <div data-bg="{{ $project->image }}" class="item relative bg_cus rocket-lazyload" data-image="{{ $project->image }}">
                <a href="/du-an/{{ $project->slug }}" class="wrap_link"></a>
                <h3 class="fs_25 lh_28 fw300 text_white font_oswald text_uppercase">{{ mb_strtoupper($project->name, 'UTF-8') }}</h3>
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
                            <a class="flex_box al_center"
                                href="{{ url('/dich-vu') }}" target="">
                                <svg width="0" height="1" viewBox="0 0 35 1" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <line x1="35" y1="0.5" x2="-4.37114e-08" y2="0.499997" stroke="#FFF"></line>
                                </svg>
                                <span class="fs_14 lh_28 fw500 text_white">
                                    TẤT CẢ DỊCH VỤ </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_box grid_3 mobile_grid_1">
            @foreach($services as $index => $service)
            @php
                $animationDelay = 300 + ($index * 200);
            @endphp
            <div class="post_item relative hover_zoom_img aos-init aos-animate" data-aos="fade-up" data-aos-delay="{{ $animationDelay }}"
                data-aos-duration="500">
                <a href="{{ url('/dich-vu') }}"
                    class="wrap_link"></a>
                <div class="img_wrap">
                    <img width="840" height="511"
                        src="{{ $service->image }}"
                        class="hover_zoom lazyloaded" alt="" decoding="async" data-ll-status="loaded"><noscript><img
                            width="840" height="511"
                            src="{{ $service->image }}"
                            class="hover_zoom" alt="" decoding="async" /></noscript>
                </div>
                <div class="cont_wrap">
                    <div class="date_cat flex_box al_center">
                        <a href="{{ url('/dich-vu') }}"></a>
                        <div class="date">
                            {{ $service->created_at->format('d/m/Y') }} </div>
                    </div>
                    <h3 class="font_oswald fw300 limit_line ts_04 limit_2 text_uppercase">{{ $service->name }}</h3>
                </div>
            </div>

            @endforeach


        </div>

    </div>
</section>
<section data-bg="/assets/images/slide-1-1-1.jpeg" class="section home_3 bg_cus rocket-lazyload">
    <div class="grid-container">
        <div class="flex_box jus_between al_center tablet_flex_col">
            <div class="col_4 tablet_col_12 tablet_text_center" data-aos="fade-right" data-aos-delay="300" data-aos-duration="500">
                <h2 class="sec_title text_white" style="font-size: 3rem">
                    XU HƯỚNG THIẾT KẾ </h2>
                <div class="des fs_20 lh_30 fw400 text_white">
                    Xu hướng, kiến thức thiết kế mới nhất </div>
            </div>
            <!-- <div class="col_7 tablet_col_12" data-aos="fade-left" data-aos-delay="300" data-aos-duration="500">
                <div class="terms_menu">
                    <ul class="ls_none m_0 flex_box al_center jus_end tablet_jus_center">
                        @foreach($topics as $topic)
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
            @foreach($posts as $post)
            <div class="post_item relative hover_zoom_img" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">
                <a href="/bai-viet/{{ $post->slug }}" class="wrap_link"></a>
                <div class="img_wrap">
                    <img width="840" height="511" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20840%20511'%3E%3C/svg%3E" class="hover_zoom" alt="" decoding="async" data-lazy-src="{{ $post->image }}" />
                    <noscript>
                        <img width="840" height="511" src="{{ $post->image }}" class="hover_zoom" alt="" decoding="async" />
                    </noscript>
                </div>
                <div class="cont_wrap">
                    <div class="date_cat flex_box al_center">
                        <a href="/chu-de/{{ $post->topic->slug }}">{{ $post->topic->name }}</a>
                        <div class="date">{{ $post->created_at->format('d/m/Y') }}</div>
                    </div>
                    <h3 class="font_oswald fw300 limit_line ts_04 limit_2 text_uppercase">{{ mb_strtoupper($post->title, 'UTF-8') }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
