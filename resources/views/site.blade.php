<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RESTOqr</title>

   <!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Shreethemes">
	
	<meta name="version" content="2.2.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

	<!-- Css -->
	<link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/libs/js-datepicker/datepicker.min.css')}}" rel="stylesheet">
	<!-- Main Css -->
	<link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
	<link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{ asset('assets/css/tailwind.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
  
    <div id="app"></div>

	<script src="{{ mix('js/app.js') }}"></script>
	 <!-- Back to top -->
	 <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
	 <!-- Back to top -->

	 <!-- Switcher -->
	 <div class="fixed top-[30%] -right-2 z-50">
		 <span class="relative inline-block rotate-90">
			 <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
			 <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
				 <i class="uil uil-moon text-[20px] text-yellow-500"></i>
				 <i class="uil uil-sun text-[20px] text-yellow-500"></i>
				 <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] size-7"></span>
			 </label>
		 </span>
	 </div>
	 <!-- Switcher -->
    <!-- JAVASCRIPTS -->
	<script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
	<script src="{{ asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
	<script src="{{ asset('assets/libs/shufflejs/shuffle.min.js')}}"></script>
	<script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js')}}"></script>
	<script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
	<script src="{{ asset('assets/js/plugins.init.js')}}"></script>
	<script src="{{ asset('assets/js/app.js')}}"></script>
	<!-- JAVASCRIPTS -->
</body>

</html>
