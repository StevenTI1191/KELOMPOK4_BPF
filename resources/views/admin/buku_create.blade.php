@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Buku</div>
                    <div class="card-body">
                        <form action="/admin" method="POST" target="_blank">
                            <div class="row mt-3">
                                <div class="form-group col-md-4">
                                    <label for="judul_buku">Judul Buku/Modul</label>
                                    <input type="text" name="judul_buku" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">-- Semua Data --</option>
                                        <option value="tersedia">Tersedia</option>
                                        <option value="kosong">Kosong</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-primary mt-2">Cetak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
