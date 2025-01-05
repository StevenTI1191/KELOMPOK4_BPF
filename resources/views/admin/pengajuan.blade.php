@extends('layouts.NavbarAdmin')

@section('content')

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">List Pengajuan Buku & Modul</h6>
                <a href="{{ route('pengajuan.create') }}" class="btn btn-primary">
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
                                <th>Status</th> 
                                <th>Aksi</th>  <!-- Kolom Aksi Ditambahkan -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengajuan as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_pengajuan }}</td>
                                    <td>{{ $item->identitas }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->tgl_pengajuan)->format('d-m-Y') }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->judul_buku }}</td>
                                    <td>
                                        @if ($item->status == 'terima')
                                            <span class="badge badge-success">Diterima</span>
                                        @else
                                            <span class="badge badge-danger">Ditolak</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.pengajuan.updateStatus', $item->id) }}">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="terima">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="fa fa-check"></i> Terima
                                            </button>
                                        </form>

                                        <form method="POST" action="{{ route('admin.pengajuan.updateStatus', $item->id) }}" class="mt-1">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="tolak">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-times"></i> Tolak
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $pengajuan->links() !!}
                </div>
            </div>
        </div>
    </div> <!-- End of container-fluid -->
@endsection
