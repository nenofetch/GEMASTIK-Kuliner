@extends('frontend.layouts.main')

@section('title', 'Home')

@section('content')

    @include('frontend.layouts.header')

    <!-- Hero section -->
    <div class="section-xl bg-image parallax" data-bg-src="{{ asset('frontend') }}/assets/images/background-1.jpg">
        <div class="bg-black-05">
            <div class="container text-center">
                {{-- <h5 class="fw-light margin-bottom-20">Let us help you to</h5> --}}
                <h1 class="display-4 fw-bold">Sistem Kuliner Kuningan</h1>
                <a class="button button-xl button-rounded button-outline-white margin-top-20"
                    href="{{ route('/') }}#tentang">Tentang</a>
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <!-- About section -->
    <div class="section-sm" id="tentang">
        <div class="container icon-5xl">
            <div class="row text-center">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h3 class="font-family-secondary">Tentang</h3>
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
                    <img class="border-radius-025" src="{{ asset('frontend/assets') }}/images/about.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="fw-light">Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa. Cum sociis natoque penatibus
                        et magnis dis parturient montes, nascetur ridiculus mus.</p>
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

    <!-- toko section -->
    <div class="section-sm border-top" id="toko">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                    <h3 class="font-family-secondary">Toko</h3>
                    <div class="divider-zigzag divider-zigzag-color-black-07">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
            <!-- toko -->
            <div class="row g-3 margin-top-50">
                <!-- Product box -->
                @foreach ($toko as $row)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="product-box">
                            <div class="product-img">
                                <!-- Product IMG -->
                                <a class="product-img-link" href="#">
                                    <img src="{{ asset('storage/' . $row->foto) }}" alt="{{ $row->nama }}" width="100"
                                        height="100">
                                </a>
                                <div class="add-to-cart">
                                    <a href="{{ route('list-produk') }}">Detail</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <!-- Product Title -->
                                <h6 class="fw-medium"><a href="#">{{ $row->nama }}</a></h6>
                                <!-- Product Price -->
                                <div class="price">
                                    {{ $row->alamat }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div><!-- end row -->
            <!-- Pagination -->
            <div class="text-center margin-top-50">
                <a class="button button-dark button-lg button-rounded" href="{{ route('list-shop') }}">All Shop</a>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Products section -->
@endsection
