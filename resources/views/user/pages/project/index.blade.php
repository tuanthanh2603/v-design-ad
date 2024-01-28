@extends('user.layouts.master')
@section('bodyClass', 'page-template page-template-templates page-template-projects page-template-templatesprojects-php page page-id-78 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover vsc-initialized using-mouse')
@section('content')
<section class="section project_page_1">
    <div class="grid-container">
        <h1 class="sec_title_2">Các dự án V Design đã thực hiện</h1>
    </div>
</section>
<section class="section project_page_2">
    <div class="grid-container">
        <div class="projects_filters">
            <div class="flex_box al_center">
                <div class="filter_group relative">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.70312 13.2812C10.7838 13.2812 13.2812 10.7838 13.2812 7.70312C13.2812 4.62241 10.7838 2.125 7.70312 2.125C4.62241 2.125 2.125 4.62241 2.125 7.70312C2.125 10.7838 4.62241 13.2812 7.70312 13.2812Z" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.6465 11.6475L14.8739 14.8748" stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <input type="text" name="search_project" id="search_project" placeholder="Tìm kiếm dự án">
                </div>
                <div class="filter_group relative">
                    <select data-name="cat" name="cat" id="cat" class="custom_sl">
                        <option value="all" selected>Tất cả dự án</option>

                        <option value="1">Bảng Hiệu Ngoại Thất</option>
                        <option value="1">Bảng Hiệu Nội Thất</option>
                        <option value="1">Bảng Hiệu Đèn LED</option>
                        <option value="1">Bảng Hiệu Chạy Quảng Cáo</option>
                        <option value="1">Mặt Dựng ALU</option>
                        <option value="1">Bảng Tên Công Ty</option>
                        <option value="1">Chữ nổi</option>
                        <option value="1">In Phun KTS</option>
                    </select>
                </div>
            </div>
            <div class="show_filter_btn_fixed">
                <svg class="show_filter_btn_icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.94543 4.5H20.0546C20.1999 4.5 20.3421 4.54221 20.4638 4.62149C20.5856 4.70077 20.6817 4.81371 20.7405 4.94658C20.7993 5.07946 20.8182 5.22655 20.7949 5.36998C20.7717 5.51341 20.7073 5.64699 20.6096 5.7545L14.4451 12.5355C14.3196 12.6735 14.25 12.8534 14.25 13.04V18.3486C14.25 18.4721 14.2195 18.5936 14.1613 18.7025C14.103 18.8114 14.0188 18.9042 13.916 18.9726L10.916 20.9727C10.8031 21.048 10.6718 21.0912 10.5362 21.0977C10.4006 21.1043 10.2658 21.0739 10.1461 21.0099C10.0264 20.9458 9.92638 20.8505 9.85662 20.734C9.78687 20.6176 9.75002 20.4844 9.75002 20.3486V13.04C9.75002 12.8534 9.68048 12.6735 9.55498 12.5355L3.39048 5.7545C3.29274 5.64699 3.22834 5.51341 3.20509 5.36998C3.18185 5.22655 3.20077 5.07946 3.25955 4.94658C3.31833 4.81371 3.41444 4.70077 3.5362 4.62149C3.65797 4.54221 3.80014 4.5 3.94543 4.5V4.5Z" stroke="#ffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <svg class="show_filter_btn_icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.25 12H3.75" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
        <div class="show_filter_btn">
            <span>Bộ lọc</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.9999 10.125L11.9999 20.25" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M11.9999 3.75L11.9999 6.375" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M11.9999 10.125C13.0354 10.125 13.8749 9.28553 13.8749 8.25C13.8749 7.21447 13.0354 6.375 11.9999 6.375C10.9643 6.375 10.1249 7.21447 10.1249 8.25C10.1249 9.28553 10.9643 10.125 11.9999 10.125Z" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18.7499 17.625L18.75 20.25" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18.75 3.75L18.7499 13.875" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18.7499 17.625C19.7854 17.625 20.6249 16.7855 20.6249 15.75C20.6249 14.7145 19.7854 13.875 18.7499 13.875C17.7143 13.875 16.8749 14.7145 16.8749 15.75C16.8749 16.7855 17.7143 17.625 18.7499 17.625Z" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.24994 14.625L5.24987 20.25" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.24987 3.75L5.24994 10.875" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5.24994 14.625C6.28547 14.625 7.12494 13.7855 7.12494 12.75C7.12494 11.7145 6.28547 10.875 5.24994 10.875C4.21441 10.875 3.37494 11.7145 3.37494 12.75C3.37494 13.7855 4.21441 14.625 5.24994 14.625Z" stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
    </div>
