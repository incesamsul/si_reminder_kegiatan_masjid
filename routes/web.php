<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\General;
use App\Http\Controllers\Home;
use App\Http\Controllers\JadwalCeramahController;
use App\Http\Controllers\KasKeluarController;
use App\Http\Controllers\KasMasukController;
use App\Http\Controllers\KegiatanMasjidController;
use App\Http\Controllers\Penilai;
use App\Http\Controllers\RekapKasController;
use App\Http\Controllers\UserController;

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



Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/', [Home::class, 'index']);


Route::get('/tentang_aplikasi', [Home::class, 'tentangAplikasi']);


Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
});

// GENERAL CONTROLLER ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,bendahara,masyarakat']], function () {

    Route::get('/dashboard', [General::class, 'dashboard']);
    Route::get('/profile', [General::class, 'profile']);
    Route::get('/bantuan', [General::class, 'bantuan']);

    Route::post('/ubah_foto_profile', [General::class, 'ubahFotoProfile']);
    Route::post('/ubah_role', [General::class, 'ubahRole']);
});

// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
});


// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,bendahara,masyarakat']], function () {
    Route::group(['prefix' => 'admin'], function () {
        // GET REQUEST
        Route::get('/pengguna', [Admin::class, 'pengguna']);
        Route::get('/fetch_data', [Admin::class, 'fetchData']);

        // CRUD PENGGUNA
        Route::post('/create_pengguna', [Admin::class, 'createPengguna']);
        Route::post('/update_pengguna', [Admin::class, 'updatePengguna']);
        Route::post('/delete_pengguna', [Admin::class, 'deletePengguna']);

        Route::get('/kegiatan_masjid', [KegiatanMasjidController::class, 'index']);
        Route::get('/kegiatan_masjid/create', [KegiatanMasjidController::class, 'create']);
        Route::get('/kegiatan_masjid/edit/{id}', [KegiatanMasjidController::class, 'edit']);
        Route::post('/kegiatan_masjid', [KegiatanMasjidController::class, 'store']);
        Route::put('/kegiatan_masjid', [KegiatanMasjidController::class, 'update']);
        Route::delete('/kegiatan_masjid/delete/{id}', [KegiatanMasjidController::class, 'delete']);

        Route::get('/kas_masuk', [KasMasukController::class, 'index']);
        Route::get('/kas_masuk/create', [KasMasukController::class, 'create']);
        Route::get('/kas_masuk/edit/{id}', [KasMasukController::class, 'edit']);
        Route::post('/kas_masuk', [KasMasukController::class, 'store']);
        Route::put('/kas_masuk', [KasMasukController::class, 'update']);
        Route::delete('/kas_masuk/delete/{id}', [KasMasukController::class, 'delete']);

        Route::get('/kas_keluar', [KasKeluarController::class, 'index']);
        Route::get('/kas_keluar/create', [KasKeluarController::class, 'create']);
        Route::get('/kas_keluar/edit/{id}', [KasKeluarController::class, 'edit']);
        Route::post('/kas_keluar', [KasKeluarController::class, 'store']);
        Route::put('/kas_keluar', [KasKeluarController::class, 'update']);
        Route::delete('/kas_keluar/delete/{id}', [KasKeluarController::class, 'delete']);

        Route::get('/rekap_kas', [RekapKasController::class, 'index']);


        Route::get('/jadwal_ceramah', [JadwalCeramahController::class, 'index']);
        Route::get('/jadwal_ceramah/create', [JadwalCeramahController::class, 'create']);
        Route::get('/jadwal_ceramah/edit/{id}', [JadwalCeramahController::class, 'edit']);
        Route::post('/jadwal_ceramah', [JadwalCeramahController::class, 'store']);
        Route::put('/jadwal_ceramah', [JadwalCeramahController::class, 'update']);
        Route::delete('/jadwal_ceramah/delete/{id}', [JadwalCeramahController::class, 'delete']);
    });
});
