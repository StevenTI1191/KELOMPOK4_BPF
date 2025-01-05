@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">Peminjaman Buku & Modul</h1>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Peminjaman Buku & Modul</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>NIM</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($riwayatPeminjaman as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item['nama_peminjam'] }}</td>
                                    <td>{{ $item['nim'] }}</td>
                                    <td>{{ $item['judul_buku'] }}</td>
                                    <td>{{ $item['tgl_pinjam'] }}</td>
                                    <td>{{ $item['tgl_pengembali'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    {!! $riwayatPeminjaman->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
