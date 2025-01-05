@extends('layouts.appCRUD')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">Update Peminjaman</h1>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Update Peminjaman</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('peminjam.update', $peminjam->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_peminjam">Nama Peminjaman</label>
                        <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam"
                            value="{{ $peminjam->nama_peminjam }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim"
                            value="{{ $peminjam->nim }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pinjam">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam"
                            value="{{ $peminjam->tgl_pinjam }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <select class="form-control" id="jenis" name="jenis" required>
                            <option value="Buku" {{ $peminjam->jenis == 'Buku' ? 'selected' : '' }}>Buku</option>
                            <option value="Modul" {{ $peminjam->jenis == 'Modul' ? 'selected' : '' }}>Modul</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                            value="{{ $peminjam->judul_buku }}" required>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('peminjam.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
