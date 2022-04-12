<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>S3 Dashboard | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    {{-- <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon"> --}}

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/waves.min.css')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome-n.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/chartist.css')}}" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/widget.css')}}">
    <link rel="stylesheet" href="text/css" href="">
    @stack('style')
    @livewireStyles
    @powerGridStyles
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('layouts.navbar')



            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                                {{-- {{ $slot ?? '' }} --}}

                    @include('layouts.sidebar')

                    <div class="pcoded-content">

                        {{-- <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="pcoded-inner-content">
                            {{ $slot ?? '' }}
                            @yield('content')

                        </div>
                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    {{-- <script data-cfasync="false" src="{{asset('assets/js/email-decode.min.js')}}"></script> --}}
   <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    {{-- <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script> --}}

    <script src="{{asset('assets/js/waves.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

    {{-- <script src="{{asset('assets/js/jquery.flot.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('assets/js/jquery.flot.categories.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('assets/js/curvedlines.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('assets/js/jquery.flot.tooltip.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script> --}}

    <script src="{{asset('assets/js/chartist.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{asset('assets/js/amcharts.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('assets/js/serial.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('assets/js/light.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>

    <script src="{{asset('assets/js/pcoded.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script src="{{asset('assets/js/vertical-layout.min.js')}}" type="d2d1d6e2f87cbebdf4013b26-text/javascript"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('assets/js/custom-dashboard.min.js')}}"></script>
    <script type="d2d1d6e2f87cbebdf4013b26-text/javascript" src="{{asset('assets/js/script.min.js')}}"></script>


    <script src="{{asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="d2d1d6e2f87cbebdf4013b26-|49" defer=""></script>
    @yield('js')
    @stack('js')
@livewireScripts
    @powerGridScripts
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:25 GMT -->

</html>
