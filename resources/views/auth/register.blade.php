@extends('layout');

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Signup</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Signup</button>

            <hr class="my-3">

            <button class="btn btn-outline-primary w-100 mb-2">Signup with Facebook</button>
            <button class="btn btn-outline-danger w-100">Signup with Google</button>
        </form>
    </div>
</div>
@endsection
