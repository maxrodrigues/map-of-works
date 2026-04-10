<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProcessUploadController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\WorkMapController;
use Illuminate\Support\Facades\Route;

Route::get('/', DashboardController::class)->name('dashboard');
Route::get('/upload', UploadController::class)->name('upload');
Route::post('/process-upload', ProcessUploadController::class)->name('process-upload');
Route::get('/works', WorksController::class)->name('works');
Route::get('/works-map', WorkMapController::class)->name('works-map');