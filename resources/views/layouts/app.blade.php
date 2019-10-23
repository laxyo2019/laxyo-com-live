<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
     
    
      
    <!-- Fonts -->

    <link rel="dns-prefetch" href="{{url('//fonts.gstatic.com')}}">
    <link href="{{url('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">
<!-- Styles -->
   <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
   <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}"/>
   <link rel="stylesheet" type="text/css" href="{{ asset('css/menus.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" media="screen">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css')}}" media="screen">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}" media="screen">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/pills.css') }}" media="screen" data-name="skins"> 
   

   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


    <!-- Styles -->
</head>
<body>
    <div class="">
      @include('partials.header')
      @yield('body')
      @include('partials.footer')
    </div>
   
     
  <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/983c841b4568323151722b812/d7ea3f42db66c2e6d4db7ff51.js");</script>
    
   
@yield('js')
</body>
</html>