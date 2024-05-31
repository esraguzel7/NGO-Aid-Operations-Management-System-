<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HandInHand</title>

    <link rel="shortcut icon" type="image/x-icon" href="{!! url('/assets/site/img/favicon.png') !!}">

    <!-- Font Awesome Icons CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/font-awesome.min.css') !!}">
    <!-- Themify Icons CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/themify-icons.css') !!}">
    <!-- Elegant Font Icons CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/elegant-font-icons.css') !!}">
    <!-- Elegant Line Icons CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/elegant-line-icons.css') !!}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/bootstrap.min.css') !!}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/venobox/venobox.css') !!}">
    <!-- OWL-Carousel CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/owl.carousel.css') !!}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/slicknav.min.css') !!}">
    <!-- Css Animation CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/css-animation.min.css') !!}">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/nivo-slider.css') !!}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/main.css') !!}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{!! url('/assets/site/css/responsive.css') !!}">

    <script src="{!! url('/assets/site/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') !!}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="site-preloader-wrap">
        <div class="spinner"></div>
    </div><!-- Preloader -->

    <header id="header" class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="top-content-wrap row">
                    <div class="col-sm-8">
                        <ul class="left-info">
                            <li><a href="#"><i class="ti-email"></i>info@handinhand.com</a></li>
                            <li><a href="#"><i class="ti-mobile"></i>+1 (555) 555 5555</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 d-none d-md-block">
                        <ul class="right-info">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="bottom-content-wrap row">
                    <div class="col-sm-4">
                        <div class="site-branding">
                            <a href="{!! route('site.home.show') !!}"><img src="{!! url('/assets/site/img/logo.png') !!}" alt="Brand"></a>
                        </div>
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul id="mainmenu" class="nav navbar-nav nav-menu">
                            <li class="active"><a href="{!! route('site.home.show') !!}">Home</a></li>
                            <li><a href="{!! route('site.about.show') !!}">About</a></li>
                            <li><a href="{!! route('site.couses.show') !!}">Couses</a></li>
                            @auth('web')
                                <li>
                                    <a href="#" class="text-secondary">{{ Auth::user()->name }}</a>

                                    <ul>
                                        <li><a href="{!! route('site.profile.volunteer.show') !!}">Profile</a></li>
                                        <li><a href="{!! route('logout.perform') !!}">Logout</a></li>
                                    </ul>
                                </li>
                            @endauth
                        </ul>

                        @auth('web')
                            <a href="{!! route('site.couses.show') !!}" class="default-btn">Donate
                                Now</a>
                        @endauth

                        @auth('indigent')
                            {{ Auth::guard('indigent')->user()->name }}
                        @endauth

                        @guest
                            <a href="{!! route('site.loginandregistervolunteer.show') !!}" class="default-btn">Donate
                                Now</a>
                            <a href="{!! route('site.home.show') !!}" class="default-btn">Request Help</a>
                        @endguest

                    </div>
                </div>
            </div>
        </div>
    </header><!-- /Header Section -->

    <div class="header-height"></div>

    @yield('content')

    <section class="widget-section padding">
        <div class="container">
            <div class="widget-wrap row">
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <img src="img/logo-light.png" alt="logo">
                        <p>The secret to happiness lies in helping others. Never underestimate the difference YOU can
                            make in the lives of the poor</p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Recent Couses</h3>
                        <ul class="widget-link">
                            @foreach (\App\Models\Operation::where('operation_type', 'cash')->where('is_complated', false)->limit(5)->get() as $operation)
                                <li>
                                    <a href="{!! route('site.donatenow.show', ['id' => $operation->id]) !!}">
                                        {{ $operation->description }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 xs-padding">
                    <div class="widget-content">
                        <h3>Charitify Location</h3>
                        <ul class="address">
                            <li><i class="ti-email"></i>info@handinhand.com</li>
                            <li><i class="ti-mobile"></i>+1 (555) 555 5555</li>
                            <li><i class="ti-world"></i> www.handinhand.com</li>
                            <li><i class="ti-location-pin"></i> Caroline-Geiger-Platz 6/6 58248 Rudolstadt, Germany
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ./Widget Section -->

    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sm-padding">
                    <div class="copyright">&copy; 2021 Charitify Powered by DynamicLayers</div>
                </div>
                <div class="col-md-6 sm-padding">
                    <ul class="footer-social">
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Report Problem</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!-- /Footer Section -->

    <a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

    <!-- jQuery Lib -->
    <script src="{!! url('/assets/site/js/vendor/jquery-1.12.4.min.js') !!}"></script>
    <!-- Bootstrap JS -->
    <script src="{!! url('/assets/site/js/vendor/bootstrap.min.js') !!}"></script>
    <!-- Tether JS -->
    <script src="{!! url('/assets/site/js/vendor/tether.min.js') !!}"></script>
    <!-- Imagesloaded JS -->
    <script src="{!! url('/assets/site/js/vendor/imagesloaded.pkgd.min.js') !!}"></script>
    <!-- OWL-Carousel JS -->
    <script src="{!! url('/assets/site/js/vendor/owl.carousel.min.js') !!}"></script>
    <!-- isotope JS -->
    <script src="{!! url('/assets/site/js/vendor/jquery.isotope.v3.0.2.js') !!}"></script>
    <!-- Smooth Scroll JS -->
    <script src="{!! url('/assets/site/js/vendor/smooth-scroll.min.js') !!}"></script>
    <!-- venobox JS -->
    <script src="{!! url('/assets/site/js/vendor/venobox.min.js') !!}"></script>
    <!-- ajaxchimp JS -->
    <script src="{!! url('/assets/site/js/vendor/jquery.ajaxchimp.min.js') !!}"></script>
    <!-- Counterup JS -->
    <script src="{!! url('/assets/site/js/vendor/jquery.counterup.min.js') !!}"></script>
    <!-- waypoints js -->
    <script src="{!! url('/assets/site/js/vendor/jquery.waypoints.v2.0.3.min.js') !!}"></script>
    <!-- Slick Nav JS -->
    <script src="{!! url('/assets/site/js/vendor/jquery.slicknav.min.js') !!}"></script>
    <!-- Nivo Slider JS -->
    <script src="{!! url('/assets/site/js/vendor/jquery.nivo.slider.pack.js') !!}"></script>
    <!-- Letter Animation JS -->
    <script src="{!! url('/assets/site/js/vendor/letteranimation.min.js') !!}"></script>
    <!-- Wow JS -->
    <script src="{!! url('/assets/site/js/vendor/wow.min.js') !!}"></script>
    <!-- Contact JS -->
    <script src="{!! url('/assets/site/js/contact.js') !!}"></script>
    <!-- Main JS -->
    <script src="{!! url('/assets/site/js/main.js') !!}"></script>

    <script>
        $("input[type=checkbox]").on('change', function() {
            if ($(this).is(':checked')) {
                $(this).attr('value', '1');
            } else {
                $(this).attr('value', '0');
            }
        });
        $("input[type=checkbox]").trigger('change');
    </script>

</body>

</html>
