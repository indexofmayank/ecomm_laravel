@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" required autofocus>
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <hr class="my-3">

            <button class="btn btn-outline-primary w-100 mb-2">Login with Facebook</button>
            <button class="btn btn-outline-danger w-100">Login with Google</button>
        </form>
    </div>
</div>
@endsection
