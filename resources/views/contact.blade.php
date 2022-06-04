<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <!-- Imagelightbox CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/imagelightbox.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        <link rel="stylesheet" href="{{asset('assets/css/flag-icon.css')}}">

		<title>I.S.M International School </title>

        <link rel="icon" type="image/png" href="{{asset('assets/img/logo-high-smaller.png')}}">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="loader">
                <div class="wrapper">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-1a"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('assets/img/logo1.png')}}" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('assets/img/logo1.png')}}" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        Home

                                    </a>

                                </li>

                                <li class="nav-item">
                                    <a href="/about" class="nav-link">
                                        About
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="/Admissions" class="nav-link active">
                                        Admissions
                                    </a>

                                </li> -->



                                <li class="nav-item">
                                    <a href="/blog" class="nav-link">
                                        News

                                    </a>

                                </li>

                                <li class="nav-item active">
                                    <a href="/contact" class="nav-link">
                                        Contact
                                    </a>
                                </li>


                            </ul>

                            @if($registration->status == "on")
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="/Registration" class="default-btn">Registration</a>
                                </div>
                            </div>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="/contact" class="default-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Page Banner -->
        <div class="page-banner-area" >
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="contact-form">
                            <h3>Ready to Get Started?</h3>

                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subjects" id="subjects" class="form-control" required data-error="Please enter your subjects" placeholder="Subjects">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="contact-information">
                            <h3>Here to Help</h3>

                            <ul class="contact-list">
                                <li><i class='bx bx-map'></i> Location: <span>Hay-Alandalus| Janzur |Gurgi, Libya, Tripoli</span></li>
                                <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+01321654214">+218916687834</a> </li>
                                <li><i class='bx bx-envelope'></i> Email Us: <a href="mailto:info@ismschool.com">info@ismschool.com</a></li>
                                <li><i class='bx bx-microphone'></i> Fax: <a href="tel:+218214773402">+218214773402</a></li>
                            </ul>

                            <h3>Our Branch:</h3>
                            <ul >
                                <li><span>Hay-Alandalus Branch :</span>academic@ismschool.com</li>
                                <li><span>Janzur Branch :</span> principal@janzur.ism.ly</li>
                                <li><span>Gurgi Branch :</span> academic@gurgi.ism.ly</li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <!-- Map -->
        <div id="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.125120942048!2d13.128506585333357!3d32.86840878662808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a8ec5794e84119%3A0x1d6c98cd4a968fe5!2z2YXYr9ix2LPYqSDYp9mE2LTZh9iv2KfYoSDYp9mE2LnYp9mE2YXZitip!5e0!3m2!1sar!2sly!4v1643048820067!5m2!1sar!2sly" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- End Map -->

        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget">

                                <h2>
                                    <!-- <a href="index.html">I.S.M</a> -->
                                    <img src="assets/img/logo-footer.png" alt="image" style="padding-top: 100px;">

                                </h2>


                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget">

                             <h2>
                                <a href="/" style="color: white;">I.S.M</a>
                            </h2>
                            <p>ISM International School first opened in 1954 as the Oil Companies
                                School, a school for the children of oil company executives and
                                diplomats posted to Libya. ISM is the oldest international school in
                                North Africa and has successfully graduated every class since 1960.</p>

                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contact Us</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>Phone</span>
                                    <a href="tel:+218916687834">+218916687834</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Email</span>
                                    <a href="mailto:info@ismschool.com">info@ismschool.com</a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Address</span>
                                    Hay-Alandalus| Janzur |Gurgi, Tripoli, Libya
                                </li>

                                     <!-- <li>
                                        <a href="https://www.facebook.com/Ismschools/" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li> -->

                                    <svg  xmlns="facebook" style="color: rgb(255, 255, 255);" width="60" height="60" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" >
                                        <a href="https://www.facebook.com/Ismschools/" target="_blank" >
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>

                                    </svg>
                                </a>
                            </ul>
                        </div>
                    </div>

                    </div>


                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        Copyright © 2022. All Rights Reserved by
                        <a  href="https://mawja.ly/" target="_blank">
                            <img src="assets/img/logotitle1.png">
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Jquery Slim JS -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Imagelightbox JS -->
		<script src="{{asset('assets/js/imagelightbox.min.js')}}"></script>
        <!-- Odometer JS -->
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <!-- Jquery Appear JS -->
        <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
        <!-- Ajaxchimp JS -->
		<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
		<!-- Form Validator JS -->
		<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        <!-- Custom JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
