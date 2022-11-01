<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\PosyanduController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\JenisImunisasiController;

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
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (){
    Route::resource('/users', RoleController::class);
    Route::resource('/wilayah/kecamatan', KecamatanController::class);
    Route::resource('/wilayah/desa', DesaController::class);
    Route::resource('/pasien/keluarga', KeluargaController::class);
    Route::resource('/pasien/data-pasien', PasienController::class);
    Route::resource('/unit-kesehatan/posyandu', PosyanduController::class);
    Route::resource('/unit-kesehatan/puskesmas', PuskesmasController::class);
    Route::resource('/imunisasi/jenis-imunisasi', JenisImunisasiController::class);
});


require __DIR__.'/auth.php';
