<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('barang', [BarangController::class, 'index']);
Route::get('barang/tambah', [BarangController::class, 'tambah']);
Route::post('barang/tambahdata', [BarangController::class, 'tambahData']);
Route::get('barang/{id}/edit', [BarangController::class, 'edit']);
Route::post('barang/{id}/editdata', [BarangController::class, 'editData']);
Route::get('barang/{id}/hapus', [BarangController::class, 'hapus']);

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
