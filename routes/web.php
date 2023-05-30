<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\HabitatController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::resource('/tanaman', TanamanController::class);
Route::resource('/habitat', HabitatController::class);

//delete
Route::get('/tanaman/delete/{id}', [TanamanController::class, 'delete'])->name('delete');
Route::get('/habitat/delete/{id}', [HabitatController::class, 'delete'])->name('delete');
