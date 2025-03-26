<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

route::get('belajar', [BelajarController::class, 'index']);
route::get('tambah', [BelajarController::class, 'tambah']);
route::get('kurang', [BelajarController::class, 'kurang']);

route::get('login', [LoginController::class, 'login']);
route::post('action-Login', [LoginController::class, 'actionLogin']);

route::post('actionTambah', [BelajarController::class, 'actionTambah']);
route::post('actionKurang', [BelajarController::class, 'actionKurang']);