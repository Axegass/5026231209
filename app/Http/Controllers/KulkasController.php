<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KulkasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $kulkas = DB::table('kulkas')->paginate(10); //array per page

        // mengirim data pegawai ke view index2
    	return view('kulkas/index_kulkas',['kulkas' => $kulkas]);

    }
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('Kulkas/tambah_kulkas');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('kulkas')->insert([
			'merkkulkas' => $request->merkkulkas,
			'hargakulkas' => $request->hargakulkas,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kulkas');

	}

	// method untuk edit data pegawai
	public function edit($kulkas_ID)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$kulkas = DB::table('kulkas')->where('kulkas_ID',$kulkas_ID)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('Kulkas/edit_kulkas',['kulkas' => $kulkas]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('kulkas')->where('kulkas_ID',$request->kulkas_ID)->update([
			'merkkulkas' => $request->merkkulkas,
			'hargakulkas' => $request->hargakulkas,
			'tersedia' => $request->tersedia,
			'berat' => $request->berat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/kulkas');
	}

	// method untuk hapus data pegawai
	public function hapus($kulkas_ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kulkas')
        ->where('kulkas_ID',$kulkas_ID)
        ->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/kulkas');
	}

    public function cari (Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$kulkas = DB::table('kulkas')
		->where('merkkulkas','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('Kulkas/index_kulkas',['kulkas' => $kulkas, 'cari' => $cari]);

	}
}
