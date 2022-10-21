@extends('frontend.layouts.main')

@section('title', 'Home')

@section('content')

    @include('frontend.layouts.header')

    <!-- Hero section -->
    <div class="section-2xl bg-image parallax" data-bg-src="{{ asset('frontend/assets') }}/images/background.jpg"
        id="home">
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

    <!-- About section -->
    <div class="section-sm" id="about">
        <div class="container icon-5xl">
            <div class="row text-center">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h3 class="font-family-secondary">About</h3>
                    <div class="divider-zigzag divider-zigzag-color-black-07">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
            <div class="row g-4 margin-top-50">
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
    <!-- end About section -->

    <!-- About section -->
    <div class="section-sm padding-top-0">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6">
                    <img class="border-radius-025" src="{{ asset('frontend/assets') }}/images/col-1.jpg" alt="">
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
    <div class="section-sm border-top" id="faq">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h3 class="font-family-secondary">FAQ</h3>
                    <div class="divider-zigzag divider-zigzag-color-black-07">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
            <div class="row g-5 margin-top-50">
                <div class="col-12">
                    <ul class="accordion single-open">
                        <li class="active">
                            <div class="accordion-title">
                                <h6 class="font-small fw-normal uppercase">First Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-small fw-normal uppercase">Second Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-small fw-normal uppercase">Third Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-small fw-normal uppercase">Fourth Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-small fw-normal uppercase">Fifth Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-small fw-normal uppercase">Sixth Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-small fw-normal uppercase">Seventh Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <!-- Shop section -->
    <div class="section-sm border-top" id="shop">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h3 class="font-family-secondary">Shop</h3>
                    <div class="divider-zigzag divider-zigzag-color-black-07">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
            <!-- Shop -->
            <div class="row g-3 margin-top-50">
                <!-- Product box 1 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <!-- Product IMG -->
                            <a class="product-img-link" href="#">
                                <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                            </a>
                            <div class="add-to-cart">
                                <a href="#">Detail Shop</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Product title</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <del>$98</del>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product box 2 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <!-- Product IMG -->
                            <a class="product-img-link" href="#">
                                <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                            </a>
                            <div class="add-to-cart">
                                <a href="#">Detail Shop</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Product title</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <del>$98</del>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product box 3 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <!-- Product IMG -->
                            <a class="product-img-link" href="#">
                                <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                            </a>
                            <div class="add-to-cart">
                                <a href="#">Detail Shop</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Product title</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <del>$98</del>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product box 4 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <!-- Product IMG -->
                            <a class="product-img-link" href="#">
                                <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                            </a>
                            <div class="add-to-cart">
                                <a href="#">Detail Shop</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Product title</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <del>$98</del>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product box 5 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <!-- Product IMG -->
                            <a class="product-img-link" href="#">
                                <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                            </a>
                            <!-- Detail Shop -->
                            <div class="add-to-cart">
                                <a href="#">Detail Shop</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Product title</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <del>$98</del>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product box 6 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <!-- Product IMG -->
                            <a class="product-img-link" href="#">
                                <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                            </a>
                            <div class="add-to-cart">
                                <a href="#">Detail Shop</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Product title</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <del>$98</del>
                                <span>$49</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
            <!-- Pagination -->
            <div class="text-center margin-top-50">
                <a class="button button-dark button-lg button-rounded" href="{{ route('list-shop') }}">All Shop</a>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Products section -->

    <!-- Parallax section -->
    <div class="section-xl bg-image parallax" data-bg-src="{{ asset('frontend/assets') }}/images/background.jpg">
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
