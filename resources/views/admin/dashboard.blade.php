@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card widget-inline">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="uil-shop text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $toko }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Toko</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="uil-cart text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $product }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Product</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="uil-sitemap text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $category }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Kategori</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="uil-user text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $users }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Pengguna</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->
@endsection
