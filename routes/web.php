<?php

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

Route::get('/', function () {
    return view('home');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUser::class, 'index']);
    Route::post('/register', [RegisterUser::class, 'store']);
});
