<?php

use App\Http\Controllers\adminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [adminDashboardController::class, 'index'])->name('admin.dashboard.index');
