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
     <link rel="icon" href="{{ asset('assets/img/favicon.png')}}" />
     <!-- Icon Font -->
     <link rel="stylesheet" href="{{ asset('assets/fonts/iconfonts/font-awesome/stylesheet.css')}}" />
     <!-- Site font -->
     <link rel="stylesheet" href="{{ asset('assets/fonts/webfonts/inter/stylesheet.css')}}" />
     <link rel="stylesheet" href="{{ asset('assets/fonts/webfonts/plus-jakarta-sans/stylesheet.css')}}" />
 
     <!-- Vendor CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css')}}" />
     <link rel="stylesheet" href="{{ asset('assets/css/vendors/jos.css')}}" />
     <link rel="stylesheet" href="{{ asset('assets/css/vendors/menu.css')}}" />
 
     <!-- Custom CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}" />
 
     <!-- Development css -->
     <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
    
</head>

<body class="">
   
    <div id="app"></div>

    <script src="{{ mix('js/app.js') }}" defer></script>

     <!--Vendor js-->
     <script src="{{ asset('assets/js/vendors/counterup.js')}}" type="module"></script>
     <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js')}}"></script>
     <script src="{{ asset('assets/js/vendors/fslightbox.js')}}"></script>
     <script src="{{ asset('assets/js/vendors/jos.min.js')}}"></script>
     <script src="{{ asset('assets/js/vendors/menu.js')}}"></script>
 
     <!-- Main js -->
     <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>
