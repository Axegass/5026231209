<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\KulkasController ;

//import java.io


Route::get('/', function () {
    return view('page');
});

Route::get('/halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

// Route::get('/blog', function () {
// 	return view('blog');
// });


//Route::get('hello', [Link::class, 'helloword'])


// ================Tugas 1=========================

Route::get('/pertama', function () {
	return view('pertama');
});

Route::get('/blasterjaxx', function () {
	return view('blasterjaxx');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('/css_background&masking', function () {
	return view('css_background&masking');
});

Route::get('/index', function () {
	return view('index');
});

Route::get('/JS1', function () {
	return view('JS1');
});

Route::get('/JS2', function () {
	return view('JS2');
});

Route::get('/sidebar', function () {
	return view('sidebar');
});

Route::get('/welcome', function () {
	return view('welcome');
});



//==========================Pertemuan 12=========================================
//route dosen
Route::get('dosen', [Link::class, 'index']);
//route pegawai
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

//route formulir
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//==========================pertemuan 13==============================================

//route CRUD
Route::get('/pegawai', [PegawaiController::class,   'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);


//=========================================================

//route CRUD
Route::get('/kulkas', [KulkasController::class,   'index']);
Route::get('/kulkas/tambah',[KulkasController::class, 'tambah']);
Route::post('/kulkas/store',[KulkasController::class, 'store']);
Route::get('/kulkas/edit/{id}',[KulkasController::class, 'edit']);
Route::post('/kulkas/update',[KulkasController::class, 'update']);
Route::get('/kulkas/hapus/{id}',[KulkasController::class, 'hapus']);
Route::get('/kulkas/cari',[KulkasController::class, 'cari']);

//route allFrontEnd


?>

