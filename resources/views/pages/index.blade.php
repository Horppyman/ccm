@extends('components.app')
    @section('contents')


    <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

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

                <img src="{{ asset('ccm/img/header-banners/holyspirit_sider_001_ok.jpg') }}" alt=""  class="slide-image"/>
                <!-- <div class="bs-slider-overlay"></div> -->

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left slide_style_top15">
                            <div class="col-md-6">
                                <h1 data-animation="animated fadeIn">Faith. Hope.<br />&amp; Love</h1>
                                <p data-animation="animated fadeIn">Love is patient, love is kind. It does not<br />envy,it does not boast, it is not proud. </p>
                                <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeIn">Listen Sermons</a>
                                <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeIn">Give Donation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Second Slide -->
            <div class="item">
                <!-- Slide Background -->
                <img src="{{ asset('ccm/img/header-banners/holyspirit_sider_002_ok.jpg') }}" alt=""  class="slide-image"/>
                <!-- <div class="bs-slider-overlay"></div> -->

                <!-- Slide Text Layer -->
                <div class="slide-text slide_style_right slide_style_top15">
                    <div class="col-md-6 col-md-offset-6">
                        <h1 data-animation="animated fadeIn">Life is Fragile<br />Handle With<br />Prayer</h1>
                        <p data-animation="animated fadeIn">Love is patient, love is kind. It does not envy,<br /> it does not boast, it is not proud.</p>
                        <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeIn">Prayers List</a>
                        <a href="#" target="_blank" class="btn btn-primary" data-animation="animated fadeIn">Give Donation</a>
                    </div>
                </div>
            </div>
            <!-- End of Slide -->

            <!-- Third Slide -->
            <div class="item">

                <img src="{{ asset('ccm/img/header-banners/holyspirit_sider_003_ok.jpg') }}" alt=""  class="slide-image"/>
                <!-- <div class="bs-slider-overlay"></div> -->

                <div class="container">
                    <div class="row">
                        <!-- Slide Text Layer -->
                        <div class="slide-text slide_style_left slide_style_top15">
                            <div class="col-md-6">
                                <h1 data-animation="animated fadeIn">With God As<br />Shepherd...</h1>
                                <p data-animation="animated fadeIn">With God as shepherd, you are truly<br />cared for, in every way!</p>
                                <a href="#" target="_blank" class="btn btn-default" data-animation="animated fadeIn">Listen Sermons</a>
                                <a href="#" target="_blank"  class="btn btn-primary" data-animation="animated fadeIn">Give Donation</a>
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
        <section class="high-padding section-bg" data-image-src="{{ asset('ccm/img/header-banners/overlay_MEMBERS-min.png') }}">
            <div class="container">
                <!-- TITLE + SUBTITLE section -->
                <div class="relative section-header"> 
                    <h2 class="section-title">You Are Here! You are Blessed!</h2>
                    <p>Sermons are now made easy using Church HTML Template! Share the news and press releases to your focus group and complete causes using donations.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="spacer_10"></div>
                        <h2>Our Verses For God</h2>
                        <p><strong>11:</strong> "For I know the plans I have for you," declares the LORD, "plans to prosper you and not to harm you, plans to give you hope and a future."</p>
                        <p><strong>14:</strong> "I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD"</p>
                        <p><strong>17:</strong> "Yes, this is what the LORD Almighty says: "I will send the sword, famine and plague against them and I will make them like figs that are so bad they cannot be eaten."</p>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QyvavfIGyLs?rel=0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION: GET INVOLVED -->
        <section class="section-bg" data-image-src="{{ asset('ccm/img/header-banners/holyspirit_wordpress_theme_themeslr-10.jpg') }}">
            <!-- HEADER CONTENT -->
            <div class="amaezi_header_content light-texts">
                <h3 class="amaezi_header_title">Get Involved</h1>
                <div class="spacer_30"></div>
                <p class="amaezi_header_subtitle">"For I know the plans I have for you," declares the LORD, "plans to prosper you and not to harm you, plans to give you hope and a future."</p>
                <p class="amaezi_header_subtitle">"I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD"</p>
                <p class="amaezi_header_subtitle">"Yes, this is what the LORD Almighty says: "I will send the sword, famine and plague against them and I will make them like figs that are so bad they cannot be eaten."</p>
                <div class="spacer_30"></div>
                <a class="btn tslr-btn btn-primary" href="#">CONTRIBUTE TODAY</a>
            </div>
        </section>


        <!-- SECTION: OUR SERVICES -->
        <section class="high-padding gray-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- SERVICES SHORTCODE -->
                        <div class="row services-shortcode">
                            
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="{{ asset('ccm/img/content/our-church.jpg') }}" alt="" class="img-rounded" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-left"><strong>Modern Church</strong></h3>
                                        <p class="text-left">Nullam non efficitur purus. Sed vitae lorem vel arcu imperdiet ullamcorper. Ut quis odio est. In vestibulum dignissim nisl.</p>
                                    </div>
                                </div>

                                <div class="spacer_20"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-left"><strong>Sunday Liturgies</strong></h3>
                                        <p class="text-left">Nullam non efficitur purus. Sed vitae lorem vel arcu imperdiet ullamcorper. Ut quis odio est. In vestibulum dignissim nisl.</p>
                                    </div>
                                </div>
                                <div class="spacer_20"></div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-left"><strong>Daily Sermons</strong></h3>
                                        <p class="text-left">Nullam non efficitur purus. Sed vitae lorem vel arcu imperdiet ullamcorper. Ut quis odio est. In vestibulum dignissim nisl.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION: TESTIMONIALS -->
        <section class="high-padding white-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- TITLE + SUBTITLE section -->
                        <div class="relative section-header text-center animateIn" data-animate="fadeIn"> 
                            <h2 class="section-title">Contributor's Testimonials</h2>
                            <p>Testimonials are always a good source of quality infos.</p>
                        </div>
                        <!-- Testimonials -->
                        <div>
                            <div class="testimonials_slider owl-carousel owl-theme animateIn" data-animate="fadeIn">
                                <div class="item">
                                    <div class="testimonial-content">
                                        <h4>
                                            <img src="{{ asset('ccm/img/testimonials/1-wide.jpg') }}" alt="" />
                                            <span class="testimonial-author">Jacob Luiz</span> <span class="testimonial-job">- Gold Donor</span>
                                        </h4>
                                        <p>When faith and hope fail, as they do sometimes, we must try charity, which is love in action. We must speculate no more on our duty, but simply do it. When we have done it, however blindly, perhaps Heaven will show us why.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <h4>
                                            <img src="{{ asset('ccm/img/testimonials/2.jpg') }}" alt="" />
                                            <span class="testimonial-author">Jacob Luiz</span> <span class="testimonial-job">- Platinum Donor</span>
                                        </h4>
                                        <p>When faith and hope fail, as they do sometimes, we must try charity, which is love in action. We must speculate no more on our duty, but simply do it. When we have done it, however blindly, perhaps Heaven will show us why.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <h4>
                                            <img src="{{ asset('cmm/img/testimonials/3.jpg') }}" alt="" />
                                            <span class="testimonial-author">Jacob Luiz</span> <span class="testimonial-job">- Diamond Donor</span>
                                        </h4>
                                        <p>When faith and hope fail, as they do sometimes, we must try charity, which is love in action. We must speculate no more on our duty, but simply do it. When we have done it, however blindly, perhaps Heaven will show us why.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <h4>
                                            <img src="{{ asset('ccm/img/testimonials/2.jpg') }}" alt="" />
                                            <span class="testimonial-author">Jacob Luiz</span> <span class="testimonial-job">- Starter Donor</span>
                                        </h4>
                                        <p>When faith and hope fail, as they do sometimes, we must try charity, which is love in action. We must speculate no more on our duty, but simply do it. When we have done it, however blindly, perhaps Heaven will show us why.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <h4>
                                            <img src="{{ asset('ccm/img/testimonials/3.jpg') }}" alt="" />
                                            <span class="testimonial-author">Jacob Luiz</span> <span class="testimonial-job">- Charity Donor</span>
                                        </h4>
                                        <p>When faith and hope fail, as they do sometimes, we must try charity, which is love in action. We must speculate no more on our duty, but simply do it. When we have done it, however blindly, perhaps Heaven will show us why.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="high-padding gray-section section-bg" data-image-src="{{ asset('ccm/img/header-banners/semitransparent_blog-min.png') }}">
            <div class="container">
                <!-- TITLE + SUBTITLE section -->
                <div class="relative section-header animateIn" data-animate="fadeIn"> 
                    <h2 class="section-title">From The Blog</span></h2>
                    <p>Blogging is now made easy using Church HTML Template! Share the news and press<br /> releases to your focus group and complete charity causes using donations.</p>
                </div>
                <!-- Blog posts section -->
                <div class="items-wrap blog_posts_list blog-posts-shortcode">
                    <div class="posts-list grid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="single-post clearfix animateIn" data-animate="fadeIn">
                                        <div class="col-md-12 post-thumbnail">
                                            <figure class="effect-lexi">
                                                <img src="{{ asset('ccm/img/content/blogpost_01.jpg') }}" alt=""/>
                                                <figcaption>
                                                    <i class="icon-arrow-right-circle"></i>
                                                </figcaption>           
                                            </figure>
                                        </div>
                                        <div class="col-md-12 post-details">
                                            <div class="post-details-holder">
                                                <h3 class="post-title text-center"><a href="blog-article.html">The Priest is Sent by God for You</a></h3>
                                                <div class="more-post-details text-center">
                                                    <a class="more-link" href="blog-article.html"><i class="icon-user"></i> Pope Franciss</a>
                                                    <a class="more-link" href="blog-article.html"><i class="icon-clock"></i> 12/01/2017</a>
                                                </div>
                                                <p class="post-excerpt text-center">Nam auctor id nisi ut tempus. Aenean pulvinar ex sit amet dolor euismod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="single-post clearfix animateIn" data-animate="fadeIn">
                                        <div class="col-md-12 post-thumbnail">
                                            <figure class="effect-lexi">
                                                <img src="{{ asset('ccm/img/content/blogpost_02.jpg') }}" alt=""/>
                                                <figcaption>
                                                    <i class="icon-arrow-right-circle"></i>
                                                </figcaption>           
                                            </figure>
                                        </div>
                                        <div class="col-md-12 post-details">
                                            <div class="post-details-holder">
                                                <h3 class="post-title text-center"><a href="blog-article.html">Jesus = Faith in Humanity = Love</a></h3>
                                                <div class="more-post-details text-center">
                                                    <a class="more-link" href="blog-article.html"><i class="icon-user"></i> Pope Franciss</a>
                                                    <a class="more-link" href="blog-article.html"><i class="icon-clock"></i> 12/01/2017</a>
                                                </div>
                                                <p class="post-excerpt text-center">Nam auctor id nisi ut tempus. Aenean pulvinar ex sit amet dolor euismod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="single-post clearfix animateIn" data-animate="fadeIn">
                                        <div class="col-md-12 post-thumbnail">
                                            <figure class="effect-lexi">
                                                <img src="{{ asset('ccm/img/content/blogpost_03.jpg') }}" alt=""/>
                                                <figcaption>
                                                    <i class="icon-arrow-right-circle"></i>
                                                </figcaption>           
                                            </figure>
                                        </div>
                                        <div class="col-md-12 post-details">
                                            <div class="post-details-holder">
                                                <h3 class="post-title text-center"><a href="blog-article.html">Leviticus 14:12: Take the one male lamb</a></h3>
                                                <div class="more-post-details text-center">
                                                    <a class="more-link" href="blog-article.html"><i class="icon-user"></i> Pope Franciss</a>
                                                    <a class="more-link" href="blog-article.html"><i class="icon-clock"></i> 12/01/2017</a>
                                                </div>
                                                <p class="post-excerpt text-center">Nam auctor id nisi ut tempus. Aenean pulvinar ex sit amet dolor euismod.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                        </div>
                    </div>
                </div>    
            </div>
        </section>


        <section class="high-padding white-section section-bg" data-image-src="{{ asset('ccm/img/header-banners/overlay_MEMBERS-min.png') }}">
            <div class="container">
                <!-- TITLE + SUBTITLE section -->
                <div class="relative section-header animateIn" data-animate="fadeIn"> 
                    <h2 class="section-title">Our Church Members</h2>
                    <p>Volunteering is now made easy using Church HTML Template! Share the news and press releases<br /> to your focus group and complete charity causes using donations.</p>
                </div>
                <!-- Blog posts section -->
                <div class="items-wrap blog_posts_list blog-posts-shortcode">
                    <div class="posts-list grid">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <img src="{{ asset('ccm/img/members/member_05-1.jpg') }}" class="img-circle width_80" alt="" />
                                    <div class="team-member-text text-center width_90">
                                        <h3 class="team-member-title">John Marcus</h3>
                                        <div class="team-member-position">The Priest</div>
                                        <p class="team-member-details">Duis vel nibh at velit scelerisque suscipit. Curabitur blandit mollis lacus. Proin viverra</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <img src="{{ asset('ccm/img/members/member_05-3.jpg') }}" class="img-circle width_80" alt="" />
                                    <div class="team-member-text text-center width_90">
                                        <h3 class="team-member-title">Maria Herrzi</h3>
                                        <div class="team-member-position">The Priestess</div>
                                        <p class="team-member-details">Duis vel nibh at velit scelerisque suscipit. Curabitur blandit mollis lacus. Proin viverra</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <img src="img/members/member_05-4.jpg" class="img-circle width_80" alt="" />
                                    <div class="team-member-text text-center width_90">
                                        <h3 class="team-member-title">Derek &amp; Maria</h3>
                                        <div class="team-member-position">Youngest Members</div>
                                        <p class="team-member-details">Duis vel nibh at velit scelerisque suscipit. Curabitur blandit mollis lacus. Proin viverra</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <img src="img/members/member_05-6.jpg" class="img-circle width_80" alt="" />
                                    <div class="team-member-text text-center width_90">
                                        <h3 class="team-member-title">Lois Defoa</h3>
                                        <div class="team-member-position">Teenagers Assistant</div>
                                        <p class="team-member-details">Duis vel nibh at velit scelerisque suscipit. Curabitur blandit mollis lacus. Proin viverra</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>    
            </div>
        </section>


        <!-- SECTION: OUR WORK -->
        <section class="section-bg" data-image-src="img/header-banners/holyspirit_wordpress_theme_themeslr-41.jpg">

            <!-- HEADER CONTENT -->
            <div class="amaezi_header_content">
                <h3 class="amaezi_header_title">Psalms, Verses &amp; Ministries</h1>
                <div class="spacer_10"></div>
                <p class="amaezi_header_subtitle">Achievements are now made easy using Church HTML Template! Share the news and press releases to your focus group and complete causes using donations.</p>
                <div class="spacer_50"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse-accordion-1">1 Chronicles 16:11</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-accordion-1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p><strong>11: </strong>"For I know the plans I have for you," declares the LORD, "plans to prosper you and not to harm you, plans to give you hope and a future."</p>
                                            <p><strong>14: </strong>"I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD, "and will bring you back to the place from which I carried you into exile."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-accordion-2">John 3:16</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-accordion-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><strong>11: </strong>"For I know the plans I have for you," declares the LORD, "plans to prosper you and not to harm you, plans to give you hope and a future."</p>
                                            <p><strong>14: </strong>"I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD, "and will bring you back to the place from which I carried you into exile."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-accordion-3">Luke 6:31</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-accordion-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><strong>11: </strong>"For I know the plans I have for you," declares the LORD, "plans to prosper you and not to harm you, plans to give you hope and a future."</p>
                                            <p><strong>14: </strong>"I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD, "and will bring you back to the place from which I carried you into exile."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-accordion-4">Matthew 5:14</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-accordion-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><strong>11: </strong>"For I know the plans I have for you," declares the LORD, "plans to prosper you and not to harm you, plans to give you hope and a future."</p>
                                            <p><strong>14: </strong>"I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD, "and will bring you back to the place from which I carried you into exile."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-accordion-5">Proverbs 3:5</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-accordion-5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><strong>11: </strong>"For I know the plans I have for you," declares the LORD, "plans to prosper you and not to harm you, plans to give you hope and a future."</p>
                                            <p><strong>14: </strong>"I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD, "and will bring you back to the place from which I carried you into exile."</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-accordion-6">Psalm 119:105</a>
                                        </h4>
                                    </div>
                                    <div id="collapse-accordion-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p><strong>14: </strong>"I will be found by you," declares the LORD, "and will bring you back from captivity. I will gather you from all the nations and places where I have banished you," declares the LORD, "and will bring you back to the place from which I carried you into exile."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- STARTING TABS -->
                        <div class="tabs tabs-style-flip col-md-7">
                            <nav>
                                <ul>
                                    <li><a href="#section-tab-1"><i class="icon-heart icons"></i> <span>Donate</span></a></li>
                                    <li><a href="#section-tab-2"><i class="icon-calendar icons"></i> <span>Events</span></a></li>
                                    <li><a href="#section-tab-3"><i class="icon-list icons"></i> <span>Shop Goodies</span></a></li>
                                </ul>
                            </nav>
                            <div class="content-wrap">
                                <section id="section-tab-1">
                                    <h3><strong>Join the Church. Be Unite!</strong></h3>
                                    <p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Fusce fermentum odio nec arcu integer tincidunt cras ultricies sem orci lectus</p>
                                    <p>Aliquam ut, faucibus non, aliquam ut, faucibus non faucibus non, euismod id, nulla. Fusce fermentum odio</p>
                                    <div class="spacer_10"></div>
                                    <img src="img/gallery/3.jpg" alt="" />
                                </section>
                                <section id="section-tab-2">
                                    <h3><strong>19th of June - Church Sermons</strong></h3>
                                    <p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Fusce fermentum odio nec arcu integer tincidunt cras ultricies sem orci lectus, aliquam ut, faucibus non, aliquam ut.</p>
                                    <h3><strong>1rd of September - Ministries</strong></h3>
                                    <p>Cras ultricies sem orci lectus, aliquam ut, faucibus non, aliquam ut onec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Fusce fermentum odio nec arcu integer tincidunt.</p>
                                    <div class="spacer_10"></div>
                                    <img src="img/gallery/1.jpg" alt="" />
                                </section>
                                <section id="section-tab-3">
                                    <h3><strong>Shop Goodies from our Boutique!</strong></h3>
                                    <p>Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Fusce fermentum odio nec arcu integer tincidunt cras ultricies sem orci lectus, aliquam ut, faucibus non, aliquam ut, faucibus non faucibus non, euismod id, nulla.</p>
                                    <div class="spacer_10"></div>
                                    <img src="img/gallery/5-wide.jpg" alt="" />
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SECTION: INSTAGRAM FEED -->
        <section>
            <div id="tslr_instagram_feed" class="tslr_instagram_feed row">
                <div class="item col-md-2 no_gap">
                    <div class="instagram_group">
                        <a target="_blank" href="#">
                            <div class="instagram_overlay">
                                <i class="icon-social-instagram icons"></i>
                            </div>
                            <img alt="" src="img/instagram-feed/insta_01.jpg">
                        </a>
                    </div>
                </div>
                <div class="item col-md-2 no_gap">
                    <div class="instagram_group">
                        <a target="_blank" href="#">
                            <div class="instagram_overlay">
                                <i class="icon-social-instagram icons"></i>
                            </div>
                            <img alt="" src="img/instagram-feed/insta_02.jpg">
                        </a>
                    </div>
                </div>
                <div class="item col-md-2 no_gap">
                    <div class="instagram_group">
                        <a target="_blank" href="#">
                            <div class="instagram_overlay">
                                <i class="icon-social-instagram icons"></i>
                            </div>
                            <img alt="" src="img/instagram-feed/insta_03.jpg">
                        </a>
                    </div>
                </div>
                <div class="item col-md-2 no_gap">
                    <div class="instagram_group">
                        <a target="_blank" href="#">
                            <div class="instagram_overlay">
                                <i class="icon-social-instagram icons"></i>
                            </div>
                            <img alt="" src="img/instagram-feed/insta_04.jpg">
                        </a>
                    </div>
                </div>
                <div class="item col-md-2 no_gap">
                    <div class="instagram_group">
                        <a target="_blank" href="#">
                            <div class="instagram_overlay">
                                <i class="icon-social-instagram icons"></i>
                            </div>
                            <img alt="" src="img/instagram-feed/insta_05.jpg">
                        </a>
                    </div>
                </div>
                <div class="item col-md-2 no_gap">
                    <div class="instagram_group">
                        <a target="_blank" href="#">
                            <div class="instagram_overlay">
                                <i class="icon-social-instagram icons"></i>
                            </div>
                            <img alt="" src="img/instagram-feed/insta_06.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @endsection