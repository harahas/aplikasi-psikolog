<?php

use App\Http\Controllers\PelayananController;
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
//halaman home
Route::get('/', function () {
    return view('front-end.index');
});
//akhlaqul karimah
Route::get('/akhlaqul-karimah', function () {
    return view('front-end.akhlaqul-karimah');
});
//bukit bintang
Route::get('/bukit-bintang', function () {
    return view('front-end.bukit-bintang');
});
//pelayanan
Route::resource('/pelayanan', PelayananController::class);

Route::get('/daftar_pelayanan', [PelayananController::class, 'daftar_pelayanan']);
