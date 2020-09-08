<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" href="{{ asset('img/logo-25.png') }}" sizes="25x25">
    <link rel="shortcut icon" href="{{ asset('img/logo-162.png') }}" sizes="162x162">

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-naskh" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .bg-rj {background-color:#19a404;}
        #navigation {display:flex;}
    </style>
    @yield('style')
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/logo-162.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header bg-rj">
                <div class="header-top d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><img src="" alt="">29ºc, Sunny </li>
                                        <li><img src="" alt="">Sunday, 9th September, 2020</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                       <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="{{ asset('img/logo-banner.png') }}" alt="Dima Dima Raja"></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky bg-rj">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="#">الرئيسية</a></li>
                                            <li><a href="#">التصنيفات</a></li>
                                            <li><a href="#">آخر الأخبار</a></li>
                                            <li><a href="#">الصفحات <i class="fa fa-caret-down fab"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="details.html">Categori Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">من نحن</a></li>
                                            <li><a href="#">إتصل بنا</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="بحث">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus 
                                            fames lectus tempor da blandit gravida sodales  Suscipit mauris 
                                            pede for con sectetuer sodales adipisci for cursus fames lectus 
                                            tempor da blandit gravida sodales  Suscipit mauris pede for 
                                            sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                            <button type="submit" name="submit" id="newsletter-submit"
                                            class="email_icon newsletter-submit button-contactForm"><img src="" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="" alt=""></a></li>
                                    <li><a href="#"><img src="" alt=""></a></li>
                                    <li><a href="#"><img src="" alt=""></a></li>
                                    <li><a href="#"><img src="" alt=""></a></li>
                                    <li><a href="#"><img src="" alt=""></a></li>
                                    <li><a href="#"><img src="" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
  <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>                             
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/animated.headline.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset('js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>
</html>
