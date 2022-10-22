@extends('layouts.main')

@section('title', 'Toko')

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
<link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css"/>
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Tambah Data</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('toko.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" placeholder="Silakan masukan nama" autofocus
                                        autocomplete="off" value="{{ old('nama') }}">
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
                                        autocomplete="off" value="{{ old('pemilik') }}">
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
                                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="1" placeholder="Silakan masukan deskripsi">{{ old('deskripsi') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="1"
                                        placeholder="Silakan masukan alamat">{{ old('alamat') }}</textarea>
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
                                        class="form-control @error('logo') is-invalid @enderror" accept="image/*">
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
                                        class="form-control @error('foto') is-invalid @enderror" accept="image/*">
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
                                        class="form-control @error('dokumen') is-invalid @enderror">
                                    @error('dokumen')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="map">Map</label>
                                    <div id="map" style="width: 100%; height: 300px;"></div>
                                    <input type="text" name="longtitude" id="longtitude"
                                        class="form-control @error('longtitude') is-invalid @enderror" accept="image/*">
                                    @error('longtitude')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <input type="text" name="latitude" id="latitude"
                                        class="form-control @error('latitude') is-invalid @enderror" accept="image/*">
                                    @error('latitude')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
<script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>
<script>
    // var map = L.map('map').setView([51.505, -0.09], 13);

    // const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	// 	maxZoom: 19,
	// 	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	// }).addTo(map);

    const providerOSM = new GeoSearch.OpenStreetMapProvider();

    var map = L.map('map', {
        fullscreenControl: true,
        fullscreenControl: {
            pseudofullscreen: false,
        },
        minZoom: 2,
    }).setView([0,0], 2);

    const tiles = L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    // let marker = {};

    // map.on(events, function (e) {
    //     let latitude = e.latlng.lat.toString().substring(0, 15);
    //     let longtitude = e.latlng.lng.toString().substring(0, 15);

    //     if (marker != undefined) {
    //         map.removeLayer(marker)
    //     }

    //     var popup = L.popup()
    //         .setLatLng([latitude, longtitude])
    //         .setContent('Kordinat : ' + latitude + '-' + longtitude)
    //         .openOn(map);
        
    //     marker = L.marker([latitude, longtitude]).addTo(map);
    // });

	// const marker = L.marker([51.5, -0.09]).addTo(map)
	// 	.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

    // const popup = L.popup()
	// 	.setLatLng([51.513, -0.09])
	// 	.setContent('I am a standalone popup.')
	// 	.openOn(map);

    function onMapClick(e) {
		// popup
		// 	.setLatLng(e.latlng)
		// 	.setContent(`You clicked the map at ${e.latlng.toString()}`)
		// 	.openOn(map);

        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longtitude = e.latlng.lng.toString().substring(0, 15);

        if (marker != undefined) {
            map.removeLayer(marker)
        }

        var popup = L.popup()
            .setLatLng([latitude, longtitude])
            .setContent('Kordinat : ' + latitude + '-' + longtitude)
            .openOn(map);
        
        marker = L.marker([latitude, longtitude]).addTo(map);
	}

	map.on('click', onMapClick);

    const search = new GeoSearch.GeoSearchControl({
        provider: providerOSM,
        style: 'bar',
        searchLabel: 'Cari...',
        showMarker: true
    });

    map.addControl(search);
</script>
@endpush
