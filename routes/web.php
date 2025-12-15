<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', [BarangController::class, 'index'])->name('home');

Route::get('alat/{id}', [BarangController::class, 'show'])->name('barang.show');
