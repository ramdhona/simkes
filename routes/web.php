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

// Rute untuk Auth (login, register) - middleware auth sudah diaktifkan dengan Auth::routes()
// Routes ini tidak perlu middleware karena middleware sudah diatur di bawah ini

// Auth Routes
Auth::routes(); // Middleware 'auth' akan diterapkan pada semua rute terkait autentikasi seperti login, register, dan logout

// Rute untuk Home dan akses lainnya
Route::middleware(['auth'])->group(function () {  // Middleware 'auth' memastikan hanya user yang sudah login yang bisa mengakses rute di bawah ini
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rute untuk pasien, hanya bisa diakses oleh pengguna dengan role 'pasien'
    Route::prefix('pasien')->middleware(['role:pasien'])->group(function () {  // Middleware 'role:pasien' memastikan hanya user dengan role pasien yang bisa mengakses rute ini
            Route::get('/', [HomeController::class, 'pasien'])->name('pasien');
            Route::resource('riwayat', RiwayatController::class);
            Route::resource('periksa', PeriksaController::class);
    });

    // Rute untuk dokter, hanya bisa diakses oleh pengguna dengan role 'dokter'
    Route::prefix('dokter')->middleware(['role:dokter'])->group(function () {  // Middleware 'role:dokter' memastikan hanya user dengan role dokter yang bisa mengakses rute ini
            Route::get('/', [HomeController::class, 'dokter'])->name('dokter');
            Route::resource('obat', ObatController::class);
            Route::resource('memeriksa', PeriksaController::class);
        });

    // Rute untuk logout
    // Route::get('actionlogout', [HomeController::class, 'actionlogout'])->name('actionlogout');
    Route::post('/actionlogout', [HomeController::class, 'actionlogout'])->name('actionlogout');

});
