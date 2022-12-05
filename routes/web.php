<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InputaspirasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

//resources
Route::resource('admin', 'AdminController');
Route::resource('penduduk', 'PendudukController');
Route::resource('kategori', 'KategoriController');
Route::resource('inputaspirasi', 'InputaspirasiController');
Route::resource('aspirasi', 'AspirasiController');
Route::resource('response', 'ResponseController');
Route::resource('rating', 'RatingController');

//get
Route::get('/search', [App\Http\Controllers\InputaspirasiController::class, 'search'])->name('search');
Route::get('/', [App\Http\Controllers\InputaspirasiController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
