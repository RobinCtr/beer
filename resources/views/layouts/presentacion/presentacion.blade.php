<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>DOTXEO</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset ('layouts/presentacion/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset ('layouts/presentacion/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset ('layouts/presentacion/css/main.css') }}">

    <!-- script
    ================================================== -->
    <script src="{{ asset('layouts/presentacion/js/modernizr.js') }}"></script>
    <script src="{{ asset('layouts/presentacion/js/pace.min.js') }}"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset ('layouts/presentacion/images/logos/Favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset ('layouts/presentacion/images/logos/Favicon.ico') }}" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    @include('layouts/presentacion/menu')

    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{ asset('layouts/presentacion/images/beer-bg.jpg') }}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>
        <div class="home-content">
            <div class="row home-content__main">
                <h3>BIENVENIDO A .... </h3>
                <h1>
                    Somos un grupo creativo <br>
                    que diseña y crea <br>
                    la influencia en calzado <br>
                    y comodidad.
                </h1>            
            </div>
        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/phantom.rex/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->
    
    @yield('content')
    
    @include('layouts/presentacion/footer')

    @include('layouts/presentacion/preloader')
    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('layouts/presentacion/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('layouts/presentacion/js/plugins.js') }}"></script>
    <script src="{{ asset('layouts/presentacion/js/main.js') }}"></script>

</body>

</html>