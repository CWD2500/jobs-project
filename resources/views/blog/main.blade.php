<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url ('img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}   ">
    <link rel="stylesheet" href="{{ url (' css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ url ('css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href={{  url ('css/themify-icons.css') }} ">
    <link rel="stylesheet" href={{  url ('css/nice-select.css') }} ">
    <link rel="stylesheet" href={{  url ('css/flaticon.css') }} ">
    <link rel="stylesheet" href={{  url ('css/gijgo.css') }} ">
    <link rel="stylesheet" href={{  url ('css/animate.min.css') }}  ">
    <link rel="stylesheet" href="{{ url ('css/slicknav.css') }} ">
    <link rel="stylesheet" href={{  url ('css/style.css') }} ">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                           
                                    <div class="dropdown open">
                                     
                                        <a  id="triggerId" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">
                                            @if (Auth::user())
                                            <img src="{{ url('img/aaa.jpg')}}" alt=" " class="imgProFiles">
                                        @endif
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            @if (Auth::user())
                                            {{-- <a class="dropdown-item" href="{{ route('proFile.home' , ['id'=>Auth::user()->slug])  }}">{{ Auth::user()->name }} </a> --}}
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                                @endif
                                        </div>
                                    </div>
                              
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">home</a></li>
                                            <li><a href="jobs.html">Browse Job</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="candidate.html">Candidates </a></li>
                                                    <li><a href="job_details.html">job details </a></li>
                                                    <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>  
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">4536+ Jobs listed</h5>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Find your Dream Job</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">We provide online instant cash loans with quick approval that suit your term length</p>
                            @guest

                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="boxed-btn3">Sign Up </a>  
                                @endif
                    
                                @if(Route::has("login"))
                                <a href="{{ route('login') }}" class="boxed-btn3">Sign In </a>
                                @endif
                            </div>
                        @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="{{ url ('img/banner/illustration.png')}}" alt=""> --}}
        </div>
    </div>
    <!-- slider_area_end -->

 
    <div class="container">
        @yield('content')
    </div>


    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                finloan@support.com <br> +10 873 672 6782 <br> 600/D, Green road, NewYork
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="#">About </a></li>
                                <li><a href="#"> Pricing</a></li>
                                <li><a href="#">Carrier Tips</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                Category
                            </h3>
                            <ul>
                                <li><a href="#">Design & Art</a></li>
                                <li><a href="#">Engineering</a></li>
                                <li><a href="#">Sales & Marketing</a></li>
                                <li><a href="#">Finance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{ url ('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ url ('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ url ('js/popper.min.js') }}"></script>
    <script src="{{ url ('js/bootstrap.min.js') }}"></script>
    <script src="{{ url ('js/owl.carousel.min.js') }}"></script>
    <script src="{{ url ('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url ('js/ajax-form.js') }}"></script>
    <script src="{{ url ('js/waypoints.min.j') }}s"></script>
    <script src="{{ url ('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url ('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ url ('js/scrollIt.js') }}"></script>
    <script src="{{ url ('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ url ('js/wow.min.js') }}"></script>
    <script src="{{ url ('js/nice-select.min.js') }}"></script>
    <script src="{{ url ('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ url ('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url ('js/plugins.js') }}"></script>
    <script src="{{ url ('js/gijgo.min.js') }}"></script>



    <!--contact js-->
    <script src="{{ url ('js/contact.js') }}"></script>
    <script src="{{ url ('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url ('js/jquery.form.js') }}"></script>
    <script src="{{ url ('js/jquery.validate.min.js') }}"></script>
    <script src="{{ url ('js/mail-script.js') }}"></script>


    <script src="{{ url('js/main.js')}} "></script>
</body>

</html>