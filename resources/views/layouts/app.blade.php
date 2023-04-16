<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    <div id="app">
        <div class="slider_area">
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="slider_text">

                                <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Sign In</h3>
                                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Create Now  Login  </p>
                 
                     
    
                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
                <img src="{{ url ('img/banner/illustration.png')}}" alt=""> --}}
            </div>
        </div>
            <!-- header-start -->

    <!-- header-end -->
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>


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
