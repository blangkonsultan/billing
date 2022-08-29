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



Route::middleware(['auth'])->group(function () {
    Route::name(('pasien.'))->group(function () {
        Route::get('/pasien', [\App\Http\Controllers\PasienController::class, 'index'])
            ->name('index');
        Route::get('/pasien/create', [\App\Http\Controllers\PasienController::class, 'create'])
            ->name('create');
        Route::post('/pasien/store', [\App\Http\Controllers\PasienController::class, 'store'])
            ->name('store');
        Route::get('/pasien/{pasien}', [\App\Http\Controllers\PasienController::class, 'edit'])
            ->name('edit');
        Route::put('/pasien/{pasien}', [\App\Http\Controllers\PasienController::class, 'update'])
            ->name('update');
        Route::delete('/pasien/{pasien}', [\App\Http\Controllers\PasienController::class, 'destroy'])
            ->name('destroy');
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
