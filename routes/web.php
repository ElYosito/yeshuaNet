<?php

use App\Http\Controllers\JovenesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//INICIO DEL TODO
Route::get('/', function () {
    return view('index');
});

//JOVENES
Route::get('/registros', [JovenesController::class, 'index'])->name('jovenes.index');
Route::post('/registros/store', [JovenesController::class, 'store'])->name('jovenes.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
