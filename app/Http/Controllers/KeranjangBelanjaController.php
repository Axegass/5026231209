<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10); //array per page

        // mengirim data pegawai ke view index2
    	return view('keranjangbelanja/index_keranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);

    }
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('keranjangbelanja/tambah_keranjangbelanja');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}



	// method untuk hapus data pegawai
	public function hapus($ID)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')
        ->where('ID',$ID)
        ->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}


}

