<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/buku', function () {
    return view('buku');
    
});
Route::get('/buku', [BukuController::class, 'index']);
