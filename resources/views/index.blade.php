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
                            <a href="index.html">
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
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active">
                                        Home

                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="/about" class="nav-link">
                                        About
                                    </a>
                                </li>

                                <li class="nav-item">
                                        <a href="/gallery" class="nav-link">
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

        <!-- Start Main Banner Area -->

        <!-- End Main Banner Area -->

        <!-- Start Carousel Area -->
        <div id="myCarousel" class="carousel slide">

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('assets/img/slider55.png');"></div>
                    <div class="carousel-caption">
                         <h2 class="animated fadeInLeft" style="color: white;">I.S.M International School</h2>

                    </div>
                </div>

            </div>



        </div>

        <!-- End Carousel Area -->

        <!-- Start Who We Are Area -->
        <section class="who-we-are ptb-100">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <span>Who We Are</span>
                            <h3>I.S.M International School Of Martyrs</h3>
                            <p style="text-align: justify;">ISM International School first opened in 1954 as the Oil Companies
                                School, a school for the children of oil company executives and
                                diplomats posted to Libya. ISM is the oldest international school in
                                North Africa and has successfully graduated every class since 1960.</p>
                            <p style="text-align: justify;">ISM was modelled on an American high school and originally taught the
                                American curriculum. Over the years, ISM has taught the American,
                                Canadian and UK national curricula, depending on the needs of our
                                students.
                                </p>

                            <ul class="who-we-are-list">
                                <li>
                                    <span>1</span>
                                    Homelike Environment
                                </li>
                                <li>
                                    <span>2</span>
                                    Quality Educators
                                </li>
                                <li>
                                    <span>3</span>
                                    Safety and Security
                                </li>
                                <li>
                                    <span>4</span>
                                    Play to Learn
                                </li>
                            </ul>
                            <div class="who-we-are-btn">
                                <a href="/about" class="default-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="who-we-are-image">
                            <img src="{{asset('assets/img/who-we-are/pic100.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- End Who We Are Area -->



        <!-- Start Value Area -->
        <section class="value-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="who-we-are-image">
                            <img src="assets/img/pic102.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="value-item">
                            <div class="value-content">
                                <span>The Objectives</span>
                                <h3>Our Objectives :</h3>
                            </div>

                            <div class="value-inner-content">
                                <div class="number">
                                    <span>01</span>
                                </div>

                                <p style="text-align: justify;">Providing opportunities for early, basic and secondary education for
                                    children of foreign communities residing in Libya from diplomatic
                                    missions and foreign companies, and others.
                                    </p>
                            </div>

                            <div class="value-inner-content">
                                <div class="number">
                                    <span class="bg-2">02</span>
                                </div>

                                <p style="text-align: justify;">Providing an opportunity to complete the study for Libyan students
                                    returning to the homeland, including children of diplomats, Libyan
                                    immigrants, and others.
                                    </p>
                            </div>

                            <div class="value-inner-content">
                                <div class="number">
                                    <span class="bg-3">03</span>
                                </div>

                                <p style="text-align: justify;">Providing educational opportunities and creating an atmosphere of
                                    educational diversity for students wishing to pursue foreign education
                                    in Libya.
                                    </p>
                            </div>
                            <div class="value-inner-content">
                                <div class="number">
                                    <span class="bg-2">04</span>
                                </div>

                                <p style="text-align: justify;">Preparing students to keep pace with modern methods of
                                    technology-supported education.

                                  </p>
                            </div>
                            <div class="value-inner-content">
                                <div class="number">
                                    <span >05</span>
                                </div>

                                <p style="text-align: justify;">Working to make the school an educational institution that contributes
                                    to achieving the desired highest standards of education for Libyan
                                    society.

                                  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- End Value Area -->

        <!-- start vision and mission area -->
        <section class="who-we-are ptb-100">
            <div class="container">
                <div class="row align-items-center">


                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <span>Vision and Mission</span>
                            <h3>Our Vision :</h3>
                            <p style="text-align: justify;">ISM International School aims to develop confident and responsible
                                individuals who aspire to achieve their full potential. We will do this
                                by providing a supportive, happy, safe and fair learning environment in
                                which everyone is equal and all achievements are celebrated.
                                </p>
                            <h3>Our Mission :</h3>
                            <p style="text-align: justify;">is to work together with students, parents, teachers and the
                                wider community to provide high quality education in a safe, respectful
                                and diverse environment, where learners are empowered to grow and thrive
                                as global citizens.
                                 </p>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="who-we-are-image">
                            <img src="{{asset('assets/img/pic103.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- End vision and mission area -->
        <br>
        <div class="container">
            <div class="section-title">
                <span>Our Nationalities: </span>
            </div>
        <div class="row" style="justify-content:space-around; margin: 50px;--bs-gutter-x:0rem;">
            <div class="col-xs-12 col-md-3" style="height: 125px;width: 125px;">
                <img src="{{asset('assets/img/flags-home/amr.png')}}" alt="AmericanFlag">
            </div>
            <div class="col-xs-12 col-md-3" style="height:150وpx; width:150px;">
                <img src="{{asset('assets/img/flags-home/egy.png')}}" alt="AmericanFlag">
            </div>
            <div class="col-xs-12 col-md-3" style="height: 142px;width: 142px;">
                <img src="{{asset('assets/img/flags-home/grm.png')}}" alt="GermanFlag">
            </div>
            <div class="col-xs-12 col-md-3" style="height: 125px;width: 125px;">
                <img src="{{asset('assets/img/flags-home/fr1.png')}}" alt="franceFlag">
            </div>
        </div>
    </div>

        <!-- Start NewsArea -->
        <section class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>News and Blog</span>
                    <h2>Latest News</h2>
                </div>

                <div class="row">
                  @foreach($news as $new)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="blog-image">
                              <a href="/blog-details/{{$new->id}}">
                                    <img src="{{asset(Storage::url($new->image))}}" alt="image">
                                  </a>
                            </div>

                            <div class="blog-content">
                                <ul class="post-meta">
                                    <li>
                                        <span>By Admin:</span>
                                        ISM
                                    </li>
                                    <li>
                                        <span>Date:</span>
                                        {{$new->date}}
                                    </li>
                                </ul>
                                <h3>
                                  <a href="/blog-details/{{$new->id}}">{{$new->title}}</a>
                                </h3>
                                <p class="mb-4 text-sm" style="font-size: 12px; height:150px; overflow: hidden; overflow-wrap: break-word;">{{$new->text}}</p>

                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
            </div>
        </section>
        <!-- End NewsArea -->


        <section id="clients" class="section-bg">

            <div class="container">

                <div class="section-title">
                <span style="font-size:25px ;">Our Communities: </span>
            </div>

              <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="{{asset('assets/img/flags-home/united-kingdom.png')}}" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">

                    <img src="{{asset('assets/img/flags-home/egypt.png')}}" class="img-fluid" alt="">

                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="{{asset('assets/img/flags-home/libya.png')}}" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="{{asset('assets/img/flags-home/canada.png')}}" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="{{asset('assets/img/flags-home/iraq.png')}}" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="{{asset('assets/img/flags-home/pakistan.png')}}" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="{{asset('assets/img/flags-home/south-africa.png')}}" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                  <div class="client-logo">
                    <img src="{{asset('assets/img/flags-home/ireland.png')}}" class="img-fluid" alt="">
                  </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                      <img src="{{asset('assets/img/flags-home/tunisia.png')}}" class="img-fluid" alt="">
                    </div>
                  </div>



              </div>

            </div>

          </section>

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
