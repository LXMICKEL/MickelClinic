<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfilController;
use Illuminate\Auth\Middleware\Authenticate;

Route::middleware([Authenticate::class])->group(function(){
    Route::resource('pasien', PasienController::class);
    Route::resource('daftar', DaftarController::class);
    Route::resource('poli', PoliController::class);
    
});

// Route::get('logout', function () {
//     Auth::logout();
//     return redirect('login');
// });


//Route::resource('pasien', PasienController::class)->middleware(Authenticate::class);
Route::get('dokter', [ProfilController::class, 'Dokter']);
Route::get('dokter/create', [ProfilController::class, 'create']);
Route::get('dokter/{id}/edit', [ProfilController::class, 'edit']);
Route::get('dokter/{id}', [ProfilController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');