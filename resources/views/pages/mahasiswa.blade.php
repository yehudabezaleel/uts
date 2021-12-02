@extends('layout.layout')
@section('content')
@section('title')
    Manajemen Data Mahasiswa
@endsection
@section('header')
    Manajemen Data
@endsection
@section('subheader')
    Data Mahasiswa
@endsection
    @if($message = Session::get('success'))
        <div class="alert alert-success d-inline-flex" role="alert">
        {{ $message }} 
        </div>
    @endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Mahasiswa
    </div>
    <div class="card-body">
        <table class="text-center" id="datatablesSimple">
            <div class="btn-group btn-group-sm mb-2" role="group">
                <a href="{{ ('addMahasiswa') }}" class="btn btn-primary "><i class="bi bi-plus-circle"></i> Add Data</a>
            </div>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>no. telp</th>
                    <th>Prodi</th>
                    <th>Jurusan</th>
                    <th>Fakultas</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($mhs as $m)
            <tbody>
                <tr>
                    <td>{{ $m->nama }}</td>
                    <td>{{ $m->nim }}</td>
                    <td>{{ $m->email }}</td>
                    <td>{{ $m->no_telp }}</td>
                    <td>{{ $m->prodi }}</td>
                    <td>{{ $m->jurusan }}</td>
                    <td>{{ $m->fakultas }}</td>
                    <td class="text-center">
                        <div class="btn-group me-1 btn-group-sm" role="group">
                            <a href="/editMahasiswa/{{ $m->id_mahasiswa }}" class="btn btn-warning"><i class='bi bi-pencil-square'></i></a>
                        </div>
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="/delete/{{ $m->id_mahasiswa }}" class="btn btn-danger"><i class='bi bi-trash'></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection