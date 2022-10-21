<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Responsive/Encoding Metas -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Metas -->
    <meta name="description" content="Christianity In Christ Ministry" />
    <meta name="keywords" content="christianity, church, ccm" />
    <meta name="author" content="Opeyemi Ayanyemi" />

    <!-- Page Title -->
    <title>Christianity In Christ Ministry</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('ccm/img/favicon.png')}}">

    <!-- Begin: CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/styles.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/responsive.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/owl.carousel.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/owl.theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/owl.transitions.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/font-awesome-animation.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/YTPlayer.css') }}" /><!-- CSS: YTPlayer CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/swipebox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/navigation.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/bootstrap-touch-slider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ccm/css/color-schemes/skin-main.css') }}" id="css-default" />
    <!-- End: CSS Stylesheets -->

</head>

<!-- BODY -->
<body class="home" id="body">
    <!-- PAGE LOADER -->
    {{-- <div class="amaezi-page-loader">
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
    </div> --}}


    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a class="navbar-brand" href="home-image.html">
                        <img alt="logo" src="{{ asset('ccm/img/ccm-logo-dark-text.png') }}">
                        {{-- <img alt="logo" src="{{ asset('ccm/img/theme_logo_dark.png') }}"> --}}
                    </a>
                </div>
                <div class="col-md-9 fundraising-contact-details">
                    <div class="header-nav-actions">
                        <!-- DONATIONS BUTTON -->
                        <a class="donate-now" href="{{route('page.contact')}}">
                            Contact Us
                        </a>
                    </div>
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#theme-main-nav-menu" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="theme-main-nav-menu">
                            <ul class="nav navbar-nav navbar-left">
                                <li><a href="{{route('page.home')}}">Home</a></li>
                                <li><a href="{{route('page.about')}}">About Us</a></li>
                                <li><a href="{{route('page.sermons')}}">Sermons</a></li>
                                <li><a href="{{route('page.books')}}">Books</a></li>
                                {{-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="gallery-2-columns.html"><i class="icon-picture icons"></i> Gallery 2 Columns</a></li>
                                        <li><a href="gallery-3-columns.html"><i class="icon-picture icons"></i> Gallery 3 Columns</a></li>
                                        <li><a href="gallery-4-columns.html"><i class="icon-picture icons"></i> Gallery 4 Columns</a></li>
                                        <li><a href="gallery-mixed-columns.html"><i class="icon-grid icons"></i> Gallery Mixed Columns</a></li>
                                        <li><a href="gallery-instagram-3-columns.html"><i class="icon-social-instagram icons"></i> Instagram 3 Columns</a></li>
                                        <li><a href="gallery-instagram-4-columns.html"><i class="icon-social-instagram icons"></i> Instagram 4 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="home-image.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="what-we-fight-for.html"><i class="icon-graduation icons"></i> What We Fight For</a></li>
                                        <li><a href="our-sponsors.html"><i class="icon-user-following icons"></i> Our Sponsors</a></li>
                                        <li><a href="become-contributor.html"><i class="icon-heart icons"></i> Become Contributor</a></li>
                                        <li><a href="our-partners.html"><i class="icon-people icons"></i> Our Partners</a></li>
                                        <li><a href="contact.html"><i class="icon-location-pin icons"></i> Contact us</a></li>
                                        <li><a href="about.html"><i class="icon-graduation icons"></i> About us</a></li>
                                        <li><a href="404.html"><i class="icon-close icons"></i> 404 Not Found</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-list.html"><i class="icon-list icons"></i> Blog List</a></li>
                                        <li><a href="blog-grid.html"><i class="icon-grid icons"></i> Blog Grid</a></li>
                                        <li><a href="blog-article.html"><i class="icon-book-open icons"></i> Article Page</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="contact.html">Contact</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">Purchase</a></li> --}}
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav> 
                </div>
            </div>
        </div>
    </div>



        @yield("contents")


 
    <!-- FOOTER -->
    <footer class="footer">
        <div class="row footer-top animateIn" data-animate="fadeIn">
            <div class="container">
                <div class="high-padding row">
                    <div class="widget widget_text col-md-6">
                        <a href="#" class="footer-logo">
                            <img src="{{ asset('ccm/img/theme_logo_light.png') }}" alt="" />
                        </a>
                        <div class="spacer_10"></div>

                        <p>Church HTML lectus vitae convallis. Ut ipsum enim, consectetur at lobortis at, sagittis vel nisl. Nam non maximus elit, at sollicitudin mi. Donec ut tortor varius, feugiat ante venenatis, efficitur mauris. </p>
                        <p>Sagittis vel nisl. Nam non maximus elit, at sollicitudin mi. Donec ut tortor varius, feugiat ante venenatis, efficitur mauris. </p>
                        <div class="spacer_15"></div>

                        <!-- SOCIAL LINKS -->
                        <aside class="widget widget_social_links">
                            <div class="social_links">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-stumbleupon"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                        </aside>
                    </div>
                    <div class="widget widget_nav_menu col-md-3">
                        <h3 class="widget-title">Faith In Humanity</h3>
                        <img src="{{ asset('ccm/img/Elements/footer_element.jpg') }}" alt="" />
                    </div>
                    <div class="widget widget_nav_menu col-md-3">
                        <h3 class="widget-title row">Recent Posts</h3>
                        <ul class="widget_blog_posts row">
                            <li>
                                <div class="col-md-3 no_gap post-thumbnail relative">
                                    <a href="#">
                                        <img alt="" class="img-rounded" src="{{ asset('ccm/img/content/fundraising_activism_33-70x70.jpg') }}">
                                    </a>
                                </div>
                                <div class="col-md-9 post-details">
                                    <a href="#">New Education During National LMS Day</a>
                                    <div class="clearfix"></div>
                                    <span class="post-date">July 18, 2017</span>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-3 no_gap post-thumbnail relative">
                                    <a href="#">
                                        <img alt="" class="img-rounded" src="{{ asset('ccm/img/content/fundraising_activism_11-70x70.jpg') }}">
                                    </a>
                                </div>
                                <div class="col-md-9 post-details">
                                    <a href="#">Stitching Together A New Life</a>
                                    <div class="clearfix"></div>
                                    <span class="post-date">July 18, 2017</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom">
            <a class="back-to-top-btn" href="#body">
                <i class="fa fa-angle-up"></i>      
            </a>
            <div class="container">
                <div class="row animateIn" data-animate="fadeIn">
                    <div class="copyright-informations text-left col-md-6">
                        Made with <i class="icon-heart fa faa-tada faa-fast animated"></i> in Europe by ThemeSLR
                    </div>
                    <div class="text-right col-md-6">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="#">Contact</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Donations</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Purchase</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- Begin: JS Scripts -->
    <script src="{{ asset('ccm/js/jquery.min.js') }}"></script>
    <script src="{{ asset('ccm/js/plugins.js') }}"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAl-EDTJ5_uU3zBIX7-wNTu-qSZr1DO5Dw'></script>
    <script src="{{ asset('ccm/js/gmaps-v3.js') }}"></script>
    <script src="{{ asset('ccm/js/custom.js') }}"></script>
	<!-- End: JS Scripts -->
</body>
</html>