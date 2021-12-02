@extends('layout.layout')
@section('content')
@section('title')
    Manajemen Data Buku
@endsection
@section('header')
    Manajemen Data
@endsection
@section('subheader')
    Data Buku
@endsection
    @if($message = Session::get('success'))
        <div class="alert alert-success d-inline-flex" role="alert">
        {{ $message }} 
        </div>
    @endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Buku
    </div>
    <div class="card-body">
        <table class="text-center" id="datatablesSimple">
            <div class="btn-group btn-group-sm mb-2" role="group">
                <a href="/addBuku" class="btn btn-primary "><i class="bi bi-plus-circle"></i> Add Data</a>
            </div>
            <thead>
                <tr>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Tebal</th>
                    <th>ISBN</th>
                    <th>Stok</th>
                    <th>Biaya Sewa</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($bk as $b)
            <tbody>
                <tr>
                    <td>{{ $b->judul_buku }}</td>
                    <td>{{ $b->pengarang }}</td>
                    <td>{{ $b->penerbit }}</td>
                    <td>{{ $b->tahun_terbit }}</td>
                    <td>{{ $b->tebal }} hal.</td>
                    <td>{{ $b->isbn }}</td>
                    <td>{{ $b->stok_buku }}</td>
                    <td>{{ $b->biaya_sewa_harian }}/hari</td>
                    <td class="text-center">
                        <div class="btn-group me-1 btn-group-sm" role="group">
                            <a href="/editBuku/{{$b->id_buku}}" class="btn btn-warning"><i class='bi bi-pencil-square'></i></a>
                        </div>
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="/deleteBuku/{{$b->id_buku}}" class="btn btn-danger"><i class='bi bi-trash'></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
