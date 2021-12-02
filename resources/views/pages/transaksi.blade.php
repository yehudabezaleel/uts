@extends('layout.layout')
@section('content')
@section('title')
    Manajemen Data Transaksi
@endsection
@section('header')
    Manajemen Data
@endsection
@section('subheader')
    Data Transaksi
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
                <a href="/addTransaksi" class="btn btn-primary "><i class="bi bi-plus-circle"></i> Add Data</a>
            </div>
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status Pinjam</th>
                    <th>Total Biaya</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach($tr as $t)
            <tbody>
                <tr>
                    <td>{{ $t->nama }}</td>
                    <td>{{ $t->judul_buku }}</td>
                    <td>{{ $t->tanggal_pinjam }}</td>
                    <td>{{ $t->tanggal_kembali }}</td>
                    <td>
                        @if($t->status_pinjam == 1)
                        <a href="/status/edit/{{ $t ->id_transaksi }}" class="btn-primary btn ">Dipinjam</a>
                        @else
                        <a href="/transaksi" class="btn-danger btn">Dikembalikan</a>
                        @endif
                    </td>
                    <td>{{ $t->total_biaya }}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            @if($t->status_pinjam == 1)
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="/editTransaksi/{{ $t->id_transaksi }}" class="btn btn-warning"><i class='bi bi-pencil-square'></i></a>
                            </div>
                            @elseif($t->status_pinjam == 0)
                            <div class="btn-group btn-group-sm" role="group">
                                <a href="/deleteTransaksi/{{ $t->id_transaksi }}" class="btn btn-danger"><i class='bi bi-trash'></i></a>
                            </div>
                            @endif
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
