<?php

use App\Models\Artikel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PelayananController;

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
//AUTH 
//jika ada request url /login dengan method GET maka request tersebut akan ditangani oleh authcontroller  method index
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('/home', [PelayananController::class, 'index'])->middleware('auth');
//jika ada request url /auth dengan method post maka request tersebut akan ditangani oleh authcontroller  method authenticate
Route::post('/auth', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);
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
Route::resource('/pelayanan', PelayananController::class)->except('store')->middleware('auth');
//List Artikel
Route::resource('/list_artikel', ArtikelController::class)->middleware('auth');
Route::get('/createSlug', [ArtikelController::class, 'create_slug'])->middleware('auth');
//pendaftaran
Route::post('/simpan_pelayanan', [PelayananController::class, 'store']);
Route::get('/daftar_pelayanan', [PelayananController::class, 'daftar_pelayanan']);
//Register User
Route::get('/register_user', function () {
    return view('auth.register-user');
});
//mengubah status
Route::get('/changeStatus', [PelayananController::class, 'ubah_status']);

//view artikel
Route::get('/view_artikel', function () {
    $data = [
        'postingan_terbaru' => Artikel::latest()->first(), //ngambil data terakhir untuk headline
        'postingan_all' => Artikel::all() //untung mengambil semua data
    ];
    return view('artikel.index', $data);
});

//datatables
Route::get('/datatablesKonsultasi', [PelayananController::class, 'dataTables']);
Route::get('/datatablesKonsultasiSelesai', [PelayananController::class, 'dataTablesSelesai']);
Route::get('/datatablesArtikel', [ArtikelController::class, 'dataTables']);
