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

    Route::name(('dokter.'))->group(function () {
        Route::get('/dokter', [\App\Http\Controllers\DokterController::class, 'index'])
        ->name('index');
        Route::get('/dokter/create', [\App\Http\Controllers\DokterController::class, 'create'])
            ->name('create');
        Route::post('/dokter/store', [\App\Http\Controllers\DokterController::class, 'store'])
            ->name('store');
        Route::get('/dokter/{dokter}', [\App\Http\Controllers\DokterController::class, 'edit'])
            ->name('edit');
        Route::put('/dokter/{dokter}', [\App\Http\Controllers\DokterController::class, 'update'])
            ->name('update');
        Route::delete('/dokter/{dokter}', [\App\Http\Controllers\DokterController::class, 'destroy'])
            ->name('destroy');
    });

    Route::name(('ms_tindakan.'))->group(function () {
        Route::get('/ms_tindakan', [\App\Http\Controllers\Ms_TindakanController::class, 'index'])
        ->name('index');
        Route::get('/ms_tindakan/create', [\App\Http\Controllers\Ms_TindakanController::class, 'create'])
            ->name('create');
        Route::post('/ms_tindakan/store', [\App\Http\Controllers\Ms_TindakanController::class, 'store'])
            ->name('store');
        Route::get('/ms_tindakan/{ms_tindakan}', [\App\Http\Controllers\Ms_TindakanController::class, 'edit'])
            ->name('edit');
        Route::put('/ms_tindakan/{ms_tindakan}', [\App\Http\Controllers\Ms_TindakanController::class, 'update'])
            ->name('update');
        Route::delete('/ms_tindakan/{ms_tindakan}', [\App\Http\Controllers\Ms_TindakanController::class, 'destroy'])
            ->name('destroy');
    });

    Route::name(('layanan.'))->group(function () {
        Route::get('/layanan', [\App\Http\Controllers\LayananController::class, 'index'])
        ->name('index');
        Route::get('/layanan/create', [\App\Http\Controllers\LayananController::class, 'create'])
            ->name('create');
        Route::post('/layanan/store', [\App\Http\Controllers\LayananController::class, 'store'])
            ->name('store');
        Route::get('/layanan/{layanan}', [\App\Http\Controllers\LayananController::class, 'edit'])
            ->name('edit');
        Route::put('/layanan/{layanan}', [\App\Http\Controllers\LayananController::class, 'update'])
            ->name('update');
        Route::delete('/layanan/{layanan}', [\App\Http\Controllers\LayananController::class, 'destroy'])
            ->name('destroy');
    });

    Route::name(('penjamin.'))->group(function () {
        Route::get('/penjamin', [\App\Http\Controllers\PenjaminController::class, 'index'])
        ->name('index');
        Route::get('/penjamin/create', [\App\Http\Controllers\PenjaminController::class, 'create'])
            ->name('create');
        Route::post('/penjamin/store', [\App\Http\Controllers\PenjaminController::class, 'store'])
            ->name('store');
        Route::get('/penjamin/{penjamin}', [\App\Http\Controllers\PenjaminController::class, 'edit'])
            ->name('edit');
        Route::put('/penjamin/{penjamin}', [\App\Http\Controllers\PenjaminController::class, 'update'])
            ->name('update');
        Route::delete('/penjamin/{penjamin}', [\App\Http\Controllers\PenjaminController::class, 'destroy'])
            ->name('destroy');
    });

    Route::name(('unit.'))->group(function () {
        Route::get('/unit', [\App\Http\Controllers\UnitController::class, 'index'])
        ->name('index');
        Route::get('/unit/create', [\App\Http\Controllers\UnitController::class, 'create'])
            ->name('create');
        Route::post('/unit/store', [\App\Http\Controllers\UnitController::class, 'store'])
            ->name('store');
        Route::get('/unit/{unit}', [\App\Http\Controllers\UnitController::class, 'edit'])
            ->name('edit');
        Route::put('/unit/{unit}', [\App\Http\Controllers\UnitController::class, 'update'])
            ->name('update');
        Route::delete('/unit/{unit}', [\App\Http\Controllers\UnitController::class, 'destroy'])
            ->name('destroy');
    });

    Route::name(('kelas.'))->group(function () {
        Route::get('/kelas', [\App\Http\Controllers\KelasController::class, 'index'])
        ->name('index');
        Route::get('/kelas/create', [\App\Http\Controllers\KelasController::class, 'create'])
            ->name('create');
        Route::post('/kelas/store', [\App\Http\Controllers\KelasController::class, 'store'])
            ->name('store');
        Route::get('/kelas/{kelas}', [\App\Http\Controllers\KelasController::class, 'edit'])
            ->name('edit');
        Route::put('/kelas/{kelas}', [\App\Http\Controllers\KelasController::class, 'update'])
            ->name('update');
        Route::delete('/kelas/{kelas}', [\App\Http\Controllers\KelasController::class, 'destroy'])
            ->name('destroy');
    });

    Route::name(('kunjungan.'))->group(function () {
        Route::get('/kunjungan', [\App\Http\Controllers\KunjunganController::class, 'index'])
        ->name('index');
        Route::get('/kunjungan/create', [\App\Http\Controllers\KunjunganController::class, 'create'])
            ->name('create');
        Route::post('/kunjungan/store', [\App\Http\Controllers\KunjunganController::class, 'store'])
            ->name('store');
        Route::get('/kunjungan/{kunjungan}', [\App\Http\Controllers\KunjunganController::class, 'edit'])
            ->name('edit');
        Route::put('/kunjungan/{kunjungan}', [\App\Http\Controllers\KunjunganController::class, 'update'])
            ->name('update');
        Route::delete('/kunjungan/{kunjungan}', [\App\Http\Controllers\KunjunganController::class, 'destroy'])
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
