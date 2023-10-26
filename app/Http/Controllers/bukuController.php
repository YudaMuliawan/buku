<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class bukuController extends Controller
{
    public function buku()
    {
        $data = DB::table('buku')
        ->join('kategori', 'buku.id_kategori', '=', 'kategori.id_kategori')
        ->join('pengarang', 'buku.id_pengarang', '=', 'pengarang.id_pengarang')
        ->select('buku.id','buku.judul', 'buku.tahun', 'kategori.kategori', 'pengarang.nama_pengarang')
        ->get();

        $datakategori = DB::table('kategori')->get();
        $datapengarang = DB::table('pengarang')->get();


        return view('/buku', compact('data','datakategori','datapengarang'));
    }
    public function tambahbuku(Request $request)
    {
	    DB::table('buku')->insert([
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'id_kategori' => $request->kategori,
            'id_pengarang' => $request->pengarang
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect()->back()->with('status', 'Data Buku berhasil Di Tambahkan');
    }
    public function edit($id)
    {
        $databuku = DB::table('buku')->find($id);
        return response()->json([
            'status'=>200,
            'databuku'=>$databuku,
        ]);

    }
    public function update(Request $request){
        DB::table('buku')->where('id', $request->id)->update([
            'judul'=> $request->judul,
            'tahun'=> $request->tahun,
            'id_kategori'=> $request->kategori,
            'id_pengarang'=> $request->pengarang
        ]);

        return redirect()->back()->with('status', 'Data Buku berhasil Di Update');
    }
    public function deletebuku($id){
        DB::table('buku')->where('id', $id)->delete();
        return redirect()->back()->with('status', 'Data Buku Berhasil Di Hapus');
    }

}