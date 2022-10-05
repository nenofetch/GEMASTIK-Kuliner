@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="card">
    <div class="card-body p-4">
        <div class="text-center w-85 m-auto">
            <h4 class="text-dark-50 text-center pb-0 fw-bold">{{ __('Login') }}</h4>
            <p class="text-muted mb-4">Sistem Pelayanan Kuliner Di Kabupaten Kuningan</p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="emailaddress" class="form-label">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                @if (Route::has('password.request'))
                <a class="text-muted float-end" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif

                <label for="password" class="form-label">{{ __('Password') }}</label>
                <div class="input-group input-group-merge">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="mb-3 mb-0 text-center">
                <button class="btn btn-primary" type="submit"> Log In </button>
            </div>
        </form>
    </div> <!-- end card-body -->
</div>
<!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Sign Up</b></a></p>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection
