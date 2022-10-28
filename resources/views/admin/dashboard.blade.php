@extends('layouts.main')

@section('title', 'Dashboard')

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
@endsection

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
                        @if (Auth::user()->hasRole('Administrator'))
                        <div class="col-sm-6 col-xl-3">
                        @else
                        <div class="col-sm-6 col-xl-6">
                        @endif
                            <div class="card shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="uil-shop text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $toko }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Toko</p>
                                </div>
                            </div>
                        </div>

                        @if (Auth::user()->hasRole('Administrator'))
                        <div class="col-sm-6 col-xl-3">
                        @else
                        <div class="col-sm-6 col-xl-6">
                        @endif
                            <div class="card shadow-none m-0 border-start">
                                <div class="card-body text-center">
                                    <i class="uil-cart text-muted" style="font-size: 24px;"></i>
                                    <h3><span>{{ $product }}</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Product</p>
                                </div>
                            </div>
                        </div>

                        @if (Auth::user()->hasRole('Administrator'))
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
                    @endif
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
        @if (Auth::user()->hasRole('Administrator'))
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Map Toko</h4>
                </div>
                <div class="card-body">
                    <div id="map" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- end row-->
@endsection

@if (Auth::user()->hasRole('Administrator'))
@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
<script>
    var map = L.map('map').setView([-7.006250797982, 108.48793029785], 11);

    // Layer map Hybrid in google
    L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);

    @foreach ($maps as $row)
    var marker = L.marker([{{ $row->latitude }}, {{ $row->longtitude }}]).addTo(map);
    marker.bindPopup(<?= json_encode($row->nama ) ?>).openPopup();
    @endforeach
</script>
@endpush
@endif
