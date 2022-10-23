@extends('frontend.layouts.main')

@section('title', 'List Produk')

@section('content')
    <!-- Header -->
    @include('frontend.layouts.header')
    <!-- end Header -->

    <!-- Products section -->
    <div class="section-sm">
        <div class="row text-center">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h3 class="font-family-secondary">Product</h3>
                <div class="divider-zigzag divider-zigzag-color-black-07">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
        <div class="container margin-top-70">
            <!-- Products -->
            <div class="row g-3">
                <!-- Product box 1 -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="product-box">
                        <div class="product-img">
                            <!-- Product IMG -->
                            <a class="product-img-link" href="#">
                                <img src="{{ asset('frontend/assets') }}/images/product-1.jpg" alt="">
                            </a>
                            {{-- <!-- Badge (left) -->
                            <div class="product-badge-left">
                                <!-- you can add: 'red/green' -->
                                <span>New</span>
                            </div>
                            <!-- Badge (right) -->
                            <div class="product-badge-right red">
                                <!-- you can add: 'red/green' -->
                                <span>-50%</span>
                            </div> --}}
                            <!-- Detail Produk -->
                            <div class="add-to-cart">
                                <a href="{{ route('info-produk') }}">Detail Produk</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Jaya Linggarjati Coffee</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <span>Rp50.000</span>
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
                                <img src="{{ asset('frontend/assets') }}/images/product-2.jpg" alt="">
                            </a>
                            {{-- <!-- Badge (left) -->
                            <div class="product-badge-left">
                                <!-- you can add: 'red/green' -->
                                <span>New</span>
                            </div>
                            <!-- Badge (right) -->
                            <div class="product-badge-right red">
                                <!-- you can add: 'red/green' -->
                                <span>-50%</span>
                            </div> --}}
                            <!-- Detail Produk -->
                            <div class="add-to-cart">
                                <a href="{{ route('info-produk') }}">Detail Produk</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Opak Original Kartika</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <span>Rp30.000</span>
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
                                <img src="{{ asset('frontend/assets') }}/images/product-3.jpg" alt="">
                            </a>
                            {{-- <!-- Badge (left) -->
                            <div class="product-badge-left">
                                <!-- you can add: 'red/green' -->
                                <span>New</span>
                            </div>
                            <!-- Badge (right) -->
                            <div class="product-badge-right red">
                                <!-- you can add: 'red/green' -->
                                <span>-50%</span>
                            </div> --}}
                            <!-- Detail Produk -->
                            <div class="add-to-cart">
                                <a href="{{ route('info-produk') }}">Detail Produk</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Jeniper (Jeruk Nipis Peras)</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <span>Rp75.000</span>
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
                                <img src="{{ asset('frontend/assets') }}/images/product-4.jpg" alt="">
                            </a>
                            {{-- <!-- Badge (left) -->
                            <div class="product-badge-left">
                                <!-- you can add: 'red/green' -->
                                <span>New</span>
                            </div>
                            <!-- Badge (right) -->
                            <div class="product-badge-right red">
                                <!-- you can add: 'red/green' -->
                                <span>-50%</span>
                            </div> --}}
                            <!-- Detail Produk -->
                            <div class="add-to-cart">
                                <a href="{{ route('info-produk') }}">Detail Produk</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Ketempling</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <span>Rp45.000</span>
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
                                <img src="{{ asset('frontend/assets') }}/images/product-5.jpg" alt="">
                            </a>
                            {{-- <!-- Badge (left) -->
                            <div class="product-badge-left">
                                <!-- you can add: 'red/green' -->
                                <span>New</span>
                            </div>
                            <!-- Badge (right) -->
                            <div class="product-badge-right red">
                                <!-- you can add: 'red/green' -->
                                <span>-50%</span>
                            </div> --}}
                            <!-- Detail Produk -->
                            <div class="add-to-cart">
                                <a href="{{ route('info-produk') }}">Detail Produk</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Tahu Kopeci</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <span>Rp10.000</span>
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
                                <img src="{{ asset('frontend/assets') }}/images/product-6.jpg" alt="">
                            </a>
                            {{-- <!-- Badge (left) -->
                            <div class="product-badge-left">
                                <!-- you can add: 'red/green' -->
                                <span>New</span>
                            </div>
                            <!-- Badge (right) -->
                            <div class="product-badge-right red">
                                <!-- you can add: 'red/green' -->
                                <span>-50%</span>
                            </div> --}}
                            <!-- Detail Produk -->
                            <div class="add-to-cart">
                                <a href="{{ route('info-produk') }}">Detail Produk</a>
                            </div>
                        </div>
                        <div class="product-title">
                            <!-- Product Title -->
                            <h6 class="fw-medium"><a href="#">Tape Ketan</a></h6>
                            <!-- Product Price -->
                            <div class="price">
                                <span>Rp30.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
            <!-- Pagination -->
            <div class="text-center margin-top-50">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </nav>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Products section -->

@endsection
