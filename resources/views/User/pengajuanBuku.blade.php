@extends('layouts.Navbar')

@section('content')

<!-- Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">List Pengajuan Buku & Modul</h6>
            <a href="{{ route('user.pengajuanBuku.create') }}" class="btn btn-primary">
                <i class="fa fa-plus-circle"></i> Ajukan
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengajuan</th>
                            <th>Identitas</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Jenis</th>
                            <th>Judul Buku</th>
                            <th>Referensi</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Link Beli</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pengajuan as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_pengajuan }}</td>
                                <td>{{ $item->identitas }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tgl_pengajuan)->format('d-m-Y') }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->judul_buku }}</td>
                                <td>{{ $item->referensi }}</td>
                                <td>{{ $item->pengarang }}</td>
                                <td>{{ $item->penerbit }}</td>
                                <td>{{ $item->link_beli }}</td>
                                <td>
                                    <span class="badge badge-success">Diterima</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center">Tidak ada data pengajuan yang diterima</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $pengajuan->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
