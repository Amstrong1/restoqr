<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     <!-- Favicon  -->
     <link rel="icon" href="{{ asset('landing/img/favicon.png')}}" />
     <!-- Icon Font -->
     <link rel="stylesheet" href="{{ asset('landing/fonts/iconfonts/font-awesome/stylesheet.css')}}" />
     <!-- Site font -->
     <link rel="stylesheet" href="{{ asset('landing/fonts/webfonts/inter/stylesheet.css')}}" />
     <link rel="stylesheet" href="{{ asset('landing/fonts/webfonts/plus-jakarta-sans/stylesheet.css')}}" />
 
     <!-- Vendor CSS -->
     <link rel="stylesheet" href="{{ asset('landing/css/vendors/swiper-bundle.min.css')}}" />
     <link rel="stylesheet" href="{{ asset('landing/css/vendors/jos.css')}}" />
     <link rel="stylesheet" href="{{ asset('landing/css/vendors/menu.css')}}" />
 
     <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('landing/css/custom.css')}}" />
 
     <!-- Development css -->
     <link href="{{ asset('landing/css/style.css')}}" rel="stylesheet" />
    
</head>

<body class="">
   
    <div id="app"></div>

    <script src="{{ mix('js/app.js') }}" defer></script>

     <!--Vendor js-->
     <script src="{{ asset('landing/js/vendors/counterup.js')}}" type="module"></script>
     <script src="{{ asset('landing/js/vendors/swiper-bundle.min.js')}}"></script>
     <script src="{{ asset('landing/js/vendors/fslightbox.js')}}"></script>
     <script src="{{ asset('landing/js/vendors/jos.min.js')}}"></script>
     <script src="{{ asset('landing/js/vendors/menu.js')}}"></script>
 
     <!-- Main js -->
     <script src="{{ asset('landing/js/main.js')}}"></script>
</body>

</html>
