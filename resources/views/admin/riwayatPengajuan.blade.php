@extends('layouts.NavbarAdmin')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">Riwayat Pengajuan Buku</h1>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Pengajuan Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengajuan</th>
                                <th>Identitas (NIM/NIP)</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Jenis</th>
                                <th>Judul Buku</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pengajuan as $index => $item)
                                <tr>
                                    <td>{{ $index + $pengajuan->firstItem() }}</td>
                                    <td>{{ $item->nama_pengajuan }}</td>
                                    <td>{{ $item->identitas }}</td>
                                    <td>{{ $item->tgl_pengajuan }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->judul_buku }}</td>
                                    <td>
                                        @if ($item->status === 'terima')
                                            <span class="badge bg-success">Diterima</span>
                                        @elseif ($item->status === 'tolak')
                                            <span class="badge bg-danger">Ditolak</span>
                                        @else
                                            <span class="badge bg-warning">Pending</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data pengajuan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    {!! $pengajuan->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
