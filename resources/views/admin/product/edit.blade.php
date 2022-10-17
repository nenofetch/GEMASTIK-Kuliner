@extends('layouts.main')

@section('title', 'Produk')

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
        <form action="{{ route('produk.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Simple card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-secondary mb-3 btn-sm" onclick="window.location='/produk'">
                            <i class="uil uil-sign-in-alt"></i> Kembali
                        </button>
                    </div>
                    <div class="row">
                        <input type="hidden" name="id" id="id" value="{{ $product->id }}">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="image">Foto Produk</label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama Produk</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Silakan masukan nama produk" autofocus autocomplete="off" value="{{ $product->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="description">Deskripsi</label>
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="1" placeholder="Silakan masukan deskripsi">{{ $product->description }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="category_id">Kategori</label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($categories as $row)
                                    <option value="{{ $row->id }}" {{ $product->category_id == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="price">Harga</label>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Silakan masukan nama produk" value="{{ $product->price }}">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="toko_id">Toko</label>
                                <select name="toko_id" id="toko_id" class="form-control @error('toko_id') is-invalid @enderror">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($toko as $row)
                                    <option value="{{ $row->id }}" {{ $product->toko_id == $row->id ? 'selected' : '' }}>{{ $row->nama }}</option>
                                    @endforeach
                                </select>
                                @error('toko_id')
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