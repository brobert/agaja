<!doctype html>
<html class="no-js" lang="">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gabinet terapeutyczny "Agaja"</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

		<!-- Style CSS
		============================================ -->
        <link rel="stylesheet" href="/style.css">

		<!-- Modernizr JS
		============================================ -->
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        @include('techedu/layout/partials/menu_header')


        @yield('content')

        <!--Footer Area Start-->
            @include('techedu.layout.partials.footer')
        <!--End of Footer Area-->

		<!-- jquery
		============================================ -->
        <script src="/js/vendor/jquery-1.12.3.min.js"></script>

		<!-- bootstrap JS
		============================================ -->
        <script src="/js/bootstrap.min.js"></script>

		<!-- bootstrap Toggle JS
		============================================ -->
        <script src="/js/bootstrap-toggle.min.js"></script>

        <!-- nivo slider js
		============================================ -->
		<script src="/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="/lib/nivo-slider/home.js" type="text/javascript"></script>

		<!-- wow JS
		============================================ -->
        <script src="/js/wow.min.js"></script>

		<!-- meanmenu JS
		============================================ -->
        <script src="/js/jquery.meanmenu.js"></script>

		<!-- Owl carousel JS
		============================================ -->
        <script src="/js/owl.carousel.min.js"></script>

		<!-- Countdown JS
		============================================ -->
        <script src="/js/jquery.countdown.min.js"></script>

		<!-- scrollUp JS
		============================================ -->
        <script src="/js/jquery.scrollUp.min.js"></script>

		<!-- Waypoints JS
		============================================ -->
        <script src="/js/waypoints.min.js"></script>

		<!-- Counterup JS
		============================================ -->
        <script src="/js/jquery.counterup.min.js"></script>

		<!-- Slick JS
		============================================ -->
        <script src="/js/slick.min.js"></script>

		<!-- Mix It Up JS
		============================================ -->
        <script src="/js/jquery.mixitup.js"></script>

		<!-- Sticky JS
		============================================ -->
        <script src="/js/jquery.sticky.js"></script>
		<!-- Venubox JS
		============================================ -->
        <script src="/js/venobox.min.js"></script>

		<!-- plugins JS
		============================================ -->
        <script src="/js/plugins.js"></script>

        <!-- Google Map js
		============================================ -->

		<!-- main JS
		============================================ -->
        <script src="/js/main.js"></script>

        @stack('scripts')
    </body>

<!-- Mirrored from devitems.com/tf/techedu-preview/techedu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2016 16:18:11 GMT -->
</html>