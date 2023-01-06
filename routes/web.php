<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\GiziController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BidanController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\UbahPasswordController;
use App\Http\Controllers\AdminPuskesmasController;
use App\Http\Controllers\JenisImunisasiController;
use App\Http\Controllers\LupaPasswordController;

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
Route::get('/lupa_password', [LupaPasswordController::class, 'index'])->name('lupa_password');
Route::post('/lupa_password', [LupaPasswordController::class, 'cek_password'])->name('check_lupa_password');
Route::get('/login', [LoginController::class, 'index'])->name('loginform')->middleware('guest');
Route::get('/', [LoginController::class, 'index'])->name('loginIndex')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/', function () {
//     return view('dashboard');
// })
// ->middleware('auth');
// Route::get('/dashboard', [DashboardController::class])->middleware('auth')->name('dashboard');
// Route::controller(dashboardController::class)->prefix('data/dashboard')->name('dashboard.')->group(function () {
//     Route::get('/chart/{year?}', 'chart')->name('chart');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })
// ->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function (){

    // Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

    Route::resource('/profile', ProfileController::class);
    Route::get('/profile/{id}/ubah_password', [UbahPasswordController::class ,'index'])->name('ubah_password');
    Route::post('/profile/{id}/ubah_password', [UbahPasswordController::class ,'update'])->name('update_password');
    // Route::resource('/profile/{id}/ubah_password', UbahPasswordController::class);
 

    Route::resource('/users/admin', RoleController::class);
    Route::resource('/users/admin-puskesmas', AdminPuskesmasController::class);
    Route::resource('/users/bidan', BidanController::class);
    Route::resource('/users/kader', KaderController::class);

    Route::resource('/wilayah/kecamatan', KecamatanController::class);
    Route::resource('/wilayah/desa', DesaController::class);

    Route::resource('/pasien/keluarga', KeluargaController::class);
    Route::get('/pasien/data-pasien/{id}/riwayat', [PasienController::class, 'riwayat']);
    Route::resource('/pasien/data-pasien', PasienController::class);

    Route::resource('/unit-kesehatan/posyandu', PosyanduController::class);
    Route::resource('/unit-kesehatan/puskesmas', PuskesmasController::class);

    Route::resource('/imunisasi/jenis-imunisasi', JenisImunisasiController::class);
    Route::resource('/imunisasi/data-imunisasi', ImunisasiController::class);
    Route::get('/imunisasi/data-imunisasi/{id}/create',[ ImunisasiController::class, 'create']);   

    Route::resource('/gizi/data-gizi', GiziController::class);
    Route::get('/gizi/data-gizi/{id}/create', [GiziController::class, 'create']);
    Route::get('/gizi/data-gizi/data-anak/{id}', [GiziController::class, 'dataAnak']);
    Route::delete('/gizi/data-gizi/{data_gizi:no_pemeriksaan_gizi}/delete', [GiziController::class, 'destory']);
});


// require __DIR__.'/auth.php';
