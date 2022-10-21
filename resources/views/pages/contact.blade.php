@extends('components.app')
@section('contents')

  <!-- HEADER -->
  <header class="amaezi-fullscreen-header section-bg" data-image-src="{{ asset('ccm/img/gallery/6.jpg') }}">

    <!-- HEADER OVERLAY -->
    <div class="amaezi-header-overlay"></div>

    <!-- HEADER CONTENT -->
    <div class="amaezi_header_content">
        <h1 class="amaezi_header_title">Visit Us</h1>
        <h3 class="amaezi_header_subtitle">Worship with us at CCM</h3>
    </div>
</header>


<!-- MAIN CONTAINER -->
<div id="container" class="main-content">
    <!-- Page content -->
    <div class="container high-padding">
        <div class="row">
            <div class="col-md-12 main-container">
                <!-- Post content -->
                <div class="post-content animateIn" data-animate="fadeIn">

                    <!-- TITLE + SUBTITLE section -->
                    <div class="relative section-header"> 
                        <h2 class="section-title">Join Us For Any of Our Services</h2>
                        <p>We are located at No. 4, Power Line Avenue, Off General Hospital Road, Fugar, Edo State.</p>
                    </div>

                    <form method="POST" action="php/contact_form.php" class="row make-reservation submit-contact animateIn" data-animate="fadeIn">
                        <div class="col-md-6">
                            <div class="contact-section">
                                <div id="google-map"></div>
                                <div id="cd-zoom-in"></div>
                                <div id="cd-zoom-out"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="contactName" type="text" placeholder="Full Name" name="contactName" />
                                </div>
                                <div class="col-md-12">
                                    <input id="contactEmail" type="text" placeholder="Email" name="contactEmail" />
                                </div>
                                <div class="col-md-6">
                                    <input id="contactPhone" type="text" placeholder="Phone" name="contactPhone" />
                                </div>
                                <div class="col-md-12">
                                    <input id="message" type="text" placeholder="Your Message" name="message" />
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit_contact" class="btn btn-danger fullwidth btn-lg unbordered right-side">Say Hello <i class="icon-cursor"></i></button>
                                </div>
                                <p class="success-message">Thank you for contacting us! We will get back to you soon!</p>
                            </div>  
                        </div>
                    </form>

                    <br>
                    <br>
                    <div class="relative section-header"> 
                        <h2 class="section-title">Or Call Us on:</h2>
                        <p><a href="tel:+2348056857790">+2348056857790</a>, or <a href="tel:+2347083061945">+2347083061945</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection