<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transaksiCont extends Controller
{
    public function index() {
        $transaksi = DB::table('transaksi')
        ->join('mahasiswa', 'transaksi.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
        ->join('buku', 'transaksi.id_buku', '=', 'buku.id_buku')
        ->get();
    return view('pages.transaksi', ['tr' => $transaksi]);
    }

    public function addTransaksi() {
        $mahasiswa = DB::table('mahasiswa')->get();
        $buku = DB::table('buku')->get();
        return view('pages.addTransaksi', 
            [
                'mahasiswa' => $mahasiswa, 
                'buku' => $buku
            ]
        );
    }

    public function createTransaksi( Request $req) {
        $id_mahasiswa = $req->id_mahasiswa;
        $id_buku = $req->id_buku;
        $tanggal_pinjam = $req->tanggal_pinjam;
        $status_pinjam = '1';
        $total_biaya = '0';

        DB::table('transaksi')->insert([
            'id_mahasiswa' => $id_mahasiswa,
            'id_buku' => $id_buku,
            'tanggal_pinjam' => $tanggal_pinjam,                  
            'status_pinjam' => $status_pinjam,
            'total_biaya' => $total_biaya
        ]);
        DB::table('buku')->where('id_buku', $req->id_buku)->decrement('stok_buku');
        return redirect ('transaksi')->with('success', 'Data berhasil ditambahkan.');

    }
    
    public function editTransaksi($id)
    {
        $transaksi = DB::table('transaksi')->where('id_transaksi', $id)->first();

        $data = DB::table('mahasiswa')->get();
        $data2 = DB::table('buku')->get();

        return view('pages.editTransaksi', ['transaksi' => $transaksi,  'data' => $data, 'data2' => $data2]);
    }
    public function updateTransaksi(Request $request, $id)
    {
        DB::table('transaksi')->where('id_transaksi', $id)->update([
            'id_mahasiswa' => $request->id_mahasiswa,
            'id_buku' => $request->id_buku,
        ]);

        return redirect('/transaksi');
    }

    public function deleteTransaksi($id) 
    {
        DB::table('transaksi')->where('id_transaksi', $id)->delete();
        return redirect('/transaksi')->with('success', 'Data berhasil dihapus.');
    }
    public function status(Int $id)
    {
        date_default_timezone_set('Asia/Singapore');
        $tanggal = date("Y-m-d H:i:s");
        $data = 0;
        DB::table('transaksi')->where('id_transaksi', $id)->update([
            'status_pinjam' => $data,
            'tanggal_kembali' => $tanggal,
        ]);
        //biaya total
        $data = DB::table('transaksi')->where('id_transaksi', '=', $id)->select(DB::raw('datediff(tanggal_kembali,tanggal_pinjam)'))->get();
        $add = DB::table('transaksi')->where('id_transaksi', $id)->first();
        $dataBuku = DB::table('buku')->where('id_buku', $add->id_buku)->first();

        foreach ($data as $item) {
            $total = 0;
            $total = $total + $dataBuku->biaya_sewa_harian;
        }
        DB::table('transaksi')->where('id_transaksi', $id)->update(['total_biaya' => $total]);
        //add stok
        $add = DB::table('transaksi')->where('id_transaksi', $id)->first();
        DB::table('buku')->where('id_buku', $add->id_buku)->increment('stok_buku');
        return redirect('/transaksi');
    }
}
