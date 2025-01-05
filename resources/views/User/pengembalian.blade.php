@extends('layouts.Navbar')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pengembalian Buku</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengembalian as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->judul_buku }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_pengajuan)->format('d-m-Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_pengembalian)->format('d-m-Y') }}</td>
                                    <td>{{ ucfirst($item->status) }}</td>
                                    <td>
                                        <a href="{{ route('pengembalian.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('pengembalian.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('pengembalian.destroy', $item->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $pengembalian->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
