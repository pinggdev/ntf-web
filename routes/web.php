<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/layanan', function () {
    return view('pages.layanan');
});

Route::get('/dft', function () {
    return view('pages.dft');
});

Route::get('/analisis', function () {
    return view('pages.analisis');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});

Route::get('/dokumentasi', function () {
    return view('pages.dokumentasi');
});
