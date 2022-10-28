@extends('layouts.main')

@section('title', 'Toko')

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Detail Toko</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg">
            <!-- Simple card -->
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-centered mb-0">
                            <tr>
                                <th style="width: 30%;">Nama Toko</th>
                                <td>:</td>
                                <td>{{ $toko->nama }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Pemilik</th>
                                <td>:</td>
                                <td>{{ $toko->pemilik }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">User</th>
                                <td>:</td>
                                <td>{{ $toko->user->name }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Deskripsi</th>
                                <td>:</td>
                                <td>{{ $toko->deskripsi}}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Alamat</th>
                                <td>:</td>
                                <td>{{ $toko->alamat }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Logo</th>
                                <td>:</td>
                                <td><a href="{{ asset('storage/' . $toko->logo) }}" target="_blank">Logo -
                                        {{ $toko->nama }}</a></th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Foto Toko</th>
                                <td>:</td>
                                <td><a href="{{ asset('storage/' . $toko->foto) }}" target="_blank">Foto Toko -
                                        {{ $toko->nama }}</a></th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Dokumen</th>
                                <td>:</td>
                                <td><a href="{{ asset('storage/' . $toko->dokumen) }}" target="_blank">Dokumen -
                                        {{ $toko->nama }}</a></th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Status</th>
                                <td>:</td>
                                @if ($toko->status == 'pending')
                                    <td><span class="badge bg-secondary">Pending</span></td>
                                @elseif($toko->status == 'diterima')
                                    <td><span class="badge bg-success">Diterima</span></td>
                                @elseif($toko->status == 'ditolak')
                                    <td><span class="badge bg-danger">Ditolak</span></td>
                                @endif
                            </tr>
                            <tr>
                                <th style="width: 30%;">Map</th>
                                <td>:</td>
                                <td><div id="map" style="width: 100%; height: 300px;"></div></th>
                            </tr>
                        </table>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='/toko'">
                                <i class="uil uil-sign-in-alt"></i> Back
                            </button>
                            <button type="button" class="btn btn-warning btn-sm"
                                onclick="window.location='/toko/<?= $toko->id ?>/edit'"><i class="mdi mdi-pencil"></i>
                                Update
                            </button>
                        </div>

                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div><!-- end col -->
    </div>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
<script>
    var map = L.map('map').setView([{{ $toko->latitude }}, {{ $toko->longtitude }}], 15);

    // Layer map Hybrid in google
    L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);

    var marker = L.marker([{{ $toko->latitude }}, {{ $toko->longtitude }}]).addTo(map);

    marker.bindPopup(<?= json_encode($toko->nama ) ?>).openPopup();

</script>
@endpush