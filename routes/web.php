<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\WorksController;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('dashboard');
Route::get('/upload', UploadController::class)->name('upload');
Route::get('/works', WorksController::class)->name('works');