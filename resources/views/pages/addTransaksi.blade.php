@extends('layout.layout')
@section('title')
    Add Data Transaksi
@endsection
@section('header')
    Manajemen Data Transaksi
@endsection
@section('subheader')
    Create Data Transaksi
@endsection
@section('content')
<div class="mb-5">
    <div class="container col-7 p-2">  
        <div class="card p-1">
            <div class="card-body">
                <h4 class="text-dark fw-bold text-center">Add Data Transaksi</h4>
                <form action="{{'createTransaksi'}}" method="post" enctype="multipart/form">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <div class="col">
                        <label for="idMhs" class="form-label">Nama Mahasiswa</label>
                        <select class="form-select" name="id_mahasiswa" id="idMhs" required>
                            <option selected disabled>Select</option>
                            @foreach ($mahasiswa as $m)
                                <option value="{{ $m->id_mahasiswa }}">{{ $m->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="idBuku" class="form-label">Judul Buku</label>
                        <select class="form-select" name="id_buku" id="id_buku" required>
                            <option selected disabled>Select</option>
                            @foreach ($buku as $b)
                                <option value="{{ $b->id_buku }}">{{ $b->judul_buku}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                    <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam"required>
                </div>
                <button type="submit" class="btn btn-primary me-2">Add Data</button>
                <div class="btn-group btn-group" role="group" aria-label="Third group">
                    <a href="{{'transaksi'}}" class="btn btn-danger">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
