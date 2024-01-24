<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OilorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/oilors', [OilorController::class, 'store'])->name('oilors.store');

Route::get('/oilors/{oi}', [OilorController::class, 'show'])->name('oilors.show');

Route::delete('/oilors/{oi}', [OilorController::class, 'destroy'])->name('oilors.destroy');

Route::get('/terms', function () {
    return view('terms');
});
