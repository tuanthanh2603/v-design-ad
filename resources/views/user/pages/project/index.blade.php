@extends('user.layouts.master')
@section('bodyClass',
    'page-template page-template-templates page-template-projects page-template-templatesprojects-php
    page page-id-78 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left
    dropdown-hover vsc-initialized using-mouse')
@section('content')
    <section class="section project_page_1">
        <div class="grid-container">
            <h1 class="sec_title_2">Dự án của VDesignAds</h1>
        </div>
    </section>
    <section class="section project_page_2">
        <div class="grid-container">
            <div class="projects_filters">
                <div class="flex_box al_center">
                    <div class="filter_group relative">
                        <!-- <form method="get" action="/du-an/search" autocomplete="off"> -->
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.70312 13.2812C10.7838 13.2812 13.2812 10.7838 13.2812 7.70312C13.2812 4.62241 10.7838 2.125 7.70312 2.125C4.62241 2.125 2.125 4.62241 2.125 7.70312C2.125 10.7838 4.62241 13.2812 7.70312 13.2812Z"
                                stroke="#999999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.6465 11.6475L14.8739 14.8748" stroke="#999999" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input type="text" name="s" id="keyword" placeholder="Tìm kiếm dự án">
                        <!-- </form> -->
                    </div>
                    <div class="filter_group relative">
                        <div class="select">
                            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                            <select data-id="all" name="" id="" class="custom_sl select-styled active">
                                <option value="0" data-rel="0">Danh mục</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" data-rel="{{ $item->id }}">{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            <script>
                                $(document).ready(function() {
                                  
                                    $('.custom_sl').change(function() {
                                        var selectedOption = $(this).find('option:selected');
                                        var relValue = selectedOption.data('rel');
                                        console.log("ID của option được chọn là: " + relValue);
                                    });

                                });
                            </script>




                        </div>
                    </div>

                </div>
                <div class="show_filter_btn_fixed">
                    <svg class="show_filter_btn_icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.94543 4.5H20.0546C20.1999 4.5 20.3421 4.54221 20.4638 4.62149C20.5856 4.70077 20.6817 4.81371 20.7405 4.94658C20.7993 5.07946 20.8182 5.22655 20.7949 5.36998C20.7717 5.51341 20.7073 5.64699 20.6096 5.7545L14.4451 12.5355C14.3196 12.6735 14.25 12.8534 14.25 13.04V18.3486C14.25 18.4721 14.2195 18.5936 14.1613 18.7025C14.103 18.8114 14.0188 18.9042 13.916 18.9726L10.916 20.9727C10.8031 21.048 10.6718 21.0912 10.5362 21.0977C10.4006 21.1043 10.2658 21.0739 10.1461 21.0099C10.0264 20.9458 9.92638 20.8505 9.85662 20.734C9.78687 20.6176 9.75002 20.4844 9.75002 20.3486V13.04C9.75002 12.8534 9.68048 12.6735 9.55498 12.5355L3.39048 5.7545C3.29274 5.64699 3.22834 5.51341 3.20509 5.36998C3.18185 5.22655 3.20077 5.07946 3.25955 4.94658C3.31833 4.81371 3.41444 4.70077 3.5362 4.62149C3.65797 4.54221 3.80014 4.5 3.94543 4.5V4.5Z"
                            stroke="#ffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <svg class="show_filter_btn_icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.25 12H3.75" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
            <div class="show_filter_btn">
                <span>Bộ lọc</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.9999 10.125L11.9999 20.25" stroke="#272D35" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M11.9999 3.75L11.9999 6.375" stroke="#272D35" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M11.9999 10.125C13.0354 10.125 13.8749 9.28553 13.8749 8.25C13.8749 7.21447 13.0354 6.375 11.9999 6.375C10.9643 6.375 10.1249 7.21447 10.1249 8.25C10.1249 9.28553 10.9643 10.125 11.9999 10.125Z"
                        stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M18.7499 17.625L18.75 20.25" stroke="#272D35" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M18.75 3.75L18.7499 13.875" stroke="#272D35" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M18.7499 17.625C19.7854 17.625 20.6249 16.7855 20.6249 15.75C20.6249 14.7145 19.7854 13.875 18.7499 13.875C17.7143 13.875 16.8749 14.7145 16.8749 15.75C16.8749 16.7855 17.7143 17.625 18.7499 17.625Z"
                        stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.24994 14.625L5.24987 20.25" stroke="#272D35" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path d="M5.24987 3.75L5.24994 10.875" stroke="#272D35" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M5.24994 14.625C6.28547 14.625 7.12494 13.7855 7.12494 12.75C7.12494 11.7145 6.28547 10.875 5.24994 10.875C4.21441 10.875 3.37494 11.7145 3.37494 12.75C3.37494 13.7855 4.21441 14.625 5.24994 14.625Z"
                        stroke="#272D35" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
        </div>
    </section>
    <section data-bg="/assets/images/bg-1.png" class="section project_page_3 rocket-lazyload" id="pj_section">
        <div class="grid-container">
            <div id="projects_wrapper">
                <div class="grid_box grid_3 mobile_grid_2" id="project_list">
                    @foreach ($projects as $project)
                        <div class="project_item relative hover_zoom_img">
                            <a href="/du-an/{{ $project->slug }}" class="wrap_link"></a>
                            <div class="img_wrap">
                                <img width="1920" height="1080"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201920%201080'%3E%3C/svg%3E"
                                    class="hover_zoom" alt="" decoding="async"
                                    data-lazy-src="{{ $project->image }}" />
                                <noscript>
                                    <img width="1920" height="1080" src="{{ $project->image }}" class="hover_zoom"
                                        alt="" decoding="async" />
                                </noscript>
                            </div>
                            <div class="cont_wrap absolute ts_04">
                                <h3 class="limit_line limit_1 fs_18 lh_28 fw300 text_white font_oswald m_0">
                                    {{ mb_strtoupper($project->name, 'UTF-8') }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text_center">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $projects->links('custom_pagination') }}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('keyword').addEventListener('change', function() {
            var keyword = this.value;
            var url = '/du-an/search?s=' + encodeURIComponent(keyword);
            window.location.href = url;
        });
        document.getElementById('keyword').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                var keyword = this.value;
                var url = '/du-an/search?s=' + encodeURIComponent(keyword);
                window.location.href = url;
            }
        });
    </script>
@endsection