</section>
<section class="section project_page_3 rocket-lazyload lazyloaded" id="pj_section" style="background-image: url(&quot;https://sarchitects.com.vn/wp-content/uploads/2023/08/bg_1.png&quot;);" data-ll-status="loaded">
    <div class="grid-container">
        <div id="projects_wrapper" class="" style="">
            <script>
                jQuery("#projects_wrapper").removeClass("loading");
            </script>
            <div class="grid_box grid_3 mobile_grid_2" id="project_list">
                <div class="project_item relative hover_zoom_img">
                <a href="https://sarchitects.com.vn/du-an-chi-tiet/phu-yen-tournesol/" class="wrap_link"></a>
                <div class="img_wrap">
                    <img width="1920" height="1080" src="{{ asset('uploads/h1.jpg') }}" class="hover_zoom" alt="" decoding="async" loading="lazy" srcset="{{ asset('uploads/h1.jpg') }} 1920w, {{ asset('uploads/h1.jpg') }} 300w, {{ asset('uploads/h1.jpg') }} 1024w, {{ asset('uploads/h1.jpg') }} 768w, {{ asset('uploads/h1.jpg') }} 1536w" sizes="(max-width: 1920px) 100vw, 1920px">
                </div>
                <div class="cont_wrap absolute ts_04">
                    <h3 class="limit_line limit_1 fs_18 lh_28 fw300 text_white font_oswald m_0">
                        Bảng hiệu TINPHUOC
                    </h3>
                </div>
            </div>

            <div class="project_item relative hover_zoom_img">
                <a href="https://sarchitects.com.vn/du-an-chi-tiet/phu-yen-house-3/" class="wrap_link"></a>
                <div class="img_wrap">
                    <img width="1920" height="1080" src="{{ asset('uploads/h2.jpg') }}" class="hover_zoom" alt="" decoding="async" loading="lazy" srcset="{{ asset('uploads/h2.jpg') }} 1920w, {{ asset('uploads/h2.jpg') }} 300w, {{ asset('uploads/h2.jpg') }} 1024w, {{ asset('uploads/h2.jpg') }} 768w, {{ asset('uploads/h2.jpg') }} 1536w" sizes="(max-width: 1920px) 100vw, 1920px">
                </div>
                <div class="cont_wrap absolute ts_04">
                    <h3 class="limit_line limit_1 fs_18 lh_28 fw300 text_white font_oswald m_0">
                        Bảng hiệu Nha Khoa Sài Gòn
                    </h3>
                </div>
            </div>

            <div class="project_item relative hover_zoom_img">
                <a href="https://sarchitects.com.vn/du-an-chi-tiet/phu-yen-house-3/" class="wrap_link"></a>
                <div class="img_wrap">
                    <img width="1920" height="1080" src="{{ asset('uploads/h3.jpg') }}" class="hover_zoom" alt="" decoding="async" loading="lazy" srcset="{{ asset('uploads/h3.jpg') }} 1920w, {{ asset('uploads/h3.jpg') }} 300w, {{ asset('uploads/h3.jpg') }} 1024w, {{ asset('uploads/h3.jpg') }} 768w, {{ asset('uploads/h3.jpg') }} 1536w" sizes="(max-width: 1920px) 100vw, 1920px">
                </div>
                <div class="cont_wrap absolute ts_04">
                    <h3 class="limit_line limit_1 fs_18 lh_28 fw300 text_white font_oswald m_0">
                        PHU YEN HOUSE 3
                    </h3>
                </div>
            </div>

        </div>
        <div class="text_center">
            <div class="load_more_projects btn_secondary" data-page="3" data-target="project_list" data-max="3">
                XEM THÊM                    </div>
        </div>
    </div>
    </div>
        <input type="hidden" id="all_filters" data-search="all" data-cat="all" data-location="all" data-size="all" data-limit="12">
    </div>
</section>
@endsection
