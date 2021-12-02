<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bukuCont extends Controller
{
    public function index() {
        $buku = DB::table('buku')->get();

        return view ('pages.buku', ['bk'=>$buku]);
    }

    public function addBuku() {
        return view ('pages.addBuku');
    }

    public function createBuku(Request $req) {
        $judul_buku = $req->judul_buku;
        $pengarang = $req->pengarang;
        $penerbit = $req->penerbit;
        $tahun_terbit = $req->tahun_terbit;
        $tebal = $req->tebal;
        $isbn = $req->isbn;
        $stok_buku = $req->stok_buku;
        $biaya_sewa_harian = $req->biaya_sewa_harian;

        DB::table('buku')->insert([
            'judul_buku' => $judul_buku,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'tebal' => $tebal,
            'isbn' => $isbn,
            'stok_buku' => $stok_buku,
            'biaya_sewa_harian' => $biaya_sewa_harian,
        ]);
        return redirect ('/buku')->with('success', 'Data berhasil ditambahkan.');
    }

    public function editBuku($id){
        $buku = DB::table('buku')->find($id);

        return view ('pages.editBuku', compact('buku'));
    }

    public function updateBuku(Request $req, $id){
        $judul_buku = $req->judul_buku;
        $pengarang = $req->pengarang;
        $penerbit = $req->penerbit;
        $tahun_terbit = $req->tahun_terbit;
        $tebal = $req->tebal;
        $isbn = $req->isbn;
        $stok_buku = $req->stok_buku;
        $biaya_sewa_harian = $req->biaya_sewa_harian;

        DB::table('buku')->where('id', $id)->update([
            'judul_buku' => $judul_buku,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'tebal' => $tebal,
            'isbn' => $isbn,
            'stok_buku' => $stok_buku,
            'biaya_sewa_harian' => $biaya_sewa_harian,
        ]);
        return redirect ('/buku')->with('success', 'Data berhasil diubah.');
    }

    public function deleteBuku($id)
    {
        DB::table('buku')->where('id', $id)->delete();
        return redirect('/buku')->with('success', 'Data berhasil dihapus.');
    }

}
