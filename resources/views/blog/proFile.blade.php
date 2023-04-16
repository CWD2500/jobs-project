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
    </ul>
    <button type="button" class="btn btn-outline-danger  ">Sign Up</button>
    <button type="button" class="btn btn-outline-danger  ">Sign In</button>
    {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
</nav>



    {{-- content --}}
    <div class="container mt-3">
        @yield('content')
    </div>







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