@extends('user.layouts.master')
@section('bodyClass', 'search search-results wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover')
@section('content')
@if($hasResults)
<section class="section search_page ">
    <div class="grid-container">
        <h1 class="sec_title text_primary text_center">Kết quả tìm kiếm cho: {{ $keyword }}</h1>
        @if($projects->isNotEmpty())
        <div class="search_grid">
            <h2 class="text_primary sec_title_2 text_center">Dự án</h2>
            <div class="inner grid_box grid_3 mobile_grid_2" id="recruits_search">
                @foreach($projects as $project)
                <div class="project_item relative hover_zoom_img">
                    <a href="/du-an/{{ $project->slug }}" class="wrap_link"></a>
                    <div class="img_wrap">
                        <img width="1920" height="1080" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201920%201080'%3E%3C/svg%3E" class="hover_zoom" alt="" decoding="async" data-lazy-src="{{ $project->image }}" />
                        <noscript>
                            <img width="1920" height="1080" src="{{ $project->image }}" class="hover_zoom" alt="" decoding="async" />
                        </noscript>
                    </div>
                    <div class="cont_wrap absolute ts_04">
                        <h3 class="limit_line limit_1 fs_18 lh_28 fw300 text_white font_oswald m_0">{{ $project->name }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        @if($posts->isNotEmpty())
        <div class="search_grid">
            <h2 class="text_primary sec_title_2 text_center">Tin tức</h2>
            <div class="inner grid_box grid_3 mobile_grid_2" id="posts_search">
                @foreach($posts as $post)
                <div class="post_item relative hover_zoom_img">
                    <a href="/bai-viet/{{ $post->slug }}" class="wrap_link"></a>
                    <div class="img_wrap">
                        <img width="840" height="510" src="{{ $post->image }}" class="hover_zoom lazyloaded" alt="" decoding="async" data-ll-status="loaded">
                        <noscript>
                            <img width="840" height="510" src="{{ $post->image }}" class="hover_zoom" alt="" decoding="async" />
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
        @endif
    </div>
</section>
@else
<section class="section search_page no_result">
    <div class="grid-container">
        <h1 class="sec_title text_primary text_center">Không có kết quả</h1>
        <form method="get" class="search-form" action="/search" autocomplete="off">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" autocomplete="off" class="search-field" placeholder="Tìm kiếm..." value="" name="s" title="Search for:">
            </label>
            <button class="search-submit" aria-label="Search">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                        <path d="M14.5 25C20.299 25 25 20.299 25 14.5C25 8.70101 20.299 4 14.5 4C8.70101 4 4 8.70101 4 14.5C4 20.299 8.70101 25 14.5 25Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.9238 21.925L27.9989 28.0001" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                </svg>
            </button>
        </form>
        <div class="img_empty text_center">
            <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="" data-lazy-src="https://sarchitects.com.vn/wp-content/themes/thuythu/images/no_result.png"><noscript><img src="https://sarchitects.com.vn/wp-content/themes/thuythu/images/no_result.png" alt=""></noscript>
        </div>
        <div class="text_center back_to_home">
            <a href="javascript:void(0);" onclick="history.back()" class="flex_box jus_center al_center">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.25 12H3.75" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="text_primary">
                    Quay lại </span>
            </a>
        </div>
    </div>
</section>
@endif
@endsection
