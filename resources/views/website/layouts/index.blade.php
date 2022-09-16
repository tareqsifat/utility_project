<!doctype html>
<html class="no-js" lang="">


@include('website.includes.header')

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        @include('website.includes.menu')
        <!-- Header Area End Here -->
        <!-- Slider Area Start Here -->
        @yield('content')
        <!-- Footer Area Start Here -->
        @include('website.includes.footer')
        <!-- Footer Area End Here -->
    </div>
    @include('website.includes.footer_js')

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/clenix/clenix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Sep 2022 18:08:47 GMT -->
</html>