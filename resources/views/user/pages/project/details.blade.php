@extends('user.layouts.master')
@section('bodyClass', 'project-template-default single single-project postid-1449 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover featured-image-active')
@section('content')
<div id="banner_gr" class="banner_gr section">
    <div class="swiper banner_slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="img_wrap">
                    <img width="1920" height="1080" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201920%201080'%3E%3C/svg%3E" alt="" decoding="async" data-lazy-src="{{ $project->image }}" />
                    <noscript>
                        <img width="1920" height="1080" src="{{ $project->image }}" alt="" decoding="async" />
                    </noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="gr_head absolute left_cont">
        <div class="container">
            <h1>{{ $project->name }}</h1>
        </div>
    </div>
</div>

<section class="section single_project">
    <div class="grid-container">
        <div class="flex_box flex_wrap mobile_col_reverse">
            <div class="col_8 tablet_col_7 mobile_col_12">
                <div class="tabs_container">
                    <ul class="tabs_title m_0 ls_none flex_box al_center">
                        <li class="fs_16 lh_22 fw300 active" data-id="0">
                            Hình ảnh </li>
                    </ul>
                    <div class="tabs_content">
                        <div class="tab_content active" id="tab_content0">
                            <div class="grid_box grid_3 tablet_grid_2">
                                @foreach($images as $image)
                                <div class="item relative hover_zoom_img">
                                    <a data-src="{{ $image->url }}" data-fancybox="gal0" class="wrap_link"></a>
                                    <div class="img_wrap">
                                        <img width="1920" height="1080" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201920%201080'%3E%3C/svg%3E" class="hover_zoom" alt="" decoding="async" data-lazy-src="{{ $image->url }}" />
                                        <noscript>
                                            <img width="1920" height="1080" src="{{ $image->url }}" class="hover_zoom" alt="" decoding="async" />
                                        </noscript>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="flex_box al_center btn_view_more view_more">
                                <span class="fs_14 lh_24 fw500">Xem thêm hình ảnh</span>
                                <span class="fs_14 lh_24 fw500">Thu gọn</span>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.9375 4.125L5.5 7.5625L2.0625 4.125" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col_4 tablet_col_5 mobile_col_12">
                <div class="fs_16 lh_22 fw300 text_3">
                    Thông tin dự án </div>
                <h2 class="sec_title_3">{{ $project->category->name }}</h2>
                <ul class="ls_none m_0">
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Dòng sản phẩm</span>
                        <strong class="fs_14 lh_22 fw600">{{ $project->category->name }}</strong>
                    </li>
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Kích thước</span>
                        <strong class="fs_14 lh_22 fw600">Thiết kế theo yêu cầu</strong>
                    </li>
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Khối lượng</span>
                        <strong class="fs_14 lh_22 fw600">Thi công lắp đặt tận nơi</strong>
                    </li>
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Nhà sản xuất</span>
                        <strong class="fs_14 lh_22 fw600">V Design AD</strong>
                    </li>
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Vận chuyển</span>
                        <strong class="fs_14 lh_22 fw600">Miễn Phí Nội Thành TP. Hồ Chí Minh</strong>
                    </li>
                    @if($project->address)
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Địa chỉ</span>
                        <strong class="fs_14 lh_22 fw600">{{ $project->address }}</strong>
                    </li>
                    @endif
                </ul>
                <div class="box_content">
                    <div class="fs_16 lh_22 fw600 text_3">Chi tiết dự án</div>
                    <div class="fs_14 lh_24 fw400">
                        <div class="content hide">
                            <div class="share flex_box al_center">
                                <p>{{ $project->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex_box al_center btn_view_more view_more">
                        <span class="fs_14 lh_24 fw500">
                            Xem thêm </span>
                        <span class="fs_14 lh_24 fw500">
                            Thu gọn </span>
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.9375 4.125L5.5 7.5625L2.0625 4.125" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="" style="margin-top: 1rem">
                    <div class="load_more_projects btn_secondary" onclick="window.location.href='{{ url('/lien-he') }}'">
                        Liên hệ tư vấn                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<script>
    Fancybox.bind('[data-fancybox]', {

    });
</script>
@endsection
