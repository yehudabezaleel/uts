<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaCont extends Controller
{
    public function index() {
        $mahasiswa = DB::table('mahasiswa')->get();

        return view ('pages.mahasiswa', ['mhs'=>$mahasiswa]);
    }

    public function addMhs() {
        return view ('pages.addMahasiswa');
    }

    public function create(Request $req) {
        $nama = $req->nama;
        $nim = $req->nim;
        $email = $req->email;
        $no_telp = $req->no_telp;
        $prodi = $req->prodi;
        $jurusan = $req->jurusan;
        $fakultas = $req->fakultas;

        DB::table('mahasiswa')->insert([
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'no_telp' => $no_telp,
            'prodi' => $prodi,
            'jurusan' => $jurusan,
            'fakultas' => $fakultas
        ]);

        return redirect ('mahasiswa')->with('success', 'Data berhasil ditambahkan.');
    }

    public function editMhs($id){
        $mahasiswa = DB::table('mahasiswa')->where('id_mahasiswa',$id)->first();

        return view ('pages.editMahasiswa', compact('mahasiswa'));
    }

    public function updateMhs(Request $req, $id){
        $nama = $req->nama;
        $nim = $req->nim;
        $email = $req->email;
        $no_telp = $req->no_telp;
        $prodi = $req->prodi;
        $jurusan = $req->jurusan;
        $fakultas = $req->fakultas;

        DB::table('mahasiswa')->where('id_mahasiswa', $id)->update([
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'no_telp' => $no_telp,
            'prodi' => $prodi,
            'jurusan' => $jurusan,
            'fakultas' => $fakultas
        ]);
        return redirect ('mahasiswa')->with('success', 'Data berhasil diubah.');
    }

    public function delete($id)
    {
        $data = DB::table('transaksi')->where(['id_mahasiswa' => $id, 'status_pinjam' => 1])->first();
        if ($data) {
            return redirect('/mahasiswa');
        } else {
            DB::table('mahasiswa')->where('id_mahasiswa', $id)->delete();
            return redirect('/mahasiswa');
        }
    }

}
