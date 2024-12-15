<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BinarySoft - A Growing Software Comapny</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=asset('assets/images/favicon.png')?>">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?=asset('assets/css/plugins/all.min.css')?>">
    <link rel="stylesheet" href="<?=asset('assets/css/plugins/flaticon.css')?>">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?=asset('assets/css/plugins/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=asset('assets/css/plugins/swiper-bundle.min.css')?>">
    <link rel="stylesheet" href="<?=asset('assets/css/plugins/aos.css')?>">
    <link rel="stylesheet" href="<?=asset('assets/css/plugins/magnific-popup.css')?>">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?=asset('assets/css/style.css')?>">

</head>

<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <div id="header" class="section header-section">

            <div class="container">

                <!-- Header Wrap Start  -->
                <div class="header-wrap">

                    <div class="header-logo">
                        <a href="<?=url('')?>"><img src="<?=asset("assets/images/logo.png")?>" alt=""></a>
                    </div>

                    <div class="header-menu d-none d-lg-block">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="<?=url('')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?=url('services')?>">Services</a>
                            </li>
                            <li><a href="#">About</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=url('about-us')?>">About Us</a></li>
                                    <li><a href="<?=url('why-choose-us')?>">Why Choose Us</a></li>
                                    <li><a href="<?=url('teams')?>">Our Team</a></li>
                                    <li><a href="<?=url('testimonial')?>">Testimonial</a></li>
                                </ul>
                            </li>
                            <li><a href="<?=url('contact')?>">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Header Meta Start -->
                    <div class="header-meta">
                        <!-- Header Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->
                    </div>
                    <!-- Header Meta End  -->

                </div>
                <!-- Header Wrap End  -->

            </div>
        </div>
        <!-- Header End -->

        <!-- Offcanvas Start-->
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="/"><img src="assets/images/logo-white.png" alt=""></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>

            <!-- Offcanvas Body Start -->
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                <ul class="main-menu">
                            <li class="active-menu">
                                <a href="<?=url('')?>">Home</a>
                            </li>
                            <li>
                                <a href="<?=url('services')?>">Services</a>
                            </li>
                            <li><a href="#">About</a>
                                <ul class="sub-menu">
                                    <li><a href="<?=url('about-us')?>">About Us</a></li>
                                    <li><a href="<?=url('why-choose-us')?>">Why Choose Us</a></li>
                                    <li><a href="<?=url('teams')?>">Our Team</a></li>
                                    <li><a href="<?=url('testimonial')?>">Testimonial</a></li>
                                </ul>
                            </li>
                            <li><a href="<?=url('contact')?>">Contact</a></li>
                        </ul>
                </div>
            </div>
            <!-- Offcanvas Body End -->
        </div>
        <!-- Offcanvas End -->
