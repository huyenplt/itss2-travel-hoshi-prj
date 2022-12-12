<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('web/css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('web/css/styles.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <link rel="stylesheet" href="{{ asset('assets/css/user/app.css') }}" />

    @yield('css')
    @yield('title')
</head>
<body data-spy="scroll" data-target=".fixed-top">

    @yield('content')

    <script src="{{ asset('assets/js/user/app.js') }}"></script>
    <script src="{{ asset('assets/js/user/home.js') }}"></script>
    <script src="{{ asset('web/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{ asset('web/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
    <script src="{{ asset('web/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('web/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('web/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('web/js/morphext.min.js') }}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{ asset('web/js/isotope.pkgd.min.js') }}"></script> <!-- Isotope for filter -->
    <script src="{{ asset('web/js/validator.min.js') }}"></script> <!-- Validator.js') }} - Bootstrap plugin that validates forms -->
    <script src="{{ asset('web/js/scripts.js') }}"></script> <!-- Custom scripts -->
    <script src="{{ asset('assets/js/user/place.js') }}"></script>
    @yield('js')
</body>
</html>
