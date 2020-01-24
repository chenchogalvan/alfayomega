<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alfa y Omega</title>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/css/app.css">

    <!-- FontAwesome CSS -->
    {{-- <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/assets/css/flaticon.min.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/slick.min.css">
    <!-- CSS Animation CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/cssanimation.min.css">
    <!-- Justified Gallery CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/justifiedGallery.min.css">
    <!-- Light Gallery CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/light-gallery.min.css"> --}}
    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->

    <link rel="stylesheet" href="/assets/css/vendor.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/plugins.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    @stack('css')

</head>

<body>

    <div id="app">


        <!--====================  header area ====================-->
        <div
            class="header-area header-sticky bg-img space__inner--y40 background-repeat--x background-color--dark d-none d-lg-block">
            <!-- header top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="header-top-info">
                                <span class="header-top-info__image pr-1"><img src="assets/img/icons/phone.png"
                                        alt=""></span>
                                <span class="header-top-info__text">(844) 418.1119</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-top-info text-center">
                                <span class="header-top-info__image pr-1"><img src="assets/img/icons/clock.png"
                                        alt=""></span>
                                <span class="header-top-info__text">9.00 am - 6.00 pm</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-top-info text-right">
                                {{-- <a class="header-top-info__link" href="login-register.html"><span>Login</span></a> / <a
                                    class="header-top-info__link" href="login-register.html">Register</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu bar -->
            <div class="menu-bar position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-bar-wrapper background-color--default space__inner--x35">
                                <div class="menu-bar-wrapper-inner">
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="brand-logo">
                                                <a href="/">
                                                    <img src="/images/logo2.png" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="navigation-area d-flex justify-content-end align-items-center">
                                                <!-- navigation menu -->
                                                <nav class="main-nav-menu">
                                                    <ul class="d-flex justify-content-end">
                                                        <li><a href="/">Inicio</a></li>
                                                        <li><a href="{{ route('servicios') }}">Servicios</a></li>
                                                        <li><a href="{{ route('equipo') }}">Equipos de demolicion</a></li>
                                                        <li><a href="{{ route('contacto') }}">Contacto</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of header area  ====================-->
        <!--====================  mobile header ====================-->
        <div
            class="mobile-header header-sticky bg-img space__inner--y30 background-repeat--x background-color--light d-block d-lg-none" style="background:#f8f9fa!important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="brand-logo">
                            <a href="#">
                                <img src="/images/logo2.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mobile-menu-trigger-wrapper text-right" id="mobile-menu-trigger">
                            <span class="mobile-menu-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of mobile header  ====================-->
        <!--====================  offcanvas mobile menu ====================-->
        <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
                <span class="menu-close"></span>
            </a>
            <div class="offcanvas-wrapper">
                <div class="offcanvas-inner-content">
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="{{ route('servicios') }}">Servicios</a></li>
                            <li><a href="{{ route('equipo') }}">Equipos de demolicion</a></li>
                            <li><a href="{{ route('contacto') }}">Contacto</a></li>
                        </ul>
                    </nav>
                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info__list">
                                    <li><i class="fa fa-phone"></i> 01225 265 847</li>
                                    <li><i class="fa fa-clock-o"></i> 9.00 am - 11.00 pm</li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of offcanvas mobile menu  ====================-->

        @yield('content')


        <!--====================  newsletter area ====================-->
        <div class="newsletter-area newsletter-area-bg bg-img" data-bg="/images/funfact-bg.jpg">
            <div class="newsletter-wrapper background-color--default-overlay space__inner--y60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xl-10 mx-auto">
                            <div class="row align-items-center">
                                <div class="col-lg-4 mb-3 mb-lg-0">
                                    <!-- newsletter title -->
                                    <h3 class="newsletter-title"><span>¿Quieres que</span> nos pongamos en contacto
                                        contigo?</h3>
                                </div>
                                <div class="col-lg-8">
                                    <div class="newsletter-form">
                                        <form id="mc-form" class="mc-form">
                                            <input type="email" placeholder="Dejanos tu correo y te escribiremos">
                                            <button class="theme-button" type="submit">Enviar</button>
                                        </form>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div>
                                        <!-- mailchimp-alerts end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of newsletter area  ====================-->

        <!--====================  footer area ====================-->
        <div class="footer-area bg-img space__inner--ry120" data-bg="/images/footer-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget__logo space__bottom--40">
                                <a href="index.html">
                                    <img src="/images/logo2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <p class="footer-widget__text space__bottom--20">Alfa y Omega servicios industriales inició
                                sus operaciones el 4 de Marzo de 2012.</p>
                            <ul class="social-icons">
                                <li><a href="//www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
                            <h5 class="footer-widget__title space__bottom--20">Información</h5>
                            <ul class="footer-widget__menu">
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Productos</a></li>
                                <li><a href="#">Performance Line</a></li>
                                <li><a href="#">Excellence Lin</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget space__top--15 space__top__md--40 space__top__lm--40">
                            <h5 class="footer-widget__title space__bottom--20">Ayuda y contacto</h5>
                            <ul class="footer-widget__menu">
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5
                            class="footer-widget__title space__top--15 space__bottom--20 space__top__md--40 space__top__lm--40">
                            Contactanos</h5>
                        <div class="footer-contact-wrapper">
                            <div class="single-footer-contact">
                                <div class="single-footer-contact__icon"><i class="fa fa-map-marker"></i></div>
                                <div class="single-footer-contact__text">Calle 2 # 2644, Miguel Hidalgo, 25096 Saltillo, Coah.
                                </div>
                            </div>
                            <div class="single-footer-contact">
                                <div class="single-footer-contact__icon"><i class="fa fa-phone"></i></div>
                                <div class="single-footer-contact__text"> <a href="tel:98548658125">(844) 418.1119</a>
                                </div>
                            </div>
                            <div class="single-footer-contact">
                                <div class="single-footer-contact__icon"><i class="fa fa-envelope"></i></div>
                                <div class="single-footer-contact__text"><a
                                        href="mailto:contacto@alfayomegaservices.com">contacto@alfayomegaservices.com</a><br><a
                                        href="mailto:servicio@alfayomegaservices.com">servicio@alfayomegaservices.com</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright text -->
        <div class="copyright-area background-color--deep-dark space__inner--y30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="copyright-text">Copyright &copy;2019 Alfa y Omega Servicios industriales | <a href="#">Made by ClusterMX</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->



    </div>



    <!--====================  scroll top ====================-->
    <button class="scroll-top" id="scroll-top">
        <i class="fa fa-angle-up"></i>
    </button>
    <!--====================  End of scroll top  ====================-->




    <!--====================  End of scroll top  ====================-->
    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="/assets/js/modernizr-2.8.3.min.js"></script>
    <!-- jQuery JS -->
    <script src="/js/app.js"></script>
    <!-- Bootstrap JS -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Popper JS -->
    <script src="/assets/js/popper.min.js"></script>
    <!-- Slick slider JS -->
    <script src="/assets/js/plugins/slick.min.js"></script>
    <!-- Counterup JS -->
    <script src="/assets/js/plugins/counterup.min.js"></script>
    <!-- Waypoint JS -->
    <script src="/assets/js/plugins/waypoint.min.js"></script>
    <!-- Justified Gallery JS -->
    <script src="/assets/js/plugins/justifiedGallery.min.js"></script>
    <!-- Image Loaded JS -->
    <script src="/assets/js/plugins/imageloaded.min.js"></script>
    <!-- Maosnry JS -->
    <script src="/assets/js/plugins/masonry.min.js"></script>
    <!-- Light Gallery JS -->
    <script src="/assets/js/plugins/light-gallery.min.js"></script>
    <!-- Mailchimp JS -->
    <script src="/assets/js/plugins/mailchimp-ajax-submit.min.js"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->
    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>


    @stack('js')

	
	<!-- Load Facebook SDK for JavaScript -->

      <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v5.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=install_email
  page_id="778478712199357"
  theme_color="#ff7e29"
    logged_in_greeting="¿HOLA EN QUE PODEMOS AYUDARTE?"
    logged_out_greeting="¿HOLA EN QUE PODEMOS AYUDARTE?">
</div>
</body>

</html>
