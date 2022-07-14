<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="description"
        content="blog para la presentacion de los avances tecnologicos dentro del equipo de desarrollo AndoCodeando">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Stylesheets
     ============================================= -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/et-line.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/font-icons.woff') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/lined-icons.woff') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Theme Color Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}" type="text/css" />
    <!-- News Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/news.css') }}" type="text/css" />
    <!-- / -->
    <!-- SLIDER REVOLUTION 5.x css SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/settings.css') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/navigation.css') }}">
    <!-- Document Title
     ============================================= -->
    <title>@yield('Nombre')</title>
    <style>
        /* Revolution Slider Styles */
        .hesperiden .tp-tab {
            border-bottom: 0;
        }

        .hesperiden .tp-tab:hover,
        .hesperiden .tp-tab.selected {
            background-color: #E5E5E5;
        }
    </style>
    @yield('css')

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
  ============================================= -->
        <header id="header" class="full-header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
      ============================================= -->
                        <div id="logo">
                            <a href="{{ route('index') }}" class="standard-logo"
                                data-dark-logo="images/logo-dark.png"><img
                                    src="{{ asset('/assets/images/logoi.png') }}" alt="Canvas Logo"></a>
                            <a href="{{ route('index') }}" class="retina-logo"
                                data-dark-logo="images/logo-dark@2x.png"><img
                                    src="{{ asset('/assets/images/logoi.png') }}" alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Search
       ============================================= -->
                            <div id="top-search" class="header-misc-icon">
                                <li>
                                    <a href="#" class="button button-mini button-circle button-red"><i class="icon-off"></i> Cerrar sesión</a>
                                </li>
                                <li>
                                    <a href="#" class="button button-small button-circle button-green"><i class="icon-off"></i>Iniciar sesión</a>
                                </li>
                            </div><!-- #top-search end -->
                        </div>
                        <nav class="primary-menu">
                            <ul class="menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('index') }}">
                                        <div>Inicio</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('pendientes') }}">
                                        <div>Pendientes</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('completados') }}">
                                        <div>Completados</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('generar') }}">
                                        <div>Generar pedido</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('almacen') }}">
                                        <div>Almacen</div>
                                    </a>
                                </li>
                            </ul>
                        </nav><!-- #menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        {{-- Contenido --}}
        @section('contenido')
        @show

        <!-- Footer
      ============================================= -->
        <footer id="footer" class="dark" style="background-color: #1f2024;">

            <div class="container">

                <!-- Footer Widgets
        ============================================= -->
                <div class="footer-widgets-wrap row clearfix">

                    <!-- Footer Widget 3
         ============================================= -->
                    <div class="col-lg-4 col-sm-6 mb-5 mb-sm-0">
                        <div class="widget widget_links clearfix">
                            <h4 class="mb-3 mb-sm-4">Links Rápidos</h4>
                            <ul>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('index') }}">
                                        <div>Inicio</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('pendientes') }}">
                                        <div>Pendientes</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('completados') }}">
                                        <div>Completados</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('generar') }}">
                                        <div>Generar pedido</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('almacen') }}">
                                        <div>Almacen</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- Footer Widget 2
          ============================================= -->
                    <div class="col-lg-4 col-sm-6 mb-0">
                        <h4 class="mb-3 mb-sm-4">Información de contacto</h4>
                        <address>
                            <strong>SAN PEDRO ATZOMPA</strong> 55770<br>
                            Tecámac, Edo. de Méx.<br>
                        </address>
                        <abbr title="Phone Number"><strong>Teléfono:</strong></abbr> 01(55) 59387071 <br>
                        <abbr title="Phone Number"><strong>Celular:</strong></abbr> (+55) 3504-2491<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> inf.innova3.2@gmail.com <br><br>
                    </div>
                    <!-- Footer Widget 4
         ============================================= -->
                    <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                        <a href="{{ route('index') }}" class="standard-logo"><img class="mx-auto"
                                src="/assets/images/logoi.png" alt="Logo"></a>
                    </div>
                </div>
            </div>
    </div>
    </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
     ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
    <!-- JavaScripts============================================= -->
    <script src="{{ asset('assets/Js/jquery.js') }}"></script>
    <script src="{{ asset('assets/Js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/Js/plugins.infinitescroll.js') }}"></script>
    <!-- Footer Scripts
     ============================================= -->
    <script src="{{ asset('assets/Js/functions.js') }}"></script>
    <!-- ADD-ONS JS FILES -->
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="{{ asset('/assets/sweetalert/sweetalert.min.js') }}"></script>
    @yield('scripts')


    <script>
        var tpj = jQuery;
        var revapi19;
        var $ = jQuery.noConflict();


        // Navbar on hover
        $('.nav.tab-hover a.nav-link').hover(function() {
            $(this).tab('show');
        });

        // Current Date
        var weekday = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado"],
            month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre",
                "Noviembre", "Diciembre"
            ],
            a = new Date();

        jQuery('.date-today').html(weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate());

        // Infinity Scroll
        jQuery(window).on('load', function() {

            var $container = $('.infinity-wrapper');

            $container.infiniteScroll({
                path: '.load-next-portfolio',
                button: '.load-next-portfolio',
                scrollThreshold: false,
                history: false,
                status: '.page-load-status'
            });

            $container.on('load.infiniteScroll', function(event, response, path) {
                var $items = $(response).find('.infinity-loader');
                // append items after images loaded
                $items.imagesLoaded(function() {
                    $container.append($items);
                    $container.isotope('insert', $items);
                    setTimeout(function() {
                        SEMICOLON.widget.loadFlexSlider();
                    }, 1000);
                });
            });

        });

        $(window).on('pluginCarouselReady', function() {
            $('#oc-news').owlCarousel({
                items: 1,
                margin: 20,
                dots: false,
                nav: true,
                navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                        dots: true,
                    },
                    576: {
                        items: 1,
                        dots: true
                    },
                    768: {
                        items: 2,
                        dots: true
                    },
                    992: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            });
        });
    </script>

    @yield('scripts')

</body>





</html>
