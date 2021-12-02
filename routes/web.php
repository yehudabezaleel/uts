<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\transaksiCont;
Route::get('/', [App\Http\Controllers\homeCont::class,'index'])->name('home');

//Mahasiswa
Route::get('/mahasiswa', [App\Http\Controllers\mahasiswaCont::class,'index'])->name('mahasiswa');

Route::get('/addMahasiswa', [App\Http\Controllers\mahasiswaCont::class,'addMhs'])->name('addMhs');

Route::post('/createMhs', [App\Http\Controllers\mahasiswaCont::class,'create'])->name('createMhs');

Route::get('editMahasiswa/{id}', [App\Http\Controllers\mahasiswaCont::class,'editMhs'])->name('editMahasiswa');

Route::post('/updateMhs/{id}', [App\Http\Controllers\mahasiswaCont::class,'updateMhs'])->name('updateMhs');

Route::get('/delete/{id}', [App\Http\Controllers\mahasiswaCont::class,'delete'])->name('delete');

//Buku
Route::get('/buku', [App\Http\Controllers\bukuCont::class,'index'])->name('buku');

Route::get('/addBuku', [App\Http\Controllers\bukuCont::class,'addBuku'])->name('addBuku');

Route::post('/createBuku', [App\Http\Controllers\bukuCont::class,'createBuku'])->name('createBuku');

Route::get('/editBuku/{id}', [App\Http\Controllers\bukuCont::class,'editBuku'])->name('editBuku');

Route::post('/updateBuku/{id}', [App\Http\Controllers\bukuCont::class,'updateBuku'])->name('updateBuku');

Route::get('/deleteBuku/{id}', [App\Http\Controllers\bukuCont::class,'deleteBuku'])->name('deleteBuku');

//Transaksi
Route::get('/transaksi', [transaksiCont::class,'index'])->name('transaksi');

Route::get('/addTransaksi', [transaksiCont::class,'addTransaksi'])->name('addTransaksi');

Route::post('/createTransaksi', [transaksiCont::class,'createTransaksi'])->name('createTransaksi');

Route::get('/editTransaksi/{id}', [transaksiCont::class,'editTransaksi'])->name('editTransaksi');

Route::post('/updateTransaksi/{id}', [transaksiCont::class,'updateTransaksi'])->name('updateTransaksi');

Route::get('/deleteTransaksi/{id}', [transaksiCont::class,'deleteTransaksi'])->name('deleteTransaksi');
//status peminjaman
Route::get('/status/edit/{id}', [transaksiCont::class, 'status']);

