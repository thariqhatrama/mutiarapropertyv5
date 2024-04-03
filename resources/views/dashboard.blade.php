@extends('dashboard.layouts.main')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 px-3">
          <h1>Kelola Artikel</h1>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container">
      <form action="/dashboard/admin" method="post">
        @csrf
        <div class="mb-3">
          <label for="artikel" class="form-label">Judul Artikel</label>
          <input type="text" class="form-control" id="artikel">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Thumbnail Berita</label>
          <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
          <label for="isi-artikel" class="form-label">Isi Artikel</label>
          <textarea class="form-control" id="isi-artikel" rows="5"></textarea>
        </div>
        <div class="">
          <button type="submit" class="btn btn-primary btn-block">Tambah Artikel</button>
      </div>
      </form>
    </div>
  </section>
</div>
@endsection