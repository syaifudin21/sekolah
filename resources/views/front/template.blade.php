<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Lato Font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheet -->
    <link href="{{asset('materialize/css/gallery-materialize.css')}}" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
      .typed-cursor{
        opacity: 1;
        animation: typedjsBlink 0.7s infinite;
        -webkit-animation: typedjsBlink 0.7s infinite;
        animation: typedjsBlink 0.7s infinite;
      }
      @keyframes typedjsBlink{
        50% { opacity: 0.0; }
      }
    </style>
    @yield('css')

  </head>

  <body>

    <!-- Navbar and Header -->
    <nav class="nav-extended @yield('warna')">
      <div class="nav-background">
        {{-- <img class="pattern active" src="{{asset('images/standar/banner1.jpg')}}" style="width: 100%"> --}}
        <div class="pattern active" style="background-image: url('@yield('background')');"></div>
      </div>
      <div class="nav-wrapper container">
        <a href="{{url('')}}" class="brand-logo"><img src="{{asset('images/standar/logo-text.png')}}" style="width: 180px; margin-top: 10px" ></a>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li class="active"><a href="{{url('/')}}">Beranda</a></li>
          <li><a href="{{url('/daftar')}}">Daftar Online</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="docs.html">Docs</a></li>
          <li><a class='dropdown-button' href='#' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Features<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        <!-- Dropdown Structure -->
        <ul id='feature-dropdown' class='dropdown-content'>
          <li><a href="full-header.html">Fullscreen Header</a></li>
          <li><a href="horizontal.html">Horizontal Style</a></li>
          <li><a href="no-image.html">No Image Expand</a></li>
        </ul>

        @yield('title')

      </div>

      <!-- Fixed Masonry Filters -->
      @yield('menu')
      
    </nav>
    <ul class="side-nav" id="nav-mobile">
      <li class="active"><a href="index.html"><i class="material-icons">camera</i>Gallery</a></li>
      <li><a href="index-dark.html"><i class="material-icons">brightness_3</i>Dark Theme</a></li>
      <li><a href="blog.html"><i class="material-icons">edit</i>Blog</a></li>
      <li><a href="docs.html"><i class="material-icons">school</i>Docs</a></li>
      <li><a href="full-header.html"><i class="material-icons">fullscreen</i>Fullscreen Header</a></li>
      <li><a href="horizontal.html"><i class="material-icons">swap_horiz</i>Horizontal Style</a></li>
      <li><a href="no-image.html"><i class="material-icons">texture</i>No Image Expand</a></li>
    </ul>

    @yield('content')

    

    <!-- Core Javascript -->
    <script src="{{asset('materialize/js/jquery.min.js')}}"></script>
    <script src="{{asset('materialize/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('materialize/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('materialize/js/materialize.min.js')}}"></script>
    <script src="{{asset('materialize/js/color-thief.min.js')}}"></script>
    <script src="{{asset('materialize/js/galleryExpand.js')}}"></script>
    <script src="{{asset('materialize/js/init.js')}}"></script>
    
    @yield('script')

  </body>
</html>