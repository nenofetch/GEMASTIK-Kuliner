@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="card">
    <div class="card-body p-4">

        <div class="text-center w-85 m-auto">
            <h4 class="text-dark-50 text-center mt-0 fw-bold">Register</h4>
            <p class="text-muted mb-4">Sistem Pelayanan Kuliner Di Kabupaten Kuningan</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your name">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Confirm Passwordord</label>
                <div class="input-group input-group-merge">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your confirm password">
                </div>
            </div>

            <div class="mb-3 text-center">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div> <!-- end card-body -->
</div>

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-muted">Already have account? <a href="{{ route('login') }}" class="text-muted ms-1"><b>Log In</b></a></p>
    </div> <!-- end col-->
</div>
<!-- end row -->
@endsection
