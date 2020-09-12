<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge, chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Web design, graphic design, app development"/>

        <title>@yield('title', 'Aanbhi | innovation !')</title>


        <!-- css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css"/>

        <!-- Custom css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css"/>
    </head>

    <body class="@yield('bodyClass', '')">

        <div id="root">

            @include('includes.header')
            <!--/header-->

            <nav class="navbar-outer">
                <div class="menu-inner">
                    <div  id="navbar" class="navbar-menu">
                        <ul class="main-menu">
                            <li><a href="/">Home</a></li>
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="menu-footer">
                    <p>Copyright ©{{ date('Y') }} All rights reserved</p>
                </div>
            </nav>
        

            <div class="clearfix"></div>

            @yield('content')
            <!--/.content-area -->

            <div class="stack clearfix"></div>

            @include('includes.footer')
            <!--/#footer -->

        </div><!--/#root -->
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>

    <!-- Custom js -->
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            navigation:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        })
    </script>
    
    <!--Scroll up button-->
    <div id="scrollUp"><span class="lnr lnr-arrow-up"></span></div>
    </body>
</html>