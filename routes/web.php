<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginUser;
use App\Http\Controllers\RegisterUser;
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

Route::get('/', [HomeController::class, 'index']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUser::class, 'index']);
    Route::post('/register', [RegisterUser::class, 'store']);
    Route::get('/login', [LoginUser::class, 'index']);
    Route::post('/login', [LoginUser::class, 'authenticate']);
});
Route::post('/logout', [LoginUser::class, 'logout']);
