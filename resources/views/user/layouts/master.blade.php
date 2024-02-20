<!DOCTYPE html>
<html lang="vi" prefix="og: https://ogp.me/ns#">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('user.components.header')
</head>
<style>
    #button-contact-vr{
        position: fixed;
        bottom: 20px;
        right: 0;
        z-index: 999;
    }
    #gom-all-in-one #zalo-vr {
        transition: 1s all;
        -moz-transition: 1s all;
        -webkit-transition: 1s all;
    }
    #button-contact-vr .button-contact {
        position: relative;
        margin-top: -5px;
    }
    #button-contact-vr .button-contact .phone-vr {
        position: relative;
        visibility: visible;
        background-color: transparent;
        width: 90px;
        height: 90px;
        cursor: pointer;
        z-index: 11;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0);
        transition: visibility .5s;
        left: 0;
        bottom: 0;
        display: block;
    }
    #zalo-vr .phone-vr-circle-fill {
        box-shadow: 0 0 0 0 #2196F3;
        background-color: rgba(33, 150, 243, 0.7);
    }
    .phone-vr-circle-fill {
        width: 65px;
        height: 65px;
        top: 12px;
        left: 12px;
        position: absolute;
        opacity: 0.7;
        box-shadow: 0 0 0 0 #c4a47e;
        background-color: #c4a47e;
        border-radius: 50%;
        border: 2px solid transparent;
        -webkit-animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
        animation: phone-vr-circle-fill 2.3s infinite ease-in-out;
        transition: all .5s;
        -webkit-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        -webkit-animuiion: zoom 1.3s infinite;
        animation: zoom 1.3s infinite;
    }
    #zalo-vr .phone-vr-img-circle {
        background-color: #2196F3;
    }
    .phone-vr-img-circle {
        background-color: #c4a47e;
        width: 40px;
        height: 40px;
        line-height: 40px;
        top: 25px;
        left: 25px;
        position: absolute;
        border-radius: 50%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
        animation: phone-vr-circle-fill 1s infinite ease-in-out;
    }
    .phone-vr-img-circle a {
        display: block;
        line-height: 37px;
    }
    .phone-vr-img-circle img {
        max-height: 25px;
        max-width: 27px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        -webkit-transform: translate(-50%,-50%);
        -o-transform: translate(-50%,-50%);
    }
    @keyframes phone-vr-circle-fill{
        0% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
        10% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }
        20% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }
        30% {
            -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
        }
        40% {
            -webkit-transform: rotate(25deg) scale(1) skew(1deg);
        }
        50% {
            -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
        100% {
                -webkit-transform: rotate(0) scale(1) skew(1deg);
        }
    }
    @keyframes zoom{
        0% {
            transform: scale(.9);
        }
        70%{
            transform: scale(1);
            box-shadow: 0 0 0 15px transparent;
        }
        100%{
            transform: scale(.9);
            box-shadow: 0 0 0 0 transparent;
        }
    }
</style>



<body class="@yield('bodyClass')">
    <script>
        jQuery(document).ready(function() {
            jQuery("body").addClass("unscrollable")
        })
    </script>
    @if(isset($showLoading) && $showLoading)
        @include('user.components.loading')
    @endif
    @include('user.components.navbar')
    {{-- Button contact --}}
    <div id="button-contact-vr" class="">
        <div id="gom-all-in-one">
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/0975353597">
                            <img src="{{ asset('static/zalo_icon.png') }}">
                        </a>
                    </div>
                </div>
            </div>
            <div id="phone-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a href="tel:0975353597">
                            <img src="{{ asset('static/phone_icon.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="site grid-container container hfeed" id="page">
        <div class="site-content" id="content">
            @yield('content')
        </div>
    </div>
    @include('user.components.footer')
    @include('user.components.scripts')
</body>
</html>
