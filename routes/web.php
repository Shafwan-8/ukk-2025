<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\alasanController;
use App\Http\Controllers\authController;
use App\Http\Controllers\guruDashboardController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
    Route::get('/login', [authController::class, 'index'])->name('login');
    Route::post('/login', [authController::class, 'store'])->name('login.store');
});

Route::middleware(['auth', 'UsersRole:1,2'])->group(function () {
    Route::post('/logout-guru', [authController::class, 'logout'])->name('logout-guru');

    Route::get('/guru', [guruDashboardController::class, 'index'])
        ->name('guru.dashboard.index');
});

Route::middleware(['auth', 'UsersRole:1'])->group(function () {
    Route::post('/logout-admin', [authController::class, 'logout'])->name('logout-admin');

    Route::get('/admin', [adminDashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::resource('/admin/siswa', siswaController::class);

    Route::resource('/admin/user', UserController::class);

    Route::resource('/admin/alasan', alasanController::class);
});

Route::get('/error-401', function () {
    return view('errors.error-401');
})->name('errors.error-401');
