<?php

use App\Http\Controllers\BarangElektronikController;
#routing
Route::get('/', fn() => redirect()->route('barang.index'));
Route::resource('barang', BarangElektronikController::class);
