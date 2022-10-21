@extends('layouts.main')

@section('title', 'Toko')

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
                                <th style="width: 30%;">Deskripsi</th>
                                <td>:</td>
                                <td>{{ $toko->deskripsi }}</th>
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
