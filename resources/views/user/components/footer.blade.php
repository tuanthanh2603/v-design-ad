    <style>
        #centeredDiv {
            text-align: center;
            margin: 0 auto;
            width: 50%;
        }
        @media only screen and (max-width: 768px) {
            #centeredDiv {
                width: 100%;
        }
}
</style>
    </style>
    <div class="site-footer">
        <footer class="footer_wrap section">
            <div class="grid-container">
                <div class="flex_box al_end jus_between tablet_flex_col">
                    <div class="left_col tablet_col_12">
                        <div class="logo_footer relative">
                            <a class="wrap_link" href="/"></a>
                            <img width="180" height="50" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20204%2038'%3E%3C/svg%3E" class="d_block" alt="" decoding="async" loading="lazy" data-lazy-src="{{ asset('static/logo-vdesign.png') }}" />
                        </div>
                        <div class="menu_footer">
                            <ul id="menu-menu-footer" class="m_0 ls_none flex_box al_center tablet_jus_center flex_wrap">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88">
                                    <a href="{{ url('/gioi-thieu') }}">Về V Design AD</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87">
                                    <a href="{{ url('/du-an') }}">Dự án</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90">
                                    <a href="{{ url('dich-vu') }}">Dịch vụ</a>
                                </li>
                                {{-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91">
                                    <a href="{{ url('/san-pham') }}">Sản phẩm</a>
                                </li> --}}
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91">
                                    <a href="{{ url('/xu-huong-thiet-ke') }}">Xu hướng thiết kế</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89">
                                    <a href="{{ url('/lien-he') }}">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right_col tablet_col_12">
                        <div class="copyright fs_14 lh_30 fw300 tablet_text_center">
                            <p>Lượt truy cập: {{ $pageViews  }}</p>
                        </div>
                        <div class="copyright fs_14 lh_30 fw300 tablet_text_center">
                            <p>Copyright © 2024 by {{ config('app.name') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section style="background: rgba(0, 0, 0, 0.30); padding: 20px">
            <div id="centeredDiv"><b>Công Ty TNHH V DESIGN AD</b></div>
            <div id="centeredDiv">Địa chỉ DKKD: 10 Đường 11, Phường Bình Thuận, Quận 7, Thành phố Hồ Chí Minh</div>
            <div id="centeredDiv">Chi nhánh 1: 40/31 Miếu Gò Xoài, Bình Hưng Hoà A, Quận Bình Tân, Thành phố Hồ Chí Minh</div>
            <div id="centeredDiv">Chi nhánh 2: Km72, Xã Eanam, Huyện Eah'leo, Tỉnh Đăk Lăk </div>
            <div id="centeredDiv"> Mã số thuế: 0317665645 quản lý bởi Chi cục Thuế khu vực Quận 7 - huyện Nhà Bè</div>
        </section>
    </div>
