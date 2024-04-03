@extends('dashboard.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 px-3">
                    <h1>Kelola Artikel</h1>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Artikel</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Main content -->
                            <div class="row p-3">
                                <div class="col-lg-4">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-start l-4">
                                        <a href="/dashboard/admin/create" class="btn btn-primary mb-3" type="button">Tambah
                                            Artikel</a>
                                    </div>
                                </div>
                                <!-- /.content -->
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Artikel</th>
                                            <th>Sub Judul</th>
                                            <th>Gambar</th>
                                            <th>Slug</th>
                                            <th>Isi Artikel</th>
                                            <th>Tanggal Dibuat</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($artikels as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->judul }}</td>
                                                <td>{{ $data->subjudul }}</td>
                                                <td>{{ $data->gambar }}</td>
                                                <td>{{ $data->slug }}</td>
                                                <td>{{ $data->body }}</td>
                                                <td>{{ $data->published_at }}</td>
                                                <td>
                                                    <form action="/dashboard/admin/{{ $data->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0"
                                                            onclick="return confirm('Anda Yakin?')"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.control-sidebar -->
@endsection
