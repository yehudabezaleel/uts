@extends('layout.layout')
@section('title')
    Add Data Buku
@endsection
@section('header')
    Manajemen Data Buku
@endsection
@section('subheader')
    Create Data Buku
@endsection
@section('content')
<div class="mb-5">
    <div class="container col-7 p-2">  
        <div class="card p-1">
          <div class="card-body">
                <h4 class="text-dark fw-bold text-center">Add Data Buku</h4>
                <form action="{{'createBuku'}}" method="post" enctype="multipart/form">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="judul_buku" class="form-label">Nama Buku</label>
                    <input type="text" name="judul_buku" class="form-control" id="judul_buku"required>
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" id="pengarang"required>
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" id="penerbit"required>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" class="form-control" id="tahun_terbit"required>
                    </div>
                    <div class="col">
                        <label for="tebal" class="form-label">Tebal</label>
                    <input type="number" name="tebal" class="form-control" id="tebal"required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" name="isbn" class="form-control" id="isbn"required>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="stok_buku" class="form-label">Stok Buku</label>
                        <input type="number" name="stok_buku" class="form-control" id="stok_buku"required>
                    </div>
                    <div class="col">
                        <label for="biaya_sewa_harian" class="form-label">Biaya Sewa</label>
                        <input type="number" name="biaya_sewa_harian" class="form-control" id="biaya_sewa_harian"required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Add Data</button>
                <div class="btn-group btn-group" role="group" aria-label="Third group">
                    <a href="{{'buku'}}" class="btn btn-danger">Cancel</a>
                  </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@endsection
