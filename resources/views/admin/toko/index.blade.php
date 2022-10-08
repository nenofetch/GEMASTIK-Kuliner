@extends('layouts.main')

@section('title', 'Toko')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Toko</h4>
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
                        <button type="button" class="btn btn-primary mb-3 btn-sm" onclick="window.location='/toko/create'">
                            Tambah Data <i class="uil uil-plus"></i>
                        </button>
                    </div>

                    <table id="selection-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Toko</th>
                                <th>Pemilik</th>
                                <th>Kategori</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($toko as $row)
                                <tr>
                                    <input type="hidden" class="delete_id" value="{{ $row->id }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->pemilik }}</td>
                                    <td>{{ $row->kategori_produk }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" onclick="window.location='/toko/<?= $row->id ?>/edit'"
                                                class="btn btn-warning me-2"><i class="mdi mdi-pencil"></i></button>
                                            <button class="btn btn-danger btndelete" data-id="{{ $row->id }}"><i
                                                    class="mdi mdi-trash-can"></i></button>
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
                        url: "toko/" + id,
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
