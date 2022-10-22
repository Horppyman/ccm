@extends('components.app')
    @section('contents')

 <!-- HEADER -->
 <header class="amaezi-fullscreen-header breadcrumbs section-bg" data-image-src="{{ asset('ccm/img/gallery/6.jpg') }}">

    <!-- HEADER OVERLAY -->
    <div class="amaezi-header-overlay"></div>

    <!-- Header Video -->
    <!-- <div class='youtube-video'></div>
    <a class="youtube-player" data-property="{videoURL:'Tl8E1DzJ0bo',containment:'.youtube-video',autoPlay:true, mute:true, startAt:0, opacity:1,ratio:'16/9',showControls:false,showYTLogo:false}"></a> -->

    <!-- HEADER CONTENT -->
    <div class="amaezi_header_content">
        <h1 class="amaezi_header_title">Our Sermons</h1>
    </div>
</header>


<!-- MAIN CONTAINER -->
<div id="container" class="main-content">
    <!-- Page content -->
    <div class="container high-padding">
        <div class="row">
            <div class="col-md-8 main-container">
                <!-- Post content -->
                <div class="post-content">
                    <!-- Blog posts section -->
                    <div class="items-wrap blog_posts_list blog-posts-shortcode">
                        <div class="posts-list grid">
                            <div class="row">
                                @forelse ( $sermons as $sermon )

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="single-post clearfix animateIn" data-animate="fadeIn">
                                            <div class="col-md-12 post-details">
                                                <div class="post-details-holder">
                                                    <h3 class="post-title text-center">{{$sermon->title}}</h3>

                                                    <audio controls muted style=" width:100%;">
                                                        <source src="{{asset('Audio/'.$sermon->file)}}" type="audio/ogg">

                                                    Your browser does not support the audio element.
                                                    </audio>
                                                    <div class="more-post-details text-center">
                                                        <a class="more-link" href="">
                                                            <i class="icon-user"></i> {{$sermon->preacher}}
                                                        </a>
                                                        <a class="more-link" href="">
                                                            <i class="icon-clock"></i>
                                                            {{$sermon->created_at->toDateTimeString()}}
                                                        </a>
                                                    </div>
                                                    <p class="post-excerpt text-center">{{$sermon->description}}</p>

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

            <div class="content-sidebar col-md-4">
                <!-- Widget: Search for posts -->
                <aside class="widget widget_search animateIn" data-animate="fadeIn">
                    <h3 class="widget-title">Search ...</h3>
                    <form method="get" class="search-form">
                        <label>
                            <input type="search" class="search-field form-control" placeholder="Search for posts" value="" name="s" title="Search for:">
                        </label>
                    </form>
                </aside>

                <!-- Widget: Tag Cloud -->
                <!-- <aside class="widget widget_tag_cloud animateIn" data-animate="fadeIn">
                    <h3 class="widget-title">Tag Cloud</h3>
                    <div class="tagcloud">
                        <a title="1 topic" href="#">church</a>
                        <a title="1 topic" href="#">ngo</a>
                        <a title="1 topic" href="#">nonprofit</a>
                        <a title="1 topic" href="#">sermons</a>
                        <a title="1 topic" href="#">ministries</a>
                        <a title="1 topic" href="#">sunday</a>
                        <a title="1 topic" href="#">bible</a>
                    </div>
                </aside> -->


                <aside class="widget widget_categories animateIn" data-animate="fadeIn">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="">
                        @forelse ($categories as $category)
                        <li class="cat-item">
                            <a href="#">{{$category->category_name}} ({{$category->Sermons->count()}})</a>
                        </li>
                        @empty

                        @endforelse

                        <!-- <li class="cat-item">
                            <a href="#">Charity (3)</a>
                        </li>
                        <li class="cat-item">
                            <a href="#">Fundraising (7)</a>
                        </li>
                        <li class="cat-item">
                            <a href="#">Events (7)</a>
                        </li> -->
                    </ul>
                </aside>

                <!-- Widget: Social Media Widget -->
                <aside class="widget widget_social_links animateIn" data-animate="fadeIn">
                    <h3 class="widget-title">Follow Me</h3>
                    <div class="social_links">
                        <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>


                        <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="LinkedIn">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Google+">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>







                    </div>
                </aside>


                <!-- Widget: Text widget -->
                <aside class="widget widget_text animateIn" data-animate="fadeIn">
                    <h3 class="widget-title">Text Widget</h3>
                    <div class="textwidget">Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.</div>
                </aside>




            </div>
        </div>
    </div>
</div>



    @endsection
