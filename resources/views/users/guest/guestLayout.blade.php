<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> CargoMax || Home</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="CargoMax cargo and shipping services" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;family=Fredoka+One&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="assets/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/libs/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/libs/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/libs/jarallax/jarallax.css" />
    <link rel="stylesheet"
        href="assets/libs/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet"
        href="assets/libs/nouislider/nouislider.min.css" />
    <link rel="stylesheet"
        href="assets/libs/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/libs/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/libs/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/libs/pifoxen-icons/style.css">
    <link rel="stylesheet"
        href="assets/libs/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/libs/reey-font/stylesheet.css" />
    <link rel="stylesheet"
        href="assets/libs/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="assets/libs/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/libs/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet"
        href="assets/libs/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/libs/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/libs/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/libs/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/cargomax.css" />
    <link rel="stylesheet" href="assets/css/cargomax-responsive.css" />
</head>

<body>
    <div class="page-wrapper">

        <header class="main-header-two clearfix">
            <div class="main-header-two__top">
                <div class="container">
                    <div class="main-header-two__top-inner">
                        <div class="main-header-two__logo">
                            <a href="index.php"><img src="assets/images/logo-3.png" alt=""></a>
                        </div>
                        <div class="main-header-two__right">
                            <ul class="list-unstyled main-header-two__top-menu">
                                <li><a href="faq.php">FAQs</a></li>
                                <li><span>/</span></li>
                                <li><a href="{{route('about')}}">About</a></li>
                            </ul>
                            <div class="main-header-two__search-cart-donate-btn">
                                <a href="#" class="main-header-two__search search-toggler icon-magnifying-glass"></a>
                                <a href="#" class="main-header-two__cart icon-avatar mini-cart__toggler"></a>
                                <a href="{{route('auth.login')}}" class="donate-btn main-header-two__btn">  Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-two-wrapper clearfix">
                    <div class="container clearfix">
                        <div class="main-menu-two-wrapper-inner clearfix">
                            <div class="main-menu-two-wrapper__main-menu">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class="dropdown current">
                                        <a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('services')}}">Services</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{route('works')}}">How it Works</a>
                                    </li>
                                    <li><a href="{{route('contact')}}">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu-two-wrapper__right">
                                <div class="main-menu-two__top-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div>
            <!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
           <!--Main Slider Two Start-->
  
   

        <main class="py-4 " class="main-slider main-slider-two">
            @yield('content')
        </main>
    </div>
    </body>
    @extends('users.guest.footer')



    <script src="assets/libs/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/jarallax/jarallax.min.js"></script>
    <script src="assets/libs/jquery-ajaxchimp/jquery.ajaxchimp.min.js">
    </script>
    <script src="assets/libs/jquery-appear/jquery.appear.min.js"></script>
    <script
        src="assets/libs/jquery-circle-progress/jquery.circle-progress.min.js">
    </script>
    <script
        src="assets/libs/jquery-magnific-popup/jquery.magnific-popup.min.js">
    </script>
    <script src="assets/libs/jquery-validate/jquery.validate.min.js">
    </script>
    <script src="assets/libs/nouislider/nouislider.min.js"></script>
    <script src="assets/libs/odometer/odometer.min.js"></script>
    <script src="assets/libs/swiper/swiper.min.js"></script>
    <script src="assets/libs/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/libs/wnumb/wNumb.min.js"></script>
    <script src="assets/libs/wow/wow.js"></script>
    <script src="assets/libs/isotope/isotope.js"></script>
    <script src="assets/libs/countdown/countdown.min.js"></script>
    <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/libs/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/libs/bootstrap-select/js/bootstrap-select.min.js">
    </script>
    <script src="assets/libs/vegas/vegas.min.js"></script>
    <script src="assets/libs/jquery-ui/jquery-ui.js"></script>
    <script src="assets/libs/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="assets/js/cargomax.js"></script>
</html>