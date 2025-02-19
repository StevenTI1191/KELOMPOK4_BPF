@extends('layouts.Navbar')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Buku & Modul</h1>
        </div>

        <!-- Content -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Buku & Modul yang tersedia</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku/Modul</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item['judul_buku'] }}</td>
                                    <td>
                                        @if ($item->status == 'terima')
                                            <span class="badge badge-danger">Kosong</span>
                                        @else
                                            <span class="badge badge-success">Tersedia</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $buku->links() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
