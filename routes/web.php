<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\RiwayatController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dokter', [HomeController::class, 'dokter'])->name('dokter');
    Route::prefix('dokter')->group(function(){
        Route::resource('obat', ObatController::class);
        Route::resource('periksa', PeriksaController::class);
    });
    Route::get('/pasien', [HomeController::class, 'pasien'])->name('pasien');
    Route::prefix('pasien')->group(function(){
        Route::resource('riwayat', RiwayatController::class);
        Route::resource('periksa', PeriksaController::class);
    });
    Route::get('actionlogout', [HomeController::class, 'actionlogout'])->name('actionlogout');
    

});


