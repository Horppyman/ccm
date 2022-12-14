@extends('components.app')
    @section('contents')

    <style>
        .iframe-container {
            padding-bottom: 60%;
            padding-top: 30px; height: 0; overflow: hidden;
        }

        .iframe-container iframe,
        .iframe-container object,
        .iframe-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
 <!-- HEADER -->
 <header class="amaezi-fullscreen-header breadcrumbs section-bg" data-image-src="{{ asset('ccm/img/gallery/6.jpg') }}">

    <!-- HEADER OVERLAY -->
    <div class="amaezi-header-overlay"></div>


    <!-- HEADER CONTENT -->
    <div class="amaezi_header_content">
        <h1 class="amaezi_header_title">Our Books and Publications</h1>
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
                                @forelse ( $books as $book )

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="single-post clearfix animateIn" data-animate="fadeIn">
                                            <div class="col-md-12 post-details">
                                                <div class="post-details-holder">
                                                    <h3 class="post-title text-center">{{$book->title}}</h3>


                                                        <a class="btn btn-primary view-pdf" href="{{asset('Books/'.$book->file)}}">View PDF</a>


                                                    <div class="more-post-details text-center">
                                                        <a class="more-link" href="">
                                                            <i class="icon-user"></i> {{$book->author}}
                                                        </a>
                                                        <a class="more-link" href="">
                                                            <i class="icon-clock"></i>
                                                            {{$book->created_at->toDateTimeString()}}
                                                        </a>
                                                    </div>
                                                    <p class="post-excerpt text-center">{{$book->description}}</p>

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


                <!-- Widget: Categories -->
                <aside class="widget widget_categories animateIn" data-animate="fadeIn">
                    <h3 class="widget-title">Categories</h3>
                    <ul class="">
                        @forelse ($categories as $category)
                        <li class="cat-item">
                            <a href="#">{{$category->category_name}} ({{$category->Sermons->count()}})</a>
                        </li>
                        @empty

                        @endforelse
                    </ul>
                </aside>

            </div>
        </div>
    </div>
</div>
        <script>
            /*
            * This is the plugin
            */
            (function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

            /*
            * Here is how you use it
            */
            $(function(){
                $('.view-pdf').on('click',function(){
                    var pdf_link = $(this).attr('href');
                    var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
                    $.createModal({
                    title:'My Title',
                    message: iframe,
                    closeButton:true,
                    scrollable:false
                    });
                    return false;
                });
            })
        </script>
    @endsection
