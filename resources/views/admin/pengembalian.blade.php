@extends('layouts.NavbarAdmin')
@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1 class="h3 mb-0 text-gray-800">Pengembalian Buku & Modul</h1>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Pengembalian Buku & Modul</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>NIM/NIP</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Jenis</th>
                                <th>Judul Buku</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengembalian as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item['nama_peminjam'] }}</td>
                                    <td>{{ $item['nim'] }}</td>
                                    <td>
                                        <input type="date" class="form-control tgl-pengembalian"
                                            data-id="{{ $item['id'] }}"
                                            value="{{ $item['tgl_pengembali'] ? \Carbon\Carbon::parse($item['tgl_pengembali'])->format('Y-m-d') : '' }}">
                                    </td>
                                    <td>{{ $item['jenis'] }}</td>
                                    <td>{{ $item['judul_buku'] }}</td>
                                    <td>
                                        <select
                                            class="form-control status-dropdown {{ $item['status'] == 'Sudah' ? 'bg-success text-white' : 'bg-danger text-white' }}"
                                            data-id="{{ $item['id'] }}">
                                            <option value="Belum" {{ $item['status'] == 'Belum' ? 'selected' : '' }}>Belum
                                            </option>
                                            <option value="Sudah" {{ $item['status'] == 'Sudah' ? 'selected' : '' }}>Sudah
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    {{ $pengembalian->links() }}

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.status-dropdown').on('change', function() {
                var status = $(this).val();
                var id = $(this).data('id');
                var tglPengembalian = $('.tgl-pengembalian[data-id="' + id + '"]').val();
                var dropdown = $(this);

                $.ajax({
                    url: '{{ route('pengembalian.update', ['pengembalian' => ':id']) }}'.replace(':id',
                        id),
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        _method: 'PUT', // Gunakan method PUT untuk update
                        status: status,
                        tgl_pengembali: tglPengembalian
                    },
                    success: function(response) {
                        alert('Status dan Tanggal Pengembalian updated successfully');
                        // Hapus kelas warna sebelumnya dan tambahkan yang baru
                        dropdown.removeClass('bg-success bg-danger text-white');
                        if (status == 'Sudah') {
                            dropdown.addClass('bg-success text-white');
                        } else {
                            dropdown.addClass('bg-danger text-white');
                        }
                    },
                    error: function(response) {
                        alert('Error updating status dan tanggal pengembalian');
                    }
                });
            });
        });
    </script>
@endsection
