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
                    <button type="button" class="btn btn-primary mb-3 btn-sm" onclick="window.location='/toko/tambah'">
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
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->pemilik}}</td>
                            <td>{{$row->kategori_produk}}</td>
                            <td>{{$row->alamat}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" onclick="window.location='/toko/edit/<?= $row->id ?>'"
                                        class="btn btn-warning me-2"><i class="mdi mdi-pencil"></i></button>
                                    <form action="{{url('toko/'. $row->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class=" btn btn-danger"><i
                                                class="mdi mdi-trash-can" onclick="return confirm('Apakah anda yakin?')"></i></button>
                                    </form>
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
@endsection
