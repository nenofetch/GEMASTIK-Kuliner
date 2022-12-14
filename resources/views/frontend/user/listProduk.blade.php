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
                <h3 class="font-family-secondary">Produk</h3>
                <div class="divider-zigzag divider-zigzag-color-black-07">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
        <div class="container margin-top-70">
            <!-- Products -->
            <div class="row g-3">
                <!-- Product box -->
                @foreach ($produk as $row)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="product-box">
                            <div class="product-img">
                                <!-- Product IMG -->
                                <a class="product-img-link" href="#">
                                    <img src="{{ asset('storage') }}/{{ $row->image }}" alt="">
                                </a>
                                <!-- Detail Produk -->
                                <div class="add-to-cart">
                                    <a href="{{ url('/info-produk/' . $row->id) }}">Detail Produk</a>
                                </div>
                            </div>
                            <div class="product-title">
                                <!-- Product Title -->
                                <h6 class="fw-medium"><a href="#">{{ $row->name }} - {{ $row->toko->nama }}</a>
                                </h6>
                                <!-- Product Price -->
                                <div class="price">
                                    <span>Rp. {{ $row->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- end row -->
            <!-- Pagination -->
            <div class="text-center margin-top-50">
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">??</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">??</a></li>
                    </ul>
                </nav>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end Products section -->

@endsection
