<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;

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

Route::get('', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');

Route::middleware(['role:admin'])->group(function () {
    Route::prefix('dashboard')->name('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/manager', [DashboardController::class, 'manager'])->name('.manager');
        Route::get('/detail', [DashboardController::class, 'detail'])->name('.detail');
    });

    Route::get('/users', [UserController::class, 'index'])->name('user');
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


