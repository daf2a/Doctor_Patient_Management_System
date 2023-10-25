<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekamController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route:: get('/rekam/create', [RekamController::class, 'create'])->name('admin.rekam.create');
    Route:: post('/rekam', [RekamController::class, 'store'])->name('admin.rekam.store');
    Route:: get('/rekam', [RekamController::class, 'show'])->name('admin.rekam.list');
    Route:: get('/rekam/pasien', [RekamController::class, 'pasien'])->name('admin.rekam.pasien');
    Route:: get('/rekam/dokter', [RekamController::class, 'dokter'])->name('admin.rekam.dokter');
    Route:: get('/rekam/{rekam}/edit', [RekamController::class, 'edit'])->name('admin.rekam.edit');
    Route:: patch('/rekam/{rekam}', [RekamController::class, 'update'])->name('admin.rekam.update');
    Route:: delete('/rekam/{rekam}', [RekamController::class, 'destroy'])->name('admin.rekam.destroy');
});

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});