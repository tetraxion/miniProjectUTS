<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', '/home');

Route::fallback(function() {
    return 'This is Fallback Route';
});

// route home
Route::get('home', [HomeController::class, 'index'])->name('home');

// route profile
Route::get('profile',  [ProfileController::class, 'index'])->name('profile');

// route barang
Route::resource('barangs', BarangController::class);
