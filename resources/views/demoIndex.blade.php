<!DOCTYPE html>
<html lang="en">

<head>

    @include('partials.head', ['title' => 'Hiusmaa'])

</head>

<body id="page-top" class="index">

<!-- Navigation -->

@include('partials.nav')

<!-- Header !!EDIT FORM Title - Table!!-->


<header style="background-image: url('agency/img/barbershop.jpg')">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our Studio!</div>
            <div class="intro-heading">It's Nice To Meet You</div>
            <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>

<!-- Services / Prices Section -->

<section id="services" data-nav="menu-our-services" class="servicesPiece pagePiece tileBg js-slidePane">
    <div class="slideContent js-slideContent">
        <div class="textWrap bottomTextWrap row">
            <div class="wrap container">
                <div class="page-header">
                    <h1>
                        Our Services
                    </h1>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="singleService">
                            <h2 class="serviceHeader">Hair</h2>
                            <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Womens Haircut &amp; Style</span>
                                <span class="servicePrice serviceItemPiece">$67+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Mens Haircut</span><span class="servicePrice serviceItemPiece">$40+</span>
                            </div><div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Childrens Haircut (under 12)</span>
                                <span class="servicePrice serviceItemPiece">$37+</span>
                            </div><div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Blowdry/Style</span>
                                <span class="servicePrice serviceItemPiece">$40+</span></div>
                            <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Updo</span>
                                <span class="servicePrice serviceItemPiece">$65+</span>
                            </div>
                            <div class="serviceItem clearfix"><span class="serviceName serviceItemPiece">Extensions</span>
                                <span class="servicePrice serviceItemPiece">Consultation Required</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="singleService">
                            <h2 class="serviceHeader">Skincare</h2>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Facials</span>
                                <span class="servicePrice serviceItemPiece">$95+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Chemical Peels</span>
                                <span class="servicePrice serviceItemPiece">$80+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Skin Consultations</span>
                                <span class="servicePrice serviceItemPiece">$50+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Acne Treatments</span>
                                <span class="servicePrice serviceItemPiece">$75+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Eyelash Tint</span>
                                <span class="servicePrice serviceItemPiece">$35+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Eyebrow Tint</span>
                                <span class="servicePrice serviceItemPiece">$25+</span>
                            </div>
                            <span class="small">
                                For more information visit <a style="color: #96da6a; font-weight: 600;" href="http://liberationacneclinic.com/" target="_blank">Liberation Acne Clinic</a>
                            </span>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="singleService">
                            <h2 class="serviceHeader">Skincare</h2>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Facials</span>
                                <span class="servicePrice serviceItemPiece">$95+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Chemical Peels</span>
                                <span class="servicePrice serviceItemPiece">$80+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Skin Consultations</span>
                                <span class="servicePrice serviceItemPiece">$50+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Acne Treatments</span>
                                <span class="servicePrice serviceItemPiece">$75+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Eyelash Tint</span>
                                <span class="servicePrice serviceItemPiece">$35+</span>
                            </div>
                            <div class="serviceItem clearfix">
                                <span class="serviceName serviceItemPiece">Eyebrow Tint</span>
                                <span class="servicePrice serviceItemPiece">$25+</span>
                            </div>
                            <span class="small">
                                For more information visit <a style="color: #96da6a; font-weight: 600;" href="http://liberationacneclinic.com/" target="_blank">Liberation Acne Clinic</a>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="agency/img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Round Icons</h4>
                    <p class="text-muted">Graphic Design</p>
                </div>
            </div>

<!-- About Section -->


<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>


            <div class="col-sm-4">
                <div class="team-member">
                    <img src="agency/img/team/3.jpg" class="img-responsive img-circle" alt="">
                    <h4>Diana Pertersen</h4>
                    <p class="text-muted">Lead Developer</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->

{{--logo for products page--}}
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="agency/img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>

        </div>
    </div>
</aside>


<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2014</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="#">Privacy Policy</a>
                    </li>
                    <li><a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Project Name</h2>
                        <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <img class="img-responsive img-centered" src="agency/img/portfolio/roundicons-free.png" alt="">
                        <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                        <p>
                            <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                        <ul class="list-inline">
                            <li>Date: July 2014</li>
                            <li>Client: Round Icons</li>
                            <li>Category: Graphic Design</li>
                        </ul>
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="agency/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="agency/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="agency/js/classie.js"></script>
<script src="agency/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="agency/js/jqBootstrapValidation.js"></script>
<script src="agency/js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="agency/js/agency.js"></script>

</body>

</html>
