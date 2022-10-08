@extends('layouts.main')

@section('title', 'Toko')

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
        <form action="{{ route('pengguna.update', $users->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Simple card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-secondary mb-3 btn-sm" onclick="window.location='/pengguna'">
                            <i class="uil uil-sign-in-alt"></i> Kembali
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Nama</label>
                                <input type="hidden" name="id" id="id" value="{{ $users->id }}">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Silakan masukan nama" autofocus autocomplete="off" value="{{ $users->name }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Silakan masukan email" autocomplete="off" value="{{ $users->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="password">Kata Sandi</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Silakan masukan kata sandi" autocomplete="off">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="role">Role</label>
                                <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                    <option value="">-- Pilih --</option>
                                    <option value="Administrator" {{ $users->roles->pluck('name')[0] == "Administrator" ? "selected" : "" }}>Administrator</option>
                                    <option value="User" {{ $users->roles->pluck('name')[0] == "User" ? "selected" : "" }}>User</option>
                                </select>
                                @error('role')
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