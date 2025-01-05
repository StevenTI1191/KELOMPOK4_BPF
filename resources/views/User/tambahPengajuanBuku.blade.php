@extends('layouts.Navbar')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Pengajuan Buku & Modul</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.pengajuanBuku.store') }}">
                        @csrf

                        <!-- Nama Pengajuan -->
                        <div class="form-group">
                            <label for="nama_pengajuan">Nama Pengajuan</label>
                            <input type="text" class="form-control @error('nama_pengajuan') is-invalid @enderror" 
                                   id="nama_pengajuan" name="nama_pengajuan" value="{{ old('nama_pengajuan') }}" required>
                            @error('nama_pengajuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- NIM / NIP -->
                        <div class="form-group">
                            <label for="identitas">NIM / NIP</label>
                            <input type="text" class="form-control @error('identitas') is-invalid @enderror" 
                                id="identitas" name="identitas" value="{{ old('identitas') }}" required>

                            @error('identitas')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tanggal Pengajuan -->
                        <div class="form-group">
                            <label for="tgl_pengajuan">Tanggal Pengajuan</label>
                            <input type="date" class="form-control @error('tgl_pengajuan') is-invalid @enderror" 
                                   id="tgl_pengajuan" name="tgl_pengajuan" value="{{ old('tgl_pengajuan') }}" required>
                            @error('tgl_pengajuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Jenis -->
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                                <option value="Buku" {{ old('jenis') == 'Buku' ? 'selected' : '' }}>Buku</option>
                                <option value="Modul" {{ old('jenis') == 'Modul' ? 'selected' : '' }}>Modul</option>
                            </select>
                            @error('jenis')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Judul Buku -->
                        <div class="form-group">
                            <label for="judul_buku">Judul Buku</label>
                            <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" 
                                   id="judul_buku" name="judul_buku" value="{{ old('judul_buku') }}" required>
                            @error('judul_buku')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Ajukan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
