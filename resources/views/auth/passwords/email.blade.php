@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="alert alert-success mb-3" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="card">
    <div class="card-body p-4">

        <div class="text-center w-85 m-auto">
            <h4 class="text-dark-50 text-center mt-0 fw-bold">Reset Password</h4>
            <p class="text-muted mb-4">Sistem Pelayanan Kuliner Di Kabupaten Kuningan</p>
        </div>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-0 text-center">
                <button class="btn btn-primary" type="submit">Reset Password</button>
            </div>
        </form>
    </div> <!-- end card-body-->
</div>
<!-- end card -->

<div class="row mt-3">
    <div class="col-12 text-center">
        <p class="text-muted">Back to <a href="{{route('login')}}" class="text-muted ms-1"><b>Log In</b></a></p>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection
