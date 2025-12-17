<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', [BarangController::class, 'index'])->name('home');

Route::get('alat/{id}', [BarangController::class, 'show'])->name('barang.show');

Route::get('alat/{id}/keselamatan', [BarangController::class, 'panduanKeselamatan'])->name('barang.keselamatan');

Route::get('alat/{id}/penggunaan', [BarangController::class, 'panduanPenggunaan'])->name('barang.panduan');
