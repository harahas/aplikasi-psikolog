<?php

use App\Models\Klien;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\SettingPembayaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MenuUserController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\KlienAdminController;
use App\Http\Controllers\jadwalResevasiController;
use App\Http\Controllers\SettingPembayaranController;
use App\Http\Controllers\settingJadwalAdminController;
use App\Http\Controllers\SettingJadwalController;
use App\Http\Controllers\settingPelayanAdminController;
use App\Http\Controllers\SettingPelayananLainController;
use App\Models\SettingJadwal;

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
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);
//Register User
Route::get('/registerUser', [AuthController::class, 'register_user']);
Route::get('/registerUser2', [AuthController::class, 'register_user2']);
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
// Login Klien
Route::post('/loginKlien', [AuthController::class, 'loginKlien']);
Route::get('logoutKlien', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerate();

    return redirect('/');
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

// Menu Profil Saya
Route::get('/profilUser', function () {
    if (session('klien')) {
        $data = [
            'klien' => Klien::where('unique', session('klien')->unique)->first()
        ];
        return view('front-end.profil', $data);
    } else {
        return redirect('/');
    }
});
Route::POST('/updateProfil', [AuthController::class, 'updateProfil']);
Route::get('/service', function () {
    $data = [
        'setting' => SettingPembayaran::all()
    ];
    return view('front-end.pelayanan.all-pelayanan', $data);
});
Route::get('/serviceLain', function () {
    $data = [
        'setting' => SettingPembayaran::all()
    ];
    return view('front-end.pelayanan.pelayanan-lain', $data);
});
Route::get('/jadwal/{unique}', function ($unique) {
    if (session('klien')) {
        $data = [
            'klien' => Klien::where('unique', session('klien')->unique)->first(),
            'data_pembayaran' => SettingPembayaran::where('unique', $unique)->first()
        ];
        return view('front-end.pelayanan.jadwal-konsul', $data);
    } else {
        return redirect('/');
    }
});
Route::get('/adminKlien', [KlienAdminController::class, 'index']);
Route::get('/jadwalReservasiAdmin', [jadwalResevasiController::class, 'index']);
Route::get('/settingJadwalAdmin', [settingJadwalAdminController::class, 'index']);
Route::get('/settingPelayanAdmin', [settingPelayanAdminController::class, 'index']);
Route::get('/settingPelayanLain', [SettingPelayananLainController::class, 'index']);
//simpan setting pelayanan
Route::post('/simpanSettingPelayanan', [SettingPembayaranController::class, 'simpanSettingPelayanan']);
Route::get('/datatableSettingPembayaran', [SettingPembayaranController::class, 'datatableSettingPembayaran']);
Route::get('/datatableSettingPelayananLain', [SettingPelayananLainController::class, 'datatableSettingPelayananLain']);
// edit pelayanan
// Route::get('/getSettingPelayanan/{pelayanan:unique}', [SettingPembayaranController::class, 'getSettingPelayanan']);
//edit setting pelayanan
Route::get('/getSettingPelayanan/{unique}', [SettingPembayaranController::class, 'getSettingPelayanan']);
// update data setting pelayanan
Route::post('/updateSettingPelayanan', [SettingPembayaranController::class, 'updateSettingPelayanan']);
// hapus data pelayanan
Route::post('/deletePelayanan/{unique}', [SettingPembayaranController::class, 'deletePelayanan']);
// Setting jadwal
Route::get('/datatableSettingJadwal', [SettingJadwalController::class, 'datatableSettingJadwal']);
//  SIMPAN JADWAL
Route::post('/simpanSettingjadwal', [SettingJadwalController::class, 'simpanSettingJadwal']);
// get data
Route::get('/getSettingJadwal/{unique}', [SettingJadwalController::class, 'getSettingJadwal']);
// simpan data
Route::post('/updateSettingJadwal', [SettingJadwalController::class, 'updateSettingJadwal']);
// hapus jadwal
Route::post('/deleteJadwal/{unique}', [SettingJadwalController::class, 'deleteJadwal']);

// atur jadwal
Route::get('/getWaktu', [SettingJadwalController::class, 'getWaktu']);
