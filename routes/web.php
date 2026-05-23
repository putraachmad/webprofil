<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'beranda'])->name('beranda');
Route::get('/tentang-saya', [UserController::class, 'tentangSaya'])->name('tentang.saya');
Route::get('/kontak-saya', [UserController::class, 'kontakSaya'])->name('kontak.saya');
Route::get('/login', [UserController::class, 'login'])->name('login');