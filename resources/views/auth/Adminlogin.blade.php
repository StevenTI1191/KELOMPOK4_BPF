@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center p-0">
    <div class="row w-100 m-0">
        <!-- Form Login Section (40% dari lebar layar) -->
        <div class="col-md-5 d-flex justify-content-center align-items-center p-5" style="background-color: #ffffff;">
            <div class="w-100" style="max-width: 400px;">
                <h3 class="text-center mb-3">Login Admin Perpustakaan PCR</h3>
                <p class="text-center text-muted">Silakan masuk ke akun Admin untuk mengelola sistem Perpustakaan PCR.</p>
                
                <form method="POST" action="{{ route('admin.login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan email admin">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan password admin">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                        <a class="text-decoration-none" href="{{ route('password.request') }}">Lupa Password</a>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Masuk sebagai Admin</button>
                </form>
                <div class="text-center mt-4">
                    <p>Belum punya akun? <a href="{{ route('admin.register') }}" class="text-primary">Daftar sebagai Admin</a></p>
                </div>
            </div>
        </div>

        <!-- Image Section (60% dari lebar layar) -->
        <div class="col-md-7 p-0 d-none d-md-block">
            <img src="{{ asset('assets/img/services.jpg') }}" alt="Background Image" class="w-100 vh-100 object-fit-cover">

        </div>
    </div>
</div>
@endsection
