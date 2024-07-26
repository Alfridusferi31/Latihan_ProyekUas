@extends('layouts.app')

@section('title', 'Register')

@section('header-title', 'Register')

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
                    <form method="POST" action="{{ route('profile.register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"
                                value="{{ old('name') }}" required autofocus>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

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
                            <label for="cpassword" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password"
                                name="password_confirmation" required>
                            @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                            or
                            <a href="{{ route('login') }}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection