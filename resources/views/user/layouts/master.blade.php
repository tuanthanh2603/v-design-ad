<!DOCTYPE html>
<html lang="vi" prefix="og: https://ogp.me/ns#">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('user.components.header')
</head>
<body class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-316 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left dropdown-hover featured-image-active">
    <script>
        jQuery(document).ready(function() {
            jQuery("body").addClass("unscrollable")
        })
    </script>
    @include('user.components.loading')
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