<?php

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

Route::get('/', function () {
    return view('anuan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('pengaduan', \App\Http\Controllers\PengaduanController::class)->middleware('auth');
// Route::resource('tanggapan', \App\Http\Controllers\TanggapanController::class)->middleware('auth');

Route::get('/tanggapan/create/{idpengaduan}', [\App\Http\Controllers\TanggapanController::class, 'create'])->name('tanggapan.create');

Route::get('/tanggapan', [\App\Http\Controllers\TanggapanController::class, 'store'])->name('tanggapan.store');


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
