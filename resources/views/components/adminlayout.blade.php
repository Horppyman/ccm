<!doctype html>
<html class="no-js " lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="">
        <title> Admin Dashboard </title>
        <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

        <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">


        @yield("cssStyles")

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    </head>

    <body class="theme-blush">

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets/images/loader.svg')}}" width="48" height="48" alt="Aero"></div>
                <p>Please wait...</p>
            </div>
        </div>

        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>



        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="navbar-brand">
                <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
                <a href="/dashboard"><img src="{{asset('assets/images/logo.svg')}}" width="25" alt="Aero"><span class="m-l-10">Admin Dashboard</span></a>
            </div>
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">

                            <div class="detail mx-1">
                                <h4>Hi, **name</h4>
                                <a href="{{route('logout')}}" class="btn"> Logout </a>
                            </div>
                        </div>
                    </li>
                    <li class="active open"><a href="{{ route('dashboard')}}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="zmdi zmdi-dns"></i><span>Categories</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{ route('addcategory')}}">Add Categories</a></li>
                            <li><a href="{{ route('category')}}">Category List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-library"></i><span>Sermons</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route ('addsermon') }}">Add Sermon</a></li>
                            <li><a href="{{ route ('sermon') }}">Sermon List</a></li>

                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-layers"></i><span>Books</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{ route ('addbook') }}">Add Book</a></li>
                            <li><a href="{{ route('book')}}">Book List</a></li>

                        </ul>
                    </li>


                </ul>
            </div>
        </aside>



        @yield("contents")


        <!-- Jquery Core Js -->
        <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
        <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->

        <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
        <!-- slimscroll, waves Scripts Plugin Js -->


        <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>



        @yield("scripts")

    </body>


</html>
