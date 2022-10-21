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
                            <img src="{{ asset('frontend/assets') }}/images/col-1-square.jpg" alt="">
                        </div>
                        <div data-hash="2">
                            <img src="{{ asset('frontend/assets') }}/images/col-1-square.jpg" alt="">
                        </div>
                        <div data-hash="3">
                            <img src="{{ asset('frontend/assets') }}/images/col-1-square.jpg" alt="">
                        </div>
                    </div>
                    <ul class="product-carousel-thumbnails">
                        <li><a href="#1"><img src="{{ asset('frontend/assets') }}/images/col-2-square.jpg"
                                    alt=""></a></li>
                        <li><a href="#2"><img src="{{ asset('frontend/assets') }}/images/col-2-square.jpg"
                                    alt=""></a></li>
                        <li><a href="#3"><img src="{{ asset('frontend/assets') }}/images/col-2-square.jpg"
                                    alt=""></a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-5">
                    <ul class="list-inline-slash font-small margin-bottom-10">
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Smart Watch</a></li>
                    </ul>
                    <h3 class="fw-normal margin-0">Product Title</h3>
                    <div class="product-price">
                        <h5 class="fw-light"><del>$399</del><ins>$360</ins></h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    <form class="product-quantity margin-top-30">
                        <div class="qnt">
                            <input type="number" id="quantity" name="quantity" min="1" max="10"
                                value="1">
                        </div>
                        <button class="button button-md button-dark" type="submit">Add to Cart</button>
                    </form>
                    <div class="margin-top-30">
                        <p>SKU: 7777</p>
                        <a class="button-text-1 margin-top-10" href="#">Add to Wishlist</a>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>

    <div class="container">
        <div class="product-info-box">
            <ul class="nav margin-bottom-20">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#specs">Specifications</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#additional-info">Additional
                        Info</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="specs">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row g-4">Weight</th>
                                <td>25 g</td>
                            </tr>
                            <tr>
                                <th scope="row g-4">Dimension</th>
                                <td>38.6 x 33.3 x 10.5 mm</td>
                            </tr>
                            <tr>
                                <th scope="row g-4">Color</th>
                                <td>Space Gray, Rose, White</td>
                            </tr>
                            <tr>
                                <th scope="row g-4">Care</th>
                                <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="additional-info">
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
                            <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                        </a>
                        <!-- Badge (left) -->
                        <div class="product-badge-left">
                            <!-- you can add: 'red/green' -->
                            <span>New</span>
                        </div>
                        <!-- Badge (right) -->
                        <div class="product-badge-right red">
                            <!-- you can add: 'red/green' -->
                            <span>-50%</span>
                        </div>
                        <!-- Add to Cart -->
                        <div class="add-to-cart">
                            <a href="#">Add to Cart</a>
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
                <!-- Carousel Item 2 -->
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                        </a>
                        <!-- Badge (left) -->
                        <div class="product-badge-left">
                            <!-- you can add: 'red/green' -->
                            <span>New</span>
                        </div>
                        <!-- Badge (right) -->
                        <div class="product-badge-right red">
                            <!-- you can add: 'red/green' -->
                            <span>-50%</span>
                        </div>
                        <!-- Add to Cart -->
                        <div class="add-to-cart">
                            <a href="#">Add to Cart</a>
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
                <!-- Carousel Item 3 -->
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                        </a>
                        <!-- Badge (left) -->
                        <div class="product-badge-left">
                            <!-- you can add: 'red/green' -->
                            <span>New</span>
                        </div>
                        <!-- Badge (right) -->
                        <div class="product-badge-right red">
                            <!-- you can add: 'red/green' -->
                            <span>-50%</span>
                        </div>
                        <!-- Add to Cart -->
                        <div class="add-to-cart">
                            <a href="#">Add to Cart</a>
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
                <!-- Carousel Item 4 -->
                <div class="product-box">
                    <div class="product-img">
                        <!-- Product IMG -->
                        <a class="product-img-link" href="#">
                            <img src="{{ asset('frontend/assets') }}/images/col-2-tall.jpg" alt="">
                        </a>
                        <!-- Badge (left) -->
                        <div class="product-badge-left">
                            <!-- you can add: 'red/green' -->
                            <span>New</span>
                        </div>
                        <!-- Badge (right) -->
                        <div class="product-badge-right red">
                            <!-- you can add: 'red/green' -->
                            <span>-50%</span>
                        </div>
                        <!-- Add to Cart -->
                        <div class="add-to-cart">
                            <a href="#">Add to Cart</a>
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
            </div><!-- end owl-carousel -->
        </div><!-- end container -->
    </div>
    <!-- end Related Products -->

@endsection
