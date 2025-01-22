<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\authController;
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

Route::middleware('auth')->group(function () {
    Route::post('/logout', [authController::class, 'logout'])->name('logout');

    Route::get('/admin', [adminDashboardController::class, 'index'])->name('admin.dashboard.index');

    Route::resource('/admin/siswa', siswaController::class);

    Route::resource('/admin/user', UserController::class);
});
