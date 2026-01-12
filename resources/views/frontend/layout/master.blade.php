<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>@yield('title','HomePage')</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Corporate Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Rappo HTML Template v1.0">
    
    <!-- theme meta -->
    <meta name="theme-name" content="rappo" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('rappo/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('rappo/plugins/animate-css/animate.css')}}">
    <!-- Icon Font css -->
    <link rel="stylesheet" href="{{asset('rappo/plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('rappo/plugins/fonts/Pe-icon-7-stroke.css')}}">
    <!-- Themify icon Css -->
    <link rel="stylesheet" href="{{asset('rappo/plugins/themify/css/themify-icons.css')}}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{asset('rappo/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('rappo/plugins/slick-carousel/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('rappo/css/style.css')}}">
    
    <!--Favicon-->
    <link rel="icon" href="{{asset('rappo/images/favicon.png')}}" type="image/x-icon">

  </head>
  <body>

    <!-- LOADER TEMPLATE -->

    <!-- /LOADER TEMPLATE -->

    @include('frontend.layout.header')
    @include('frontend.layout.nav')



        @yield('content')


    <!--  Page Scroll to Top  -->

    <a id="scroll-to-top" class="scroll-to-top js-scroll-trigger" href="#top-header">
      <i class="fa fa-angle-up"></i>
    </a>

      <!-- 
      Essential Scripts
      =====================================-->
      <!-- jQuery -->
      <script src="{{asset('rappo/plugins/jquery/jquery.min.js')}}"></script>
      <!-- Bootstrap -->
      <script src="{{asset('rappo/plugins/bootstrap/bootstrap.min.js')}}"></script>
      <!-- Slick Slider -->
      <script src="{{asset('rappo/plugins/slick-carousel/slick/slick.min.js')}}"></script>
      <!-- Google Map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
      <script src="{{asset('rappo/plugins/google-map/gmap.js')}}"></script>

      <script src="{{asset('rappo/js/script.js')}}"></script>
    @include('frontend.layout.footer')
  </body>
</html>
