<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class pengarangController extends Controller
{
    public function pengarang()
    {
        $datapengarang = DB::table('pengarang')->get();

        return view('/pengarang', compact('datapengarang'));
    }

    public function tambahpengarang(Request $request)
    {
	    DB::table('pengarang')->insert([
            'nama_pengarang' => $request->nama_pengarang,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect()->back()->with('status', 'Data Buku berhasil Di Tambahkan');
    }
    public function editpengarang($id)
    {
        $datapengarang = DB::table('pengarang')->where('id_pengarang', $id)->get();
        return response()->json([
            'status'=>200,
            'datapengarang'=>$datapengarang,
        ]);

    }
    public function updatepengarang(Request $request){
        DB::table('pengarang')->where('id_pengarang', $request->id_pengarang)->update([
            'nama_pengarang'=> $request->nama_pengarang,
        ]);

        return redirect()->back()->with('status', 'Data Buku berhasil Di Update');
    }

}