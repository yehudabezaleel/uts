@extends('layout.layout')
@section('title')
    Update Data Mahasiswa
@endsection
@section('header')
    Manajemen Data Mahasiswa
@endsection
@section('subheader')
    Update Data
@endsection
@section('content')
<div class="mb-5">
    <div class="container col-7 p-2">  
        <div class="card p-1">
          <div class="card-body">
                <h4 class="text-dark fw-bold text-center">Update Data Mahasiswa</h4>
                <form action="/updateMhs/{{ $mahasiswa->id_mahasiswa }}" method="POST" enctype="multipart/form">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" id="nama"required>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" id="nim"required>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" value="{{ $mahasiswa->email }}" class="form-control" id="email"required>
                    </div>
                    <div class="col">
                        <label for="telp" class="form-label">no. telp</label>
                        <input type="text" name="no_telp" value="{{ $mahasiswa->no_telp }}" class="form-control" id="telp"required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" class="form-control" id="prodi"required>
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" class="form-control" id="jurusan"required>
                </div>
                <div class="mb-3">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <input type="text" name="fakultas" value="{{ $mahasiswa->fakultas }}" class="form-control" id="fakultas"required>
                </div>
                <button type="submit" class="btn btn-primary me-2">Save</button>
                <div class="btn-group btn-group" role="group" aria-label="Third group">
                    <a href="/buku" class="btn btn-danger">Cancel</a>
                  </div>
                </form>
            </div>
        </div>
    </div> 
</div>
@endsection
