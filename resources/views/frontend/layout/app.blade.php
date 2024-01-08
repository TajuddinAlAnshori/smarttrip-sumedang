<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

   <!-- TITLE OF SITE -->
<title>Smart Trip - Sumedang</title>

<link rel="shortcut icon" type="image/icon" href="{{ asset('img/logo2.png') }}" sizes="40x40" />


    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}" />

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('css/css/animate.css') }}" />

    <!--hover.css-->
    <link rel="stylesheet" href="{{ asset('css/css/hover-min.css') }}">

    <!--datepicker.css-->
    <link rel="stylesheet" href="{{ asset('css/css/datepicker.css') }}">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ asset('css//css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/owl.theme.default.min.css') }}" />

    <!-- range css-->
    <link rel="stylesheet" href="{{ asset('css/css/jquery-ui.min.css') }}" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('css/css/bootsnav.css') }}" />

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}" />

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		@include('frontend.layout.header')
		<!-- main-menu End -->

		
		@yield('content')


	@include('frontend.layout.footer')	
		




	<script src="{{ asset('js/js/jquery.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('js/js/bootsnav.js') }}"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="{{ asset('js/js/jquery.filterizr.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="{{ asset('js/js/jquery-ui.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset('js/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/js/waypoints.min.js') }}"></script>

    <!--owl.carousel.js-->
    <script src="{{ asset('js/js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset('js/js/jquery.sticky.js') }}"></script>

    <!--datepicker.js-->
    <script src="{{ asset('js/js/datepicker.js') }}"></script>

    <!--Custom JS-->
    <script src="{{ asset('js/js/custom.js') }}"></script>


</body>

</html>