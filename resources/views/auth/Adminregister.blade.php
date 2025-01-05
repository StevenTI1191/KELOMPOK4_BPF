@extends('layouts.app')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center p-0">
    <div class="row w-100 m-0">
        <!-- Form Register Admin Section (40% layar) -->
        <div class="col-md-5 d-flex justify-content-center align-items-center p-5" style="background-color: #ffffff;">
            <div class="w-100" style="max-width: 400px;">
                <h3 class="text-center mb-3">Daftar sebagai Admin Perpustakaan PCR</h3>
                <p class="text-center text-muted">Silakan isi form di bawah ini untuk membuat akun admin di sistem perpustakaan PCR.</p>
                
                <form method="POST" action="{{ route('admin.register') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan nama lengkap Anda">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan email admin Anda">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Buat kata sandi">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">Konfirmasi Kata Sandi</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan kembali kata sandi">
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Daftar sebagai Admin</button>
                </form>
                <div class="text-center mt-4">
                    <p>Sudah memiliki akun admin? <a href="{{ route('admin.login') }}" class="text-primary">Masuk di sini</a></p>
                </div>
            </div>
        </div>

        <!-- Image Section (60% layar) -->
        <div class="col-md-7 p-0 d-none d-md-block">
            <img src="{{ asset('assets/img/services.jpg') }}" alt="Background Image" class="w-100 vh-100 object-fit-cover">
        </div>
    </div>
</div>
@endsection
