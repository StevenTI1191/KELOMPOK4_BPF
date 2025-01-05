@extends('layouts.Navbar')

@section('content')
<!-- Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">List Peminjaman Buku</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjaman</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Batas Pengembalian</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $index => $item)
                            @if ($item->status == 'kembali')
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_peminjaman }}</td>
                                    <td>{{ $item->judul_buku }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_peminjaman)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_batas_pengembalian)->format('d-m-Y') }}</td>
                                    <td>{{ ucfirst($item->status) }}</td>
                                </tr>
                            @endif
                        @endforeach


                    </tbody>
                </table>
                {!! $peminjaman->links() !!}
            </div>
        </div>
    </div>
</div> <!-- End of container-fluid -->
@endsection
