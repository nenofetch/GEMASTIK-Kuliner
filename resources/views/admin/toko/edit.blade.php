@extends('layouts.main')

@section('title', 'Toko')

@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" /> --}}
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Edit Data</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('toko.update', $toko->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Simple card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-secondary mb-3 btn-sm" onclick="window.location='/toko'">
                                <i class="uil uil-sign-in-alt"></i> Kembali
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama Toko</label>
                                    <input type="hidden" name="id" id="id" value="{{ $toko->id }}">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" placeholder="Silakan masukan nama" autofocus
                                        autocomplete="off" value="{{ $toko->nama }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="pemilik">Pemilik Toko</label>
                                    <input type="text" class="form-control @error('pemilik') is-invalid @enderror"
                                        id="pemilik" name="pemilik" placeholder="Silakan masukan pemilik"
                                        autocomplete="off" value="{{ $toko->pemilik }}">
                                    @error('pemilik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="1" placeholder="Silakan masukan deskripsi">{{ $toko->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control  @error('alamat') is-invalid @enderror" rows="1"
                                        placeholder="Silakan masukan alamat">{{ $toko->alamat }}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="logo">Logo</label>
                                    <input type="file" name="logo" id="logo"
                                        class="form-control @error('logo') is-invalid @enderror" value="{{ $toko->logo }}"
                                        accept="image/*">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="foto">Foto Toko</label>
                                    <input type="file" name="foto" id="foto"
                                        class="form-control @error('foto') is-invalid @enderror"
                                        value="{{ $toko->foto }}" accept="image/*">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="dokumen">Dokumen Penunjang</label>
                                    <input type="file" name="dokumen" id="dokumen"
                                        class="form-control @error('foto') is-invalid @enderror"
                                        value="{{ $toko->dokumen }}">
                                    @error('dokumen')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @if (Auth::user()->hasRole('Administrator'))
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="user_id">User</label>
                                        <select name="user_id" id="user_id"
                                            class="form-control @error('user_id') is-invalid @enderror">
                                            <option value="">-- Pilih --</option>
                                            @foreach ($users as $row)
                                                <option value="{{ $row->id }}"
                                                    {{ $toko->user_id == $row->id ? 'selected' : '' }}>{{ $row->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('user_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="status_toko">Status</label>
                                        <select name="status_toko" id="status_toko" class="form-control">
                                            <option value="">-- Ubah Status --</option>
                                            <option value="pending" {{ $toko->status == 'pending' ? 'selected' : '' }}>
                                                Pending
                                            </option>
                                            <option value="diterima" {{ $toko->status == 'diterima' ? 'selected' : '' }}>
                                                Diterima</option>
                                            <option value="ditolak" {{ $toko->status == 'ditolak' ? 'selected' : '' }}>
                                                Ditolak
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="map">Map</label>
                                    <br>
                                    @error('latitude')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    <div id="map" style="width: 100%; height: 300px;"></div>
                                    <input type="text" class="form-control" name="latitude" id="latitude" hidden>
                                    <input type="text" class="form-control" name="longtitude" id="longtitude" hidden>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary mb-3" id="save">
                                    Simpan
                                </button>
                            </div>
                        </div>

                    </div> <!-- end card-body-->
                </div>
                <!-- end card-->
            </form>
        </div><!-- end col -->
    </div>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>
{{-- <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script> --}}
<script>
    var map = L.map('map').setView([{{ $toko->latitude }}, {{ $toko->longtitude }}], 15);

    // Layer map Hybrid in google
    L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);
    
    var marker = L.marker([{{ $toko->latitude }}, {{ $toko->longtitude }}]).addTo(map);

    marker.bindPopup(<?= json_encode($toko->nama ) ?>).openPopup();

    var popup = L.popup();

    function onMapClick(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longtitude = e.latlng.lng.toString().substring(0, 15);
        
        if (marker != undefined) {
            map.removeLayer(marker)
        }
        
        document.querySelector('#latitude').value = latitude;
        document.querySelector('#longtitude').value = longtitude;
		popup
			.setLatLng([latitude, longtitude])
			.setContent('Kordinat : ' + latitude + ' - ' + longtitude)
			.openOn(map);
        
        marker = L.marker([latitude, longtitude]).addTo(map)
            .bindPopup('Kordinat : ' + latitude + ' - ' + longtitude).openPopup();
	}

	map.on('click', onMapClick);

    const search = new GeoSearch.GeoSearchControl({
        provider: new GeoSearch.OpenStreetMapProvider(),
        style: 'bar',
        searchLabel: 'Cari...',
        autoComplete: true,
        autoCompleteDelay: 250,
        showMarker: true,
        showPopup: true,
        retainZoomLevel: true,
    });
    map.addControl(search);
</script>
@endpush