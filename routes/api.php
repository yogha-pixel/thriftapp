<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PakaianController;

// Tes route dasar (untuk memastikan API aktif)
Route::get('/ping', function () {
    return response()->json(['message' => 'API aktif!']);
});

// CRUD untuk pakaian
Route::apiResource('pakaian', PakaianController::class);
