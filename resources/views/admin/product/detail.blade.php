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
                                <th style="width: 30%;">Foto Produk</th>
                                <td>:</td>
                                <td><img src="{{ asset('storage/' . $product->image) }}" alt="foto" width="15%"></th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Nama Produk</th>
                                <td>:</td>
                                <td>{{ $product->name }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Deskripsi</th>
                                <td>:</td>
                                <td>{{ $product->description }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Kategori</th>
                                <td>:</td>
                                <td>{{ $product->category->name }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Harga</th>
                                <td>:</td>
                                <td>Rp {{ $product->price }}</th>
                            </tr>
                            <tr>
                                <th style="width: 30%;">Toko</th>
                                <td>:</td>
                                <td>{{ $product->toko->nama }}</th>
                            </tr>
                        </table>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="button" class="btn btn-secondary btn-sm" onclick="window.location='/produk'">
                                <i class="uil uil-sign-in-alt"></i> Back
                            </button>
                            <button type="button" class="btn btn-warning btn-sm"
                                onclick="window.location='/produk/<?= $product->id ?>/edit'"><i class="mdi mdi-pencil"></i>
                                Update
                            </button>
                        </div>

                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->

        </div><!-- end col -->
    </div>
@endsection
