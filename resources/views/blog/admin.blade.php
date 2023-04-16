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
    <link rel="stylesheet" href={{  url ('css/gijgo.css') }}">
    <link rel="stylesheet" href={{  url ('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/slicknav.css') }}">
    <link rel="stylesheet" href={{  url ('css/style.css') }} ">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    <header>
        
        <nav class="navbar navbar-expand navbar-light  bg-faded" style="background: blue;font-weight: bold;">
            <a class="navbar-brand active" href="{{ route('admin.dashbord')}}"> BashBord</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Job </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{route('admin.dashbord.home')}}">Home  Job  </a>
                        <a class="dropdown-item" href="{{route('admin.dashbord.create')}}">Create   Job </a>
                        <a class="dropdown-item" href="{{route('admin.dashbord.trashed')}}">Trashed</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">List Job </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{route('admin.dashbord.list.job.home')}}">Home List Job  </a>
                        <a class="dropdown-item" href="{{route ('admin.dashbord.list.job.create')}}">Create  List Job </a>
                        <a class="dropdown-item" href="{{route ('admin.dashbord.list.job.trashed')}}">Trashed</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apply Job </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                    
                        <a class="dropdown-item" href="{{route('admin.dashbord.list.apply')}}">List Apply   </a>

                    </div>
                </li>
            </ul>
            <button type="button" class="btn btn-outline-danger  ">Sign Up</button>
            <button type="button" class="btn btn-outline-danger  ">Sign In</button>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </nav>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
   
    <!-- slider_area_end -->

 
    <div class="container">
        @yield('dashBord')
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