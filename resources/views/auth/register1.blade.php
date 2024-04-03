@extends('layouts.laymas')

@section('content')

<section class="register">

      <div class="regist">
            <div class="mx-auto">
                <div class="header mb-5">
                <h1>SIGN UP</h1>
                <p>Create a new account</p>
                </div>
                <div class="login-form">
                    {{-- <form method="POST" action="{{ route('register') }}"> --}}
                    <form>
                    @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Your Email" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Phone Number</label>
                            <input type="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Enter Your Phone Number" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp"/>
                            @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter Password" name="password" required autocomplete="new-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">Password Confirm</label>
                            <input type="password" class="form-control" id="password-confirm" placeholder="Enter Password" name="password_confirmation" required autocomplete="new-password"/>
                        </div>
                        <div class="button-login mb-3 text-center">
                            <button type="submit" class="btn btn-danger">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </section>
@endsection
