@extends('layout.layout')
@section('content')
@section('title')
    Home
@endsection
@section('header')
    Home
@endsection
    <div class="card m-2">
        <div class="card-header">
        Welcome Messages
        </div>
        <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>Selamat datang di Sistem Informasi Manajemen Perpustakaan ASTRONIX! <br> 
            Di sini Anda dapat mengelola data mahasiswa, data buku, dan data transaksi.</p>
        </blockquote>
        </div>
    </div> <br>
    <div class="row justify-content-center">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Data Mahasiswa</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ 'mahasiswa' }}">Kelola data</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Data Buku</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ 'buku' }}">Kelola data</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Data Transaksi</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ 'transaksi' }}">Kelola data</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
@endsection