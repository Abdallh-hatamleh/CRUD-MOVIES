<?php

use App\Http\Controllers\MovieController;
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

Route::get('/',[MovieController::class,'index']);
Route::get('/m/{movie}',[MovieController::class,'show']);
Route::patch('/m/{movie}',[MovieController::class,'edit']);
Route::put('/m/{movie}',[MovieController::class,'update']);
Route::delete('/m/{movie}',[MovieController::class,'destroy']);
Route::get('/add',[MovieController::class,'create']);
Route::post('/m',[MovieController::class,'store']);
