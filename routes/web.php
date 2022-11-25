<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::prefix('user')->group(function () {
    Route::get('/', [AuthController::class, 'userAuth'])->name('user');
    Route::post('login', [AuthController::class, 'userLogin'])->name('user.login');
    Route::post('signup', [AuthController::class, 'userSignUp'])->name('user.signup');
});

Route::get('/', [HomeController::class, 'index'])->name('home');