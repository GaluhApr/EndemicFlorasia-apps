<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\HabitatController;
use App\Http\Controllers\AncamanController;
use App\Http\Controllers\KeanekaragamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::prefix('')->group(function (){
    Route::get('/', function () {return view('frontend.index');})->name('home');
    Route::get('/jelajah', [TanamanController::class, 'jelajah'])->name('explore');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/tanaman', TanamanController::class)->middleware('auth');
Route::resource('/habitat', HabitatController::class)->middleware('auth');
Route::resource('/ancaman', AncamanController::class)->middleware('auth');
Route::resource('/keanekaragaman', KeanekaragamanController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//delete
Route::get('/tanaman/delete/{id}', [TanamanController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/habitat/delete/{id}', [HabitatController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/ancaman/delete/{id}', [AncamanController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/keanekaragaman/delete/{id}', [KeanekaragamanController::class, 'delete'])->name('delete')->middleware('auth');
