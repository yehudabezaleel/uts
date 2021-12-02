@extends('layout.layout')
@section('title')
    Update Data Transaksi
@endsection
@section('header')
    Manajemen Data Transaksi
@endsection
@section('subheader')
    Update Data
@endsection
@section('content')
<div class="mb-5">
    <div class="container col-7 p-2">  
        <div class="card p-1">
            <div class="card-body">
                <h4 class="text-dark fw-bold text-center">Edit Data Transaksi</h4>
                <form action="/updateTransaksi/{{$transaksi->id_transaksi}}" method="post" enctype="multipart/form">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <div class="col">
                        <label for="idMhs" class="form-label">Nama Mahasiswa</label>
                        <select class="form-select" name="id_mahasiswa" id="idMhs" required>
                            @foreach ($data as $mahasiswas)
                                <option value="{{$mahasiswas->id_mahasiswa}}">
                                    {{$mahasiswas->nama}}
                                </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col">
                        <label for="idBuku" class="form-label">Judul Buku</label>
                        <select class="form-select" name="id_buku" id="idBuku" required>
                            @foreach ($data2 as $bukus)
                            <option value="{{$bukus->id_buku}}">
                                {{$bukus->judul_buku}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
               
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <div class="btn-group btn-group" role="group" aria-label="Third group">
                    <a href="/transaksi" class="btn btn-danger">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
