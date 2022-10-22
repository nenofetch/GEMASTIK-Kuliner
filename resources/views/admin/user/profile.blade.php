@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Profile</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ asset('storage/' . $user->foto) }}"
                                class="rounded-circle avatar-lg img-thumbnail img-preview" alt="profile-image">
                            <h4 class="mb-0 mt-2">{{ $user->name }}</h4>
                            <p class="text-muted font-14">{{ $user->hasRole('Administrator') ? 'Administrator' : 'User' }}
                            </p>

                            <div class="text-start mt-3">
                                <p class="text-muted mb-2 font-13"><strong>Name :</strong> <span
                                        class="ms-2">{{ $user->name }}</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span
                                        class="ms-2 ">{{ $user->email }}</span></p>
                                <p class="text-muted mb-2 font-13"><strong>No Telepon :</strong><span class="ms-2">
                                        {{ $user->no_telepon }}</span></p>
                            </div>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>
                <div class="col-xl-8 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('update-profile') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label" for="name">Nama</label>
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" placeholder="Silakan masukan nama" autofocus
                                        autocomplete="off" value="{{ $user->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" placeholder="Silakan masukan nama" autocomplete="off"
                                        value="{{ $user->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="no_telepon">No Telepon</label>
                                    <input type="number" class="form-control @error('no_telepon') is-invalid @enderror"
                                        id="no_telepon" name="no_telepon" placeholder="Silakan masukan No Telepon"
                                        autocomplete="off" value="{{ $user->no_telepon }}">
                                    @error('no_telepon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="foto">Foto</label>
                                    <input type="file"
                                        class="form-control @error('foto') is-invalid @enderror img-preview" id="foto"
                                        name="foto" autocomplete="off" value="{{ $user->foto }}" accept="image/*"
                                        onchange="previewImg()">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary" id="save">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div>
            </div>
        </div><!-- end col -->
    </div>
@endsection

@include('sweetalert::alert')
<script src="{{ asset('vendor') }}/sweetalert/sweetalert.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    function previewImg() {
        const foto = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');
        const fileFoto = new FileReader();

        fileFoto.readAsDataURL(foto.files[0]);

        fileFoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
