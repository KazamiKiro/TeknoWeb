<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\calculator_controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/calculator', [calculator_controller::class, 'index']);
Route::post('/calculator', [calculator_controller::class, 'hasilindex']);

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';