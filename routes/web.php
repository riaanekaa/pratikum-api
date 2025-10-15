<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
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

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('fakultas', [FakultasController::class, 'index'])->name('fakultas.index');





Route::get('/profile', function(){
    return view('profile');
});
