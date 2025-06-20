<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
        $nilai = DB::table('nilai')->paginate(10); //array per page

        // mengirim data pegawai ke view index2
    	return view('nilai/index_nilai',['nilai' => $nilai]);

    }
    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('nilai/tambah_nilai');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilai')->insert([
			'normorinduksiswa' => $request->normorinduksiswa,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks,

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilai');

	}




}

