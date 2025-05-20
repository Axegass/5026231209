<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;




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

?>
