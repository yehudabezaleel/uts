@extends('layout.layout')
@section('title')
    Update Data Buku
@endsection
@section('header')
    Manajemen Data Buku
@endsection
@section('subheader')
    Update Data
@endsection
@section('content')
<div class="mb-5">
    <div class="container col-7 p-2">  
        <div class="card p-1">
          <div class="card-body">
                <h4 class="text-dark fw-bold text-center">Edit Data Buku</h4>
                <form action="/updateBuku/{{$buku->id}}" method="post">
                    {{ csrf_field() }}
                <div class="mb-3">
                    <label for="nama" class="form-label">Judul Buku</label>
                    <input type="text" name="judul_buku" value="{{$buku->judul_buku }}" class="form-control" id="nama"required>
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input value="{{$buku->pengarang }}" type="text" name="pengarang" class="form-control" id="nim"required>
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control" id="email"required>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" value="{{$buku->tahun_terbit}}" class="form-control" id="telp"required>
                    </div>
                    <div class="col">
                        <label for="tebal" class="form-label">Tebal</label>
                        <input type="number" value="{{ $buku->tebal }}" name="tebal" class="form-control" id="prodi"required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" value="{{ $buku->isbn }}" name="isbn" class="form-control" id="jurusan"required>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="stok_buku" class="form-label">Stok Buku</label>
                        <input type="number" value="{{$buku->stok_buku }}" name="stok_buku" class="form-control" id="fakultas"required>
                    </div>
                    <div class="col">
                        <label for="biaya_sewa_harian" class="form-label">Biaya Sewa</label>
                        <input type="number" value="{{$buku->biaya_sewa_harian }}" name="biaya_sewa_harian" class="form-control" id="fakultas"required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <div class="btn-group btn-group" role="group" aria-label="Third group">
                    <a href="/buku" class="btn btn-danger">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@endsection
