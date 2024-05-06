<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sertifikasi</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('focus-2') }}/images/favicon.png">
    <link href="{{ asset('focus-2') }}/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ asset('focus-2') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('focus-2') }}/css/style.css" rel="stylesheet">

</head>

<body>
    
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="/" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('focus-2') }}/images/logo.png" alt="">
                <img class="logo-compact" src="{{ asset('focus-2') }}/images/logo-text.png" alt="">
                <img class="brand-title" src="{{ asset('focus-2') }}/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <span class="small">{{ Auth::user()->name }}</span>
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ asset('focus-2') }}/app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">{{ __('Logout') }} </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href={{ url('web') }} aria-expanded="false"><i
                        class="icon icon-home"></i><span class="nav-text">Home</span></a>
                    <li><a href={{ url('dashboard') }} aria-expanded="false"><i
                        class="icon icon-home"></i><span class="nav-text">Dashboard</span></a>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Manage Data</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('departemen.index') }}">Manage Lembaga</a></li>
                            <li><a href="{{ route('pegawai.index') }}">Manage Peserta</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-body">
            <div class="container-fluid">
                @yield('nav')
                
                    @yield('profit')
                
                
                        @yield('konten')
            </div>
        </div>

        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
    </div>
    <!-- Required vendors -->
    <script src="{{ asset('focus-2') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('focus-2') }}/js/quixnav-init.js"></script>
    <script src="{{ asset('focus-2') }}/js/custom.min.js"></script>

    <script src="{{ asset('focus-2') }}/vendor/chartist/js/chartist.min.js"></script>

    <script src="{{ asset('focus-2') }}/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('focus-2') }}/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="{{ asset('focus-2') }}/js/dashboard/dashboard-2.js"></script>


    <!-- Circle progress -->

</body>

</html>