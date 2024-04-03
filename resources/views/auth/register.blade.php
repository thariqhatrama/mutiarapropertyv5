@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2 px-3">
                    <h1>Tambah User</h1>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">

        </section>
        <div class="container-fluid">
            <div class="d-flex justify-content-lg-center align-items-lg-center">
                <div class="login-box">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="login-logo">
                        <b>Mutiara Property</b>
                    </div>
                    <!-- /.login-logo -->
                    <main class="form-signin">
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Tambah User</p>

                                <form action="/dashboard/kelola-user" method="post">
                                    @csrf
                                    <div class="input-group mb-lg-3">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Masukkan Nama" required value="{{ old('name') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-lg-3">
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Masukkan Email" required value="{{ old('email') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-lg-3">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            placeholder="Password" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-lg-3">
                                        <input type="text" name="tempat_lahir"
                                            class="form-control @error('tempat_lahir') is-invalid @enderror"
                                            id="tempat_lahir" placeholder="Masukkan Kota" required
                                            value="{{ old('tempat_lahir') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                @error('tempat_lahir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-lg-3">
                                        <input type="date" name="tanggal_lahir"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            id="tanggal_lahir" placeholder="MM/DD/YYYY" required
                                            value="{{ old('tanggal_lahir') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                @error('tanggal_lahir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-lg-3">
                                        <input type="text" name="telepon"
                                            class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                                            placeholder="62xxxxxxxxxx" required value="{{ old('telepon') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                @error('telepon')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-primary btn-block">Tambah User</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('../../plugins/jquery/jquery.min.js') }}"></script>
    <!-- bootstrap 5 -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('../../dist/js/adminlte.min.js') }}"></script>
@endsection
