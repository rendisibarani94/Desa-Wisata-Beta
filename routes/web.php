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


Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index'])->name('hello');
Route::get('/', [App\Http\Controllers\HelloController::class, 'index2'])->name('home');

Route::get('profil', [App\Http\Controllers\HelloController::class, 'index3'])->name('profil');
Route::get('desa', [App\Http\Controllers\HelloController::class, 'index7'])->name('profil');
Route::get('akomodasi/homestay', [App\Http\Controllers\HelloController::class, 'index8'])->name('profil');
Route::get('akomodasi/kuliner', [App\Http\Controllers\HelloController::class, 'index9'])->name('profil');
Route::get('akomodasi/kesehatan', [App\Http\Controllers\HelloController::class, 'index10'])->name('profil');
Route::get('akomodasi/bank', [App\Http\Controllers\HelloController::class, 'index11'])->name('profil');
Route::get('akomodasi/ibadah', [App\Http\Controllers\HelloController::class, 'index12'])->name('profil');


Route::get('desa/alam', [App\Http\Controllers\HelloController::class, 'index4'])->name('profil');
Route::get('desa/buatan', [App\Http\Controllers\HelloController::class, 'index5'])->name('profil');
Route::get('desa/budaya', [App\Http\Controllers\HelloController::class, 'index6'])->name('profil');


Route::get('desa/alam/pantai1', [App\Http\Controllers\WisataAlamController::class, 'index1'])->name('pantai1');


// Ratings
Route::post('createRatings', [App\Http\Controllers\RatingController::class, 'addRating1'])->name('rating1');


