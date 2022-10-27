@extends('layouts.main')

@section('title', 'Produk')

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
            <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Simple card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-secondary mb-3 btn-sm"
                                onclick="window.location='/produk'">
                                <i class="uil uil-sign-in-alt"></i> Kembali
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="image">Foto Produk</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror" accept="image/*">
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
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Silakan masukan nama produk" autofocus
                                        autocomplete="off" value="{{ old('name') }}">
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
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                        rows="1" placeholder="Silakan masukan deskripsi">{{ old('description') }}</textarea>
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
                                    <div class="row">
                                        <div class="col-10">
                                            <select name="category_id" id="category_id"
                                                class="form-control @error('category_id') is-invalid @enderror">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($categories as $row)
                                                    <option id="categories_data" value="{{ $row->id }}"
                                                        {{ old('category_id') == $row->id ? 'selected' : '' }}>
                                                        {{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="uil uil-plus"></i>
                                            </button>
                                        </div>
                                    </div>
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
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price" placeholder="Silakan masukan nama produk"
                                        value="{{ old('price') }}">
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
                                    <select name="toko_id" id="toko_id"
                                        class="form-control @error('toko_id') is-invalid @enderror">
                                        <option value="">-- Pilih --</option>
                                        @foreach ($toko as $row)
                                            <option value="{{ $row->id }}"
                                                {{ old('toko_id') == $row->id ? 'selected' : '' }}>{{ $row->nama }}
                                            </option>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <label class="form-label" for="name">Nama Kategori</label>
                        <input type="text" class="form-control" id="nameCateg" name="name"
                            placeholder="Silakan masukan nama kategori" autofocus value="{{ old('name') }}" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary" id="saveCateg">Simpan</button>
                    </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
    <script src="{{ asset('vendor') }}/sweetalert/sweetalert.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $("#saveCateg").click(function(e) {
            e.preventDefault();
            let token = $("meta[name='csrf-token']").attr("content");
            let name = $('#nameCateg').val();
            $.ajax({
                url: `/storeCategory`,
                type: "POST",
                dataType: "json",
                data: {
                    "name": name,
                    "_token": token
                },
                success: function(response) {
                    swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.message,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    </script>
@endsection
