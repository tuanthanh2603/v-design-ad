@extends('user.layouts.master')
@section('bodyClass', 'project-template-default single single-project postid-1449 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover featured-image-active')
@section('content')
<div id="banner_gr" class="banner_gr section">
    <div class="swiper banner_slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="img_wrap">
                    <img width="1920" height="1080" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201920%201080'%3E%3C/svg%3E" class="" alt="" decoding="async" data-lazy-srcset="https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08.jpg 1920w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-300x169.jpg 300w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-1024x576.jpg 1024w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-768x432.jpg 768w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-1536x864.jpg 1536w" data-lazy-sizes="(max-width: 1920px) 100vw, 1920px" data-lazy-src="https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08.jpg" /><noscript><img width="1920" height="1080" src="../../wp-content/uploads/2023/11/PYO_3D_PC_08.jpg" class="" alt="" decoding="async" srcset="https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08.jpg 1920w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-300x169.jpg 300w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-1024x576.jpg 1024w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-768x432.jpg 768w, https://sarchitects.com.vn/wp-content/uploads/2023/11/PYO_3D_PC_08-1536x864.jpg 1536w" sizes="(max-width: 1920px) 100vw, 1920px" /></noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="gr_head absolute left_cont">
        <div class="container">
            <h1>{{ $service->name }}</h1>
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
                                <span class="fs_14 lh_24 fw500">
                                    Xem thêm hình ảnh dự án </span>
                                <span class="fs_14 lh_24 fw500">
                                    Thu gọn </span>
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
                    Thông tin dịch vụ </div>
                <h2 class="sec_title_3">{{ $service->name }}</h2>
                <ul class="ls_none m_0">
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Hạng mục</span>
                        <strong class="fs_14 lh_22 fw600">{{ $service->category->name }}</strong>
                    </li>
                    @if($service->materials)
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Chất liệu</span>
                        <strong class="fs_14 lh_22 fw600">{{ $service->materials }}</strong>
                    </li>
                    @endif
                    @if($service->size)
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Kích thước</span>
                        <strong class="fs_14 lh_22 fw600">{{ $service->size }}</strong>
                    </li>
                    @endif
                    @if($service->shipping)
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Vận chuyển</span>
                        <strong class="fs_14 lh_22 fw600">{{ $service->shipping }}</strong>
                    </li>
                    @endif
                    @if($service->setup)
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Thi công</span>
                        <strong class="fs_14 lh_22 fw600">{{ $service->setup }}</strong>
                    </li>
                    @endif
                    @if($service->waranty)
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Bảo hành</span>
                        <strong class="fs_14 lh_22 fw600">{{ $service->waranty }}</strong>
                    </li>
                    @endif
                    @if($service->brand)
                    <li class="flex_box al_center">
                        <span class="fs_14 lh_22 fw400">Brand</span>
                        <strong class="fs_14 lh_22 fw600">{{ $service->brand }}</strong>
                    </li>
                    @endif
                </ul>
                <div class="box_content">
                    <div class="fs_16 lh_22 fw600 text_3">Mô tả dịch vụ</div>
                    <div class="fs_14 lh_24 fw400">
                        <div class="content">
                            <div class="content_inner">
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                        <div class="content hide">
                            <div class="share flex_box al_center">
                                <span class="fs_13 lh_22 fw600">
                                    CHIA SẺ </span>
                                <a class="hover_zoom_img" href="http://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank">
                                    <svg class="hover_zoom" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.125 6.875H11.875C11.3777 6.875 10.9008 7.07254 10.5492 7.42418C10.1975 7.77581 10 8.25272 10 8.75V17.5" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.5 11.25H12.5" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a class="hover_zoom_img" href="http://twitter.com/share?text={{ $service->name }}&url={{ url()->current() }}" target="_blank">
                                    <svg width="20" height="20" viewBox="0 0 24 24" aria-hidden="true" class="r-1nao33i r-4qtqp9 r-yyyyoo r-rxcuwo r-1777fci r-m327ed r-dnmrzs r-494qqr r-bnwqim r-1plcrui r-lrvibr">
                                        <g>
                                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
                                        </g>
                                    </svg>
                                </a>
                                <a class="hover_zoom_img" href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ $service->name }}" target="_blank">
                                    <svg class="hover_zoom" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.25 3.125H3.75C3.40482 3.125 3.125 3.40482 3.125 3.75V16.25C3.125 16.5952 3.40482 16.875 3.75 16.875H16.25C16.5952 16.875 16.875 16.5952 16.875 16.25V3.75C16.875 3.40482 16.5952 3.125 16.25 3.125Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.375 8.75V13.75" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.875 8.75V13.75" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6.875 6.95312C7.26333 6.95312 7.57812 6.63833 7.57812 6.25C7.57812 5.86167 7.26333 5.54688 6.875 5.54688C6.48667 5.54688 6.17188 5.86167 6.17188 6.25C6.17188 6.63833 6.48667 6.95312 6.875 6.95312Z" fill="#333333" />
                                        <path d="M9.375 10.9375C9.375 10.3573 9.60547 9.80094 10.0157 9.3907C10.4259 8.98047 10.9823 8.75 11.5625 8.75C12.1427 8.75 12.6991 8.98047 13.1093 9.3907C13.5195 9.80094 13.75 10.3573 13.75 10.9375V13.75" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
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
            </div>
        </div>
    </div>
</section>
<script>
    Fancybox.bind('[data-fancybox]', {
        
    });    
</script>
@endsection