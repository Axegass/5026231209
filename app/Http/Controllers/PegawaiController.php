<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //

    public function index($nama){
         return "<h2>" . $nama . "<h2>";
    }

    public function formulir(){
    	return view('formulir');
    }

    public function proses(Request $request){
        $nama = $request->input('nama');//parse variable name
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama."<br> Alamat : ".$alamat."<br> Aslinya : ". $request;
    }

}
