@extends('layouts.main')

@section('title', 'Kategori')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Kategori</h4>
        </div>
    </div>
</div>
<!-- end page title -->


<div class="row">
    <div class="col-lg">
        @if (session('msg'))
        <div class="alert alert-success">{{ session('msg') }}</div>
        @endif
        <!-- Simple card -->
        <div class="card">
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary mb-3 btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data <i class="uil uil-plus"></i>
                    </button>
                </div>

                <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Slug</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $row)
                        <tr>
                            <input type="hidden" class="delete_id" value="{{ $row->id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->slug }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{ $row->id }}"><i class="mdi mdi-pencil"></i></button>
                                    <button class="btn btn-danger btndelete" data-id="{{ $row->id }}"><i class="mdi mdi-trash-can"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- end card-body-->
        </div> <!-- end card-->

    </div><!-- end col -->
</div>

<!-- Modal Add -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kategori.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <label class="form-label" for="name">Nama Kategori</label>
                    <input type="text" class="form-control" name="name" placeholder="Silakan masukan nama kategori" autofocus value="{{ old('name') }}" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@foreach ($categories as $row)
<!-- Modal Edit -->
<div class="modal fade" id="exampleModalEdit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kategori.update', $row->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <label class="form-label" for="name">Nama Kategori</label>
                    <input type="text" class="form-control" name="name" placeholder="Silakan masukan nama kategori" autofocus value="{{ $row->name }}" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@include('sweetalert::alert')
<script src="{{ asset('vendor') }}/sweetalert/sweetalert.all.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(".btndelete").click(function() {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");

        Swal.fire({
            title: 'Hapus',
            text: "Apakah anda yakin ingin menghapus?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "kategori/" + id,
                    type: 'DELETE',
                    data: {
                        "id": id,
                        "_token": token,
                    },
                    success: function(response) {
                        swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.status,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    },
                });
            }
        })
    });
</script>
@endsection