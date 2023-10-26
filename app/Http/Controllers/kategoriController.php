<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class kategoriController extends Controller
{
    public function kategori()
    {
        $datakategori = DB::table('kategori')->get();

        return view('/kategori', compact('datakategori'));
    }

    public function tambahkategori(Request $request)
    {
	    DB::table('kategori')->insert([
            'kategori' => $request->kategori,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect()->back()->with('status', 'Data Buku berhasil Di Tambahkan');
    }
    public function editkategori($id)
    {
        $datakategori = DB::table('kategori')->where('id_kategori', $id)->get();
        return response()->json([
            'status'=>200,
            'datakategori'=>$datakategori,
        ]);

    }
    public function updatekategori(Request $request){
        DB::table('kategori')->where('id_kategori', $request->id_kategori)->update([
            'kategori'=> $request->kategori,
        ]);

        return redirect()->back()->with('status', 'Data Buku berhasil Di Update');
    }

}