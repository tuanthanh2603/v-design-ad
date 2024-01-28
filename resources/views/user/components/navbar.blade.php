    <header class="site-header has-inline-mobile-toggle" id="masthead">
        <div class="inside-header grid-container">

            <div class="site-logo">
                <a href="{{ url('/') }}" rel="home">
                    <img class="header-image is-logo-image" alt="S Architects" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20114%20132'%3E%3C/svg%3E" width="114" height="132" data-lazy-src="{{ asset('static/logo-sm.png') }}" /><noscript><img class="header-image is-logo-image" alt="S Architects" src="wp-content/uploads/2023/07/Mask-group-1.png" width="114" height="132" /></noscript>
                </a>
            </div>
            <nav class="main-navigation mobile-menu-control-wrapper" id="mobile-menu-control-wrapper" aria-label="Mobile Toggle">
                <button data-nav="site-navigation" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="gp-icon icon-menu-bars">
                        <svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em">
                            <path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z" />
                        </svg>
                        <svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em">
                            <path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z" />
                        </svg>
                    </span>
                    <span class="screen-reader-text">Menu</span>
                </button>
            </nav>
            <nav class="main-navigation sub-menu-right" id="site-navigation" aria-label="Primary" itemtype="https://schema.org/SiteNavigationElement" itemscope>
                <div class="inside-navigation grid-container">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="gp-icon icon-menu-bars"><svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em">
                                <path d="M0 96c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24zm0 160c0-13.255 10.745-24 24-24h464c13.255 0 24 10.745 24 24s-10.745 24-24 24H24c-13.255 0-24-10.745-24-24z" />
                            </svg><svg viewBox="0 0 512 512" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em">
                                <path d="M71.029 71.029c9.373-9.372 24.569-9.372 33.942 0L256 222.059l151.029-151.03c9.373-9.372 24.569-9.372 33.942 0 9.372 9.373 9.372 24.569 0 33.942L289.941 256l151.03 151.029c9.372 9.373 9.372 24.569 0 33.942-9.373 9.372-24.569 9.372-33.942 0L256 289.941l-151.029 151.03c-9.373 9.372-24.569 9.372-33.942 0-9.372-9.373-9.372-24.569 0-33.942L222.059 256 71.029 104.971c-9.372-9.373-9.372-24.569 0-33.942z" />
                            </svg></span><span class="mobile-menu">Menu</span> </button>
                    <div id="primary-menu" class="main-nav">
                        <ul id="menu-primary-menu" class=" menu sf-menu">
                            <li id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="{{ url('/gioi-thieu') }}">Về V Design</a></li>
                            <li id="menu-item-95" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="{{ url('/du-an') }}">Dự án</a></li>
                            <li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="{{ url('/dich-vu') }}">Dịch vụ</a></li>
                            <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="{{ url('/san-pham') }}">Sản phẩm</a></li>
                            <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="{{ url('/xu-huong-thiet-ke') }}">Xu hướng thiết kế</a></li>
                            <li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="{{ url('/lien-he') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="hamburger" id="open_menu_btn">
                <span></span>
                <span></span>
            </div>
            <div class="empty_block"></div>
        </div>
        <div class="menu_custom">
            <div class="logo_header relative text_center">
                <a href="{{ url('/') }}">
                    <img width="402" height="300" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20402%20300'%3E%3C/svg%3E" class="d_block m_auto" alt="" decoding="async" fetchpriority="high" data-lazy-src="{{ asset('static/logo-vdesign.png') }}" />
                    <noscript>
                        <img width="402" height="300" src="wp-content/uploads/2023/07/S_logo_white_png-2.png" class="d_block m_auto" alt="" decoding="async" fetchpriority="high" />
                    </noscript>
                </a>
            </div>
            <div class="main_menu">
                <div id="primary-menu" class="main-nav">
                    <ul id="menu-primary-menu-1" class="ls_none m_0  menu sf-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a href="{{ url('/gioi-thieu') }}">Về V Design</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"><a href="{{ url('/du-an') }}">Dự án</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="{{ url('/dich-vu') }}">Dịch vụ</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="{{ url('/san-pham') }}">Sản phẩm</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="{{ url('/xu-huong-thiet-ke') }}">Xu hướng thiết kế</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96"><a href="{{ url('/lien-he') }}">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
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
            <div class="socials_header_wrap flex_box al_center jus_center">
                <div class="socials flex_box jus_center al_center ">
                    <div class="item relative">
                        <a class="wrap_link op_0" href="https://www.facebook.com/vdesignads/" target="_blank" title="Facebook">Facebook</a>
                        <img width="22" height="22" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2022%2022'%3E%3C/svg%3E" class="d_block" alt="" decoding="async" data-lazy-src="/assets/images/logo/fb.png" />
                        <noscript>
                            <img width="22" height="22" src="/assets/images/logo/fb.png" class="d_block" alt="" decoding="async" />
                        </noscript>
                    </div>

                    <div class="item relative">
                        <a class="wrap_link op_0" href="https://www.instagram.com/vdesignads/" target="_blank" title="Instagram">Instagram</a>
                        <img width="22" height="22" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2022%2022'%3E%3C/svg%3E" class="d_block" alt="" decoding="async" data-lazy-src="/assets/images/logo/ig.png" />
                        <noscript>
                            <img width="22" height="22" src="/assets/images/logo/ig.png" class="d_block" alt="" decoding="async" />
                        </noscript>
                    </div>
                </div>
            </div>
        </div>
    </header>
