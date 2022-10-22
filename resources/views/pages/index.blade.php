@extends('components.app')
@section('contents')
    <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel"
        data-pause="hover" data-interval="false">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
            <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper For Slides -->
        <div class="carousel-inner" role="listbox">

            <!-- Third Slide -->
            <div class="item active">

                <img src="{{ asset('ccm/img/header-banners/header-1.jpg') }}" alt="" class="slide-image" />
                <!-- <div class="bs-slider-overlay"></div> -->

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left slide_style_top15">
                            <div class="col-md-6">
                                <h1 data-animation="animated fadeIn">Faith. Hope.<br />&amp; Love</h1>
                                <p data-animation="animated fadeIn">Love is patient, love is kind. It does not<br />envy,it
                                    does not boast, it is not proud. </p>
                                <a href="{{ route('page.sermons') }}" target="_blank" class="btn btn-default"
                                    data-animation="animated fadeIn">Listen To Sermons</a>
                                {{-- <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeIn">Give Donation</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="{{ asset('ccm/img/header-banners/prayer-2.jpg') }}" alt="" class="slide-image" />
                <!-- <div class="bs-slider-overlay"></div> -->

                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_right slide_style_top15">
                    <div class="col-md-6 col-md-offset-6">
                        <h1 data-animation="animated fadeIn">Life is Fragile<br />Handle With<br />Prayer</h1>
                        <p data-animation="animated fadeIn">Love is patient, love is kind. It does not envy,<br /> it does
                            not boast, it is not proud.</p>
                        <a href="{{ route('page.about') }}u}}" target="_blank" class="btn btn-default"
                            data-animation="animated fadeIn">Our Church Services</a>
                        {{-- <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeIn">Give Donation</a> --}}
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">

                <img src="{{ asset('ccm/img/header-banners/sheperd.jpg') }}" alt="" class="slide-image" />
                <!-- <div class="bs-slider-overlay"></div> -->

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left slide_style_top15">
                            <div class="col-md-6">
                                <h1 data-animation="animated fadeIn">With God As<br />Shepherd...</h1>
                                <p data-animation="animated fadeIn">With God as shepherd, you are truly<br />cared for, in
                                    every way!</p>
                                <a href="{{ route('page.contact') }}" target="_blank" class="btn btn-default"
                                    data-animation="animated fadeIn">Visit Us</a>
                                {{-- <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeIn">Give Donation</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->
        </div><!-- End of Wrapper For Slides -->

        <!-- Left Control -->
        <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div> <!-- End  bootstrap-touch-slider Slider -->



    <!-- MAIN CONTAINER -->
    <div id="container" class="main-content">

        <!-- SECTION: GOALS/ACHIEVEMENTS -->
        <section class="high-padding section-bg"
            data-image-src="{{ asset('ccm/img/header-banners/overlay_MEMBERS-min.png') }}">
            <div class="container">
                <!-- TITLE + SUBTITLE section -->
                <div class="relative section-header">
                    <h2 class="section-title">You Are Here! You are Blessed!</h2>
                    <p>Welcome to Christianity in Christ Ministry where the passion for spiritual relationship with God and
                        by extension with fellow humankind, which the Gospel of Jesus Christ is about has been a driving
                        force in my life which had been yearning for a greater fulfilment.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- SERVICES SHORTCODE -->
                        <div class="row services-shortcode">

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="{{ asset('ccm/img/bible-reading.png') }}" alt=""
                                            class="img-rounded" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-left"><strong>Our Slogan</strong></h3>
                                        <p class="text-left"><strong>C.C.M.</strong> - <q>We Live Christianity!</q></p>
                                        <p class="text-left"><strong>C.C.M.</strong> - <q>Restoring Dignity in
                                                Christianity!</q></p>
                                        <p class="text-left"><strong>C.C.M.</strong> - <q>Raising A Great Nation of God's
                                                People!</q> Jer(6:22).</p>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="text-left"><strong>Our Mandate</strong></h3>
                                        <p class="text-left"><strong>Ministry of Reconciliation</strong> - <q>To carry out
                                                the Proclamation and Fulfilment of the Gospel Ministry of Reconciliation and
                                                Building Believers’ Relationships of Life</q> (2 Cor. 5:18-20; John 13:35)
                                        </p>
                                    </div>
                                    <div class="col-md-12">
                                        <h3 class="text-left"><strong>Our Motto</strong></h3>
                                        <p class="text-left"><strong><q>WE ARE GETTING THERE</q></strong> (Genesis 12:5)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION: GET INVOLVED -->
        <section class="section-bg"
            data-image-src="{{ asset('ccm/img/miss-viss-back.jpg') }}">
            <!-- HEADER CONTENT -->
            <div class="amaezi_header_content light-texts">
                    <h3 class="amaezi_header_title">Vision Statement</h1>
                        <p class="amaezi_header_subtitle">THE FULFILMENT OF ZECHARIAH 8:23: "Thus saith the
                            LORD of hosts; In those days it shall come to pass, that ten men shall take hold out of all
                            languages of the nations, even shall take hold of the skirt of him that is a Jew, saying, We
                            will go with you: for we have heard that God is with you."</p>
                        <div class="spacer_30"></div>
                    <h3 class="amaezi_header_title">Mission Statement</h1>
                        <p class="amaezi_header_subtitle">To Preach the Gospel of Jesus Christ to the World by the Power of
                            the Holy Ghost in an Irresistible Practical and Convincing Manner for the Enthronement of Jesus
                            Christ in every Human Being to be Liberated and become a Living Testimony of Jesus Christ. (Luke
                            4:18-19; John 12:32)</p>
                        <div class="spacer_30"></div>
                        <a class="btn tslr-btn btn-primary" href="{{ route('page.about') }}">About Us</a>
            </div>
        </section>

        <section class="high-padding gray-section section-bg"
            data-image-src="{{ asset('ccm/img/header-banners/semitransparent_blog-min.png') }}">
            <div class="container">
                <!-- TITLE + SUBTITLE section -->
                <div class="relative section-header animateIn" data-animate="fadeIn">
                    <h2 class="section-title">Our Latest Sermons</span></h2>
                   
                </div>
                <!-- Blog posts section -->
                <div class="items-wrap blog_posts_list blog-posts-shortcode">
                    <div class="posts-list grid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    {{-- <div class="single-post clearfix animateIn" data-animate="fadeIn">
                                        <div class="col-md-12 post-thumbnail">
                                            <figure class="effect-lexi">
                                                <img src="{{ asset('ccm/img/content/blogpost_01.jpg') }}"
                                                    alt="" />
                                                <figcaption>
                                                    <i class="icon-arrow-right-circle"></i>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-md-12 post-details">
                                            <div class="post-details-holder">
                                                <h3 class="post-title text-center"><a href="blog-article.html">The Priest
                                                        is Sent by God for You</a></h3>
                                                <div class="more-post-details text-center">
                                                    <a class="more-link" href="blog-article.html"><i
                                                            class="icon-user"></i> Pope Franciss</a>
                                                    <a class="more-link" href="blog-article.html"><i
                                                            class="icon-clock"></i> 12/01/2017</a>
                                                </div>
                                                <p class="post-excerpt text-center">Nam auctor id nisi ut tempus. Aenean
                                                    pulvinar ex sit amet dolor euismod.</p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    @forelse ($sermons as $sermon)
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="single-post clearfix animateIn" data-animate="fadeIn">
                                                <div class="col-md-12 post-details">
                                                    <div class="post-details-holder">
                                                        <h3 class="post-title text-center">{{ $sermon->title }}</h3>

                                                        <audio controls muted style=" width:100%;">
                                                            <source src="{{ asset('Audio/' . $sermon->file) }}"
                                                                type="audio/ogg">

                                                            Your browser does not support the audio element.
                                                        </audio>
                                                        <div class="more-post-details text-center">
                                                            <a class="more-link" href="">
                                                                <i class="icon-user"></i> {{ $sermon->preacher }}
                                                            </a>
                                                            <a class="more-link" href="">
                                                                <i class="icon-clock"></i>
                                                                {{ $sermon->created_at->toDateTimeString() }}
                                                            </a>
                                                        </div>
                                                        <p class="post-excerpt text-center">{{ $sermon->description }}
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="spacer_30"></div>
                                @empty
                                @endforelse
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <br>
                <div class="relative section-header animateIn" data-animate="fadeIn">
                    <a class="btn tslr-btn btn-primary" href="{{ route('page.sermons') }}">View More</a>
                </div>
                
            </div>
        </section>

    </div>
@endsection
