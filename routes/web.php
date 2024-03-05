<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\Information;

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

Route::get('/', [DashboardController::class,'index']);
Route::get('/add', [AddController::class,'index']);
Route::post('/post', [AddController::class,'store']);
Route::get('/del/{id}', [AddController::class,'remove']);
Route::get('/edit/{id}', [AddController::class,'edit']);
