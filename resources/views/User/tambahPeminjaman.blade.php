@extends('layouts.Navbar')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Peminjaman Buku</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.peminjaman.store') }}">
                        @csrf

                        <!-- Nama Peminjaman -->
                        <div class="form-group">
                            <label for="nama_peminjaman">Nama Peminjaman</label>
                            <input type="text" class="form-control @error('nama_peminjaman') is-invalid @enderror" 
                                   id="nama_peminjaman" name="nama_peminjaman" value="{{ old('nama_peminjaman') }}" required>
                            @error('nama_peminjaman')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Pilih Buku -->
                        <div class="form-group">
                            <label for="buku_id">Pilih Buku</label>
                            <select class="form-control @error('buku_id') is-invalid @enderror" id="buku_id" name="buku_id" required>
                                <option value="">-- Pilih Buku --</option>
                                @foreach ($bukuList as $book)
                                    <option value="{{ $book->id }}" {{ old('buku_id') == $book->id ? 'selected' : '' }}>
                                        {{ $book->judul_buku }}
                                    </option>
                                @endforeach
                            </select>
                            @error('buku_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tanggal Peminjaman -->
                        <div class="form-group">
                            <label for="tgl_peminjaman">Tanggal Peminjaman</label>
                            <input type="date" class="form-control @error('tgl_peminjaman') is-invalid @enderror" 
                                   id="tgl_peminjaman" name="tgl_peminjaman" value="{{ old('tgl_peminjaman') }}" required>
                            @error('tgl_peminjaman')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tanggal Batas Pengembalian -->
                        <div class="form-group">
                            <label for="tgl_batas_pengembalian">Tanggal Batas Pengembalian</label>
                            <input type="date" class="form-control @error('tgl_batas_pengembalian') is-invalid @enderror" 
                                   id="tgl_batas_pengembalian" name="tgl_batas_pengembalian" value="{{ old('tgl_batas_pengembalian') }}" required>
                            @error('tgl_batas_pengembalian')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Ajukan Peminjaman</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
