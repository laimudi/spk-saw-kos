<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\CripsController;
use App\Http\Controllers\DataKosController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
Route::resource('/kriteria', KriteriaController::class);
Route::resource('/kos', DataKosController::class);
Route::resource('/crips', CripsController::class);
Route::resource('/penilaian', PenilaianController::class);
Route::resource('/peta', PetaController::class);
