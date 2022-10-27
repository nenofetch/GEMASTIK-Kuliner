@extends('frontend.layouts.main')

@section('title', 'Info Produk')

@section('content')
    <!-- Header -->
    @include('frontend.layouts.header')
    <!-- end Header -->

    <div class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-7">
                    <div class="owl-carousel product-carousel owl-dots-overlay-right">
                        <div data-hash="1">
                            <img src="{{ asset('storage/' . $produk->image) }}" alt="">
                        </div>
                        <div data-hash="2">
                            <img src="{{ asset('frontend/assets') }}/images/product-2.jpg" alt="">
                        </div>
                        <div data-hash="3">
                            <img src="{{ asset('frontend/assets') }}/images/product-3.jpg" alt="">
                        </div>
                    </div>
                    <ul class="product-carousel-thumbnails">
                        <li><a href="#1"><img src="{{ asset('frontend/assets') }}/images/product-1.jpg"
                                    alt=""></a></li>
                        <li><a href="#2"><img src="{{ asset('frontend/assets') }}/images/product-2.jpg"
                                    alt=""></a></li>
                        <li><a href="#3"><img src="{{ asset('frontend/assets') }}/images/product-3.jpg"
                                    alt=""></a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-5">
                    <ul class="list-inline-slash font-small margin-bottom-10">
                        <li><a href="#">{{ $produk->toko->nama }}</a></li>
                        {{-- <li><a href="#">Smart Watch</a></li> --}}
                    </ul>
                    <h3 class="fw-normal margin-0">{{ $produk->name }}</h3>
                    <div class="product-price">
                        <h5 class="fw-light">Rp. {{ $produk->price }}</h5>
                    </div>
                    <p>{{ $produk->description }}
                    <p>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <div class="container">
        <div class="product-info-box">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="additional-info">
                    <h4>Deskripsi Produk</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                        massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                        quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                        imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                        Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                </div>
            </div>
        </div>
    </div><!-- end container -->

    <!-- Related Products -->
    <div class="section">
        <div class="container">
            <div class="margin-bottom-70 text-center">
                <h3 class="fw-normal">Related Products</h3>
            </div>
            <div class="owl-carousel" data-owl-dots="false" data-owl-autoplay="true" data-owl-margin="30" data-owl-xs="1"
                data-owl-sm="2" data-owl-md="3" data-owl-lg="3" data-owl-xl="3">
                <!-- Carousel Item 1 -->
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/product-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-title">
                        <!-- Product Title -->
                        <h6 class="fw-medium"><a href="~">Product title</a></h6>
                        <!-- Product Price -->
                        <div class="price">
                            <del>$98</del>
                            <span>$49</span>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 2 -->
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/product-2.jpg" alt="">
                        </a>
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
                <!-- Carousel Item 3 -->
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/product-3.jpg" alt="">
                        </a>
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
                <!-- Carousel Item 4 -->
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/product-4.jpg" alt="">
                        </a>
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
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/product-5.jpg" alt="">
                        </a>
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
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/product-6.jpg" alt="">
                        </a>
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
            </div><!-- end owl-carousel -->
        </div><!-- end container -->
    </div>
    <!-- end Related Products -->

@endsection
