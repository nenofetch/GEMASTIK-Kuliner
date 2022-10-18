@extends('frontend.layouts.main')

@section('title', 'Home')

@section('content')

    <!-- Header -->
    <div class="header right dark absolute-light sticky-autohide">
        <div class="container">
            <!-- Logo -->
            <div class="header-logo">
                <h3><a href="#">mono</a></h3>
                <!--
                <img class="logo-dark" src="../assets/images/your-logo-dark.png" alt="">
                <img class="logo-light" src="../assets/images/your-logo-light.png" alt="">
                -->
            </div>
            <!-- Menu -->
            <div class="header-menu">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link Only</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dropdown</a>
                        <ul class="nav-dropdown">
                            <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Dropdown Item</a></li>
                            <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Dropdown Item</a></li>
                            <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Dropdown Item</a></li>
                            <li class="nav-dropdown-item"><a class="nav-dropdown-link" href="#">Dropdown Item</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Subdropdown</a>
                        <ul class="nav-dropdown">
                            <li class="nav-dropdown-item">
                                <a class="nav-dropdown-link" href="#">Dropdown Item</a>
                                <ul class="nav-subdropdown">
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                </ul>
                            </li>
                            <li class="nav-dropdown-item">
                                <a class="nav-dropdown-link" href="#">Dropdown Item</a>
                                <ul class="nav-subdropdown">
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                    <li class="nav-subdropdown-item"><a class="nav-subdropdown-link"
                                            href="#">Subdropdown Item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Menu Extra -->
            <div class="header-menu-extra">
                <ul class="list-inline">
                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
            <!-- Menu Toggle -->
            <button class="header-toggle">
                <span></span>
            </button>
        </div><!-- end container -->
    </div>
    <!-- end Header -->

    <!-- Hero section -->
    <div class="section-2xl bg-image parallax" data-bg-src="../assets/images/background.jpg">
        <div class="bg-black-06">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-12 col-lg-5 order-lg-2 text-center">
                        <a class="button-circle button-circle-xl button-circle-white-3 button-circle-animation-drop button-hover-shrink lightbox-media-link"
                            href="https://www.youtube.com/watch?v=W-j4QGAgNu8"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="col-12 col-lg-7 order-lg-1 text-center text-lg-start">
                        <h1 class="fw-normal">We transform brands & businesses from inside out</h1>
                        <a class="button button-lg button-radius button-outline-white margin-top-20" href="#">Let's
                            talk</a>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end bg-dark-* -->
    </div>
    <!-- end Hero section -->

    <!-- Features section -->
    <div class="section">
        <div class="container icon-5xl">
            <div class="row g-4">
                <!-- Feature box 1 -->
                <div class="col-12 col-lg-4">
                    <div class="border border-radius-025 padding-20 padding-md-30 padding-lg-40">
                        <div class="text-dark margin-bottom-10">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h5 class="fw-normal">Feature Title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Feature box 2 -->
                <div class="col-12 col-lg-4">
                    <div class="border border-radius-025 padding-20 padding-md-30 padding-lg-40">
                        <div class="text-dark margin-bottom-10">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h5 class="fw-normal">Feature Title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Feature box 3 -->
                <div class="col-12 col-lg-4">
                    <div class="border border-radius-025 padding-20 padding-md-30 padding-lg-40">
                        <div class="text-dark margin-bottom-10">
                            <i class="bi bi-globe"></i>
                        </div>
                        <h5 class="fw-normal">Feature Title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Features section -->

    <!-- About section -->
    <div class="section padding-top-0">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6">
                    <img class="border-radius-025" src="../assets/images/col-1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="fw-light">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus
                        et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <a class="button-text-2 margin-top-20" href="#">Read more</a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end About section -->

    <!-- Clients section -->
    <div class="section-sm border-top">
        <div class="container text-center">
            <div class="owl-carousel" data-owl-dots="false" data-owl-nav="true" data-owl-margin="50"
                data-owl-autoplay="true" data-owl-xs="1" data-owl-sm="2" data-owl-md="3" data-owl-lg="4"
                data-owl-xl="5">
                <!-- Client box 1 -->
                <div class="client-box">
                    <a href="#"><img src="../assets/images/col-4.jpg" alt=""></a>
                </div>
                <!-- Client box 2 -->
                <div class="client-box">
                    <a href="#"><img src="../assets/images/col-4.jpg" alt=""></a>
                </div>
                <!-- Client box 3 -->
                <div class="client-box">
                    <a href="#"><img src="../assets/images/col-4.jpg" alt=""></a>
                </div>
                <!-- Client box 4 -->
                <div class="client-box">
                    <a href="#"><img src="../assets/images/col-4.jpg" alt=""></a>
                </div>
                <!-- Client box 5 -->
                <div class="client-box">
                    <a href="#"><img src="../assets/images/col-4.jpg" alt=""></a>
                </div>
                <!-- Client box 6 -->
                <div class="client-box">
                    <a href="#"><img src="../assets/images/col-4.jpg" alt=""></a>
                </div>
                <!-- Client box 7 -->
                <div class="client-box">
                    <a href="#"><img src="../assets/images/col-4.jpg" alt=""></a>
                </div>
            </div><!-- end owl-carousel -->
        </div><!-- end container -->
    </div>
    <!-- end Clients section -->

    <!-- Services section -->
    <div class="section border-top">
        <div class="container">
            <div class="row g-4">
                <!-- Service box 1 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box dark">
                        <div class="feature-box-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="fw-normal">Service title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box dark">
                        <div class="feature-box-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="fw-normal">Service title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box dark">
                        <div class="feature-box-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="fw-normal">Service title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box dark">
                        <div class="feature-box-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="fw-normal">Service title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box dark">
                        <div class="feature-box-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="fw-normal">Service title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="feature-box dark">
                        <div class="feature-box-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="fw-normal">Service title</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Services section -->

    <!-- Parallax section -->
    <div class="section-xl bg-image parallax" data-bg-src="../assets/images/background.jpg">
        <div class="bg-black-06">
            <div class="container text-center">
                <div class="row g-4">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="fw-light" data-sal="slide-up" data-sal-delay="50">We're ready to elevate your
                            business, are you?</h1>
                        <div class="margin-top-30" data-sal="slide-up" data-sal-delay="150">
                            <a class="button button-lg button-radius button-outline-white" href="#">Let's Talk</a>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end bg-dark-* -->
    </div>
    <!-- end Parallax section -->
@endsection
