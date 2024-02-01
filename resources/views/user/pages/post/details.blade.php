@extends('user.layouts.master')
@section('bodyClass', 'post-template-default single single-post postid-530 single-format-standard wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover featured-image-active')
@section('content')
<div id="banner_gr" class="banner_gr section">
    <div class="swiper banner_slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="img_wrap">
                    <img width="1830" height="650" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201830%20650'%3E%3C/svg%3E" class="" alt="" decoding="async" data-lazy-src="{{ $post->image }}" />
                    <noscript>
                        <img width="1830" height="650" src="{{ $post->image }}" class="" alt="" decoding="async" />
                    </noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="gr_head absolute left_cont">
        <div class="container">
            <h1>{{ $post->title }}</h1>
        </div>
    </div>
</div>
<section class="section post_title_group">
    <div class="grid-container">
        <h1 class="sec_title text_center">{{ $post->title }}</h1>
        <!-- <div class="fs_20 lh_30 fw400 text_primary text_center">
            HEHE Home là một ngôi nhà phố điển hình với kích thước cơ bản 5m mặt tiền, sâu 25m tọa lạc tại TP.HCM. Ngôi nhà của 2 kiến trúc sư được thiết kế với lối kiến trúc hiện đại tối giản. Điểm nhấn của căn nhà là thiết kế cây xanh và ánh sáng gần gũi với thiên nhiên. </div> -->
    </div>
</section>
<section class="section post_text_box">
    <div class="grid-container">
        <div class="content_post">
            <p>Ngôi nhà được xây dựng trong khu nhà ở phân lô, xung quanh đều là các ngôi nhà được thiết kế xây dựng hết diện tích đất,ít tiếp xúc với thiên nhiên, cây xanh và có ít không gian thoáng. Vậy nên khi lên ý tưởng thiết kế, KTS thống nhất HEHE Home sẽ là ngôi nhà ở đô thị tiếp xúc nhiều với cây xanh, thiên nhiên, dễ đón gió và có nhiều ánh sáng tự nhiên nhất có thể bằng cách tận dụng lô đất có chiều sâu tương đối lớn, phù hợp cho một ngôi nhà có nhiều lớp không gian từ ngoài vào trong.</p>
        </div>
    </div>
</section>
<section class="section post_gallery">
    <div class="flex_box jus_between flex_wrap">
        <div class="item" style="width: calc(25% - 10px);">
            <div class="img_wrap h_full">
                <img width="446" height="556" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20446%20556'%3E%3C/svg%3E" class="" alt="" decoding="async" data-lazy-src="../wp-content/uploads/2023/07/23A01015-05-768x960-1.jpg" /><noscript><img width="446" height="556" src="../wp-content/uploads/2023/07/23A01015-05-768x960-1.jpg" class="" alt="" decoding="async" /></noscript>
            </div>
        </div>
        <div class="item" style="width: calc(25% - 10px);">
            <div class="img_wrap h_full">
                <img width="446" height="556" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20446%20556'%3E%3C/svg%3E" class="" alt="" decoding="async" data-lazy-src="../wp-content/uploads/2023/07/23A01015-07-1.jpg" /><noscript><img width="446" height="556" src="../wp-content/uploads/2023/07/23A01015-07-1.jpg" class="" alt="" decoding="async" /></noscript>
            </div>
        </div>
        <div class="item" style="width: calc(25% - 10px);">
            <div class="img_wrap h_full">
                <img width="446" height="556" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20446%20556'%3E%3C/svg%3E" class="" alt="" decoding="async" data-lazy-src="../wp-content/uploads/2023/07/23A01015-25-1.jpg" /><noscript><img width="446" height="556" src="../wp-content/uploads/2023/07/23A01015-25-1.jpg" class="" alt="" decoding="async" /></noscript>
            </div>
        </div>
        <div class="item" style="width: calc(25% - 10px);">
            <div class="img_wrap h_full">
                <img width="445" height="556" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20445%20556'%3E%3C/svg%3E" class="" alt="" decoding="async" data-lazy-src="../wp-content/uploads/2023/07/23A01015-21-1.jpg" /><noscript><img width="445" height="556" src="../wp-content/uploads/2023/07/23A01015-21-1.jpg" class="" alt="" decoding="async" /></noscript>
            </div>
        </div>
    </div>
