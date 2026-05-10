<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login-proses', [AuthController::class, 'loginProses']);

/*
|--------------------------------------------------------------------------
| Register
|--------------------------------------------------------------------------
*/

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register-proses', [AuthController::class, 'registerProses']);

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

/*
|--------------------------------------------------------------------------
| Monitoring
|--------------------------------------------------------------------------
*/

Route::get('/monitoring', function () {
    return view('monitoring');
});

/*
|--------------------------------------------------------------------------
| Deteksi AI
|--------------------------------------------------------------------------
*/

Route::get('/deteksi', function () {
    return view('deteksi');
});

/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::get('/logout', [AuthController::class, 'logout']);