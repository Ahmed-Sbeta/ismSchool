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

		<title>I.S.M International School</title>

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


                                    <li class="nav-item">
                                        <a href="//gallery" class="nav-link active">
                                            Gallery
                                        </a>

                                    </li>


                                <li class="nav-item">
                                    <a href="/blog" class="nav-link">
                                        News

                                    </a>

                                </li>
                                <li class="nav-item">
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
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <!-- <a href="Registration.html" class="default-btn">Registration</a> -->
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Start Page Banner -->
        <div class="page-banner-area" style="background-image:url(assets/img/slider58.png);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Gallery</h2>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Gallery Area -->
        <div class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                  @foreach($images as $image)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery-box">
                            <img src="{{asset(Storage::url($image->image))}}" style="width:650px; height:250px;" alt="image">

                            <a href="{{asset(Storage::url($image->image))}}" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- End Gallery Area -->


        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget">

                                <h2>
                                    <!-- <a href="index.html">I.S.M</a> -->
                                    <img src="{{asset('assets/img/logo-footer.png')}}" alt="image" style="padding-top: 100px;">

                                </h2>


                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="single-footer-widget">

                             <h2>
                                <a href="index.html" style="color: white;">I.S.M</a>
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
                        Copyright ?? 2022. All Rights Reserved by
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
