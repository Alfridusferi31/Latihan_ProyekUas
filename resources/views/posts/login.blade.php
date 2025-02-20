@extends('layouts.app')

@section('title', 'Login')

@section('header-title', 'Login')

@section('content')
<style>
.custom-card {
    background-color: #D3D3D3;
    border: 1px solid #007BFF;
    /* Garis tepian dengan warna biru */
    border-radius: 0.575rem;
    /* Sesuaikan dengan radius sudut jika perlu */
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card custom-card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email Address" name="email"
                                value="{{ old('email') }}" required>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                name="password" required>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }}
                                    name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            or
                            <a href="{{ route('profile.register') }}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection