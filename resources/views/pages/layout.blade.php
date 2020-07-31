<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Webreathe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

</head>

<body>

<!-- Navigation Bar-->
{{--@yield( 'navigation' )--}}
<!-- End Navigation Bar-->

<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">

            <!-- Logo container-->
            <div class="logo">
                <a href="/" class="logo">
                    <img src="" alt="" height="45" class="logo-large">
                </a>

            </div>
            <!-- End Logo container-->

            <div class="navbar-custom">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="/"><span><i class="ti-home"></i></span><span> Dashboard </span> </a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"> <span><i class="ti-harddrives"></i></span><span> Modules </span> </a>
                            <ul class="submenu">
                                <li><a href="{{ route('module-registration') }}">Inscription module</a></li>
                                <li><a href="{{ route('modules-list') }}">Liste des modules</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End navigation menu -->
                </div> <!-- end #navigation -->
            </div> <!-- end navbar-custom -->

            <div class="menu-extras topbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 pro-user-name">Price Moupele <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ti-power-off"></i> <span>Se déconnecter</span>
                            </a>

                        </div>
                    </li>
                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

</header>


<div class="wrapper">
    <!-- Container -->
    <div class="container-fluid">
        <!-- Content -->
        @yield('content')
    </div> <!-- end container -->

    <!-- Footer -->
    {{--@yield('footer')--}}
    <!-- End Footer -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    {{--<div class="pull-right hide-phone">--}}
                    {{--Project Completed <strong class="text-custom">57%</strong>.--}}
                    {{--</div>--}}
                    <div>
                        <strong>Webreathe</strong> - Copyright © 2019 - 2020
                    </div>

                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end wrapper -->





<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/jquery.core.js') }}"></script>
<script src="{{ asset('assets/js/jquery.app.js') }}"></script>

</body>
</html>