@extends('layouts.app')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pengajuan Buku & Modul</h1>
        </div>

        <!-- Content -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Pengajuan Buku & Modul</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengaju</th>
                                <th>NIM/NIP</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Jenis</th>
                                <th>Judul Buku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaju as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item['nama_pengaju'] }}</td>
                                    <td>{{ $item['nim'] }}</td>
                                    <td>{{ $item['tgl_pengajuan'] }}</td>
                                    <td>{{ $item['jenis'] }}</td>
                                    <td>{{ $item['judul_buku'] }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm">Terima</button>
                                        <button class="btn btn-danger btn-sm">Tolak</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $pengaju->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
