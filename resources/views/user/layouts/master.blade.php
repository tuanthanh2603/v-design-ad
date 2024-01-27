<!DOCTYPE html>
<html lang="vi" prefix="og: https://ogp.me/ns#">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('user.components.header')
</head>
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
    <div class="site grid-container container hfeed" id="page">
        <div class="site-content" id="content">
            @yield('content')
        </div>
    </div>
    @include('user.components.footer')
    @include('user.components.scripts')
</body>
</html>