</section>
<section class="tags_sec section">
    <div class="grid-container">
        <div class="flex_box al_center jus_between flex_wrap">
            <div class="tags mobile_col_12">
                <span class="fs_16 lh_24 fw700 text_primary">
                    Thẻ: </span>
                <a href="../tag/s-architects/index.html" class="fs_16 lh_24 fw400">
                    S Architects </a>
                <span class="divider fs_16 lh_24 fw400">&nbsp;/&nbsp;</span>
                <a href="../tag/kien-truc/index.html" class="fs_16 lh_24 fw400">
                    Kiến trúc </a>
                <span class="divider fs_16 lh_24 fw400">&nbsp;/&nbsp;</span>
                <a href="../tag/xu-huong-thiet-ke/index.html" class="fs_16 lh_24 fw400">
                    Xu hướng thiết kế </a>
                <span class="divider fs_16 lh_24 fw400">&nbsp;/&nbsp;</span>
                <a href="../tag/kien-truc-xanh/index.html" class="fs_16 lh_24 fw400">
                    Kiến trúc xanh </a>
            </div>
            <div class="share_btn flex_box al_center jus_end mobile_col_12 mobile_jus_start">
                <span class="fs_16 lh_24 fw700 text_primary">
                    Chia sẻ: </span>
                <a class="hover_zoom_img flex_box" href="http://www.facebook.com/sharer.php?u=https://sarchitects.com.vn/khi-thien-nhien-len-tieng-vuon-chua-reu-saihoji-kyoto/" target="_blank">
                    <svg class="hover_zoom" width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#272D35" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.125 6.875H11.875C11.3777 6.875 10.9008 7.07254 10.5492 7.42418C10.1975 7.77581 10 8.25272 10 8.75V17.5" stroke="#272D35" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M7.5 11.25H12.5" stroke="#272D35" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a class="hover_zoom_img flex_box" href="http://twitter.com/share?text=Khi%20thi%c3%aan%20nhi%c3%aan%20l%c3%aan%20ti%e1%ba%bfng%20%e2%80%93%20V%c6%b0%e1%bb%9dn%20ch%c3%b9a%20R%c3%aau%20Saihoji,%20Kyoto&amp;url=https://sarchitects.com.vn/khi-thien-nhien-len-tieng-vuon-chua-reu-saihoji-kyoto/&amp;hashtags=[HASTAG]" target="_blank">
                    <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" class="r-1nao33i r-4qtqp9 r-yyyyoo r-rxcuwo r-1777fci r-m327ed r-dnmrzs r-494qqr r-bnwqim r-1plcrui r-lrvibr">
                        <g>
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                        </g>
                    </svg>
                </a>
                <a class="hover_zoom_img flex_box" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://sarchitects.com.vn/khi-thien-nhien-len-tieng-vuon-chua-reu-saihoji-kyoto/&amp;title=Khi%20thi%c3%aan%20nhi%c3%aan%20l%c3%aan%20ti%e1%ba%bfng%20%e2%80%93%20V%c6%b0%e1%bb%9dn%20ch%c3%b9a%20R%c3%aau%20Saihoji,%20Kyoto&amp;source=[SITE_NAME]" target="_blank">
                    <svg class="hover_zoom" width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.25 3.125H3.75C3.40482 3.125 3.125 3.40482 3.125 3.75V16.25C3.125 16.5952 3.40482 16.875 3.75 16.875H16.25C16.5952 16.875 16.875 16.5952 16.875 16.25V3.75C16.875 3.40482 16.5952 3.125 16.25 3.125Z" stroke="#272D35" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.375 8.75V13.75" stroke="#272D35" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.875 8.75V13.75" stroke="#272D35" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.875 6.95312C7.26333 6.95312 7.57812 6.63833 7.57812 6.25C7.57812 5.86167 7.26333 5.54688 6.875 5.54688C6.48667 5.54688 6.17188 5.86167 6.17188 6.25C6.17188 6.63833 6.48667 6.95312 6.875 6.95312Z" fill="#272D35" />
                        <path d="M9.375 10.9375C9.375 10.3573 9.60547 9.80094 10.0157 9.3907C10.4259 8.98047 10.9823 8.75 11.5625 8.75C12.1427 8.75 12.6991 8.98047 13.1093 9.3907C13.5195 9.80094 13.75 10.3573 13.75 10.9375V13.75" stroke="#272D35" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section related_post">
    <div class="grid-container">
        <h2 class="sec_title_3 text_center">
            BÀI VIẾT LIÊN QUAN </h2>
        <div class="grid_box grid_3 mobile_grid_1">
            @foreach($relatedPosts as $relatedPost)
            <div class="post_item relative hover_zoom_img">
                <a href="/bai-viet/{{ $relatedPost->slug }}" class="wrap_link"></a>
                <div class="img_wrap">
                    <img width="902" height="508" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20902%20508'%3E%3C/svg%3E" class="hover_zoom" alt="" decoding="async" data-lazy-src="{{ $relatedPost->image }}" />
                    <noscript>
                        <img width="902" height="508" src="{{ $relatedPost->image }}" class="hover_zoom" alt="" decoding="async" />
                    </noscript>
                </div>
                <div class="cont_wrap">
                    <div class="date_cat flex_box al_center">
                        <a href="/chu-de/{{ $relatedPost->topic->slug }}">{{ $relatedPost->topic->name }}</a>
                        <div class="date">{{ $relatedPost->topic->created_at->format('d/m/Y') }}</div>
                    </div>
                    <h3 class="font_oswald fw300 limit_line ts_04 limit_2 text_uppercase">{{ $relatedPost->title }}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
