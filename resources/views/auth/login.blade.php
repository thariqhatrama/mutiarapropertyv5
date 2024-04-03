@extends('layouts.laymas')
@section('content')

  <div class="login-box">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
      </div>
    @endif

<div class="login-logo">
  <h2>Mutiara Property</h2>
</div>
<!-- /.login-logo -->
<main class="form-signin">
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">LOGIN</p>

    <form action="/login" method="post">
      @csrf
      <div class="input-group mb-3">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
        id="email" placeholder="Masukkan Email"  value="{{ old('email') }}" autofocus required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Password" required>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>
      </div>
        <div class="button-login">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </form>
  </div>
  <!-- /.login-card-body -->
</div>
</main>
</div>
<!-- /.login-box -->
@endsection
