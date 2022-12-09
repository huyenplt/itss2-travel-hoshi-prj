<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\CommentController;

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
Route::get('/', [AuthController::class, 'auth']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('signup', [AuthController::class, 'signUp'])->name('signup');

Route::middleware(['role:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::group([
        'prefix' => 'blog',
        'as' => 'blog.'
    ], function () {
        Route::post('create', [BlogController::class, 'store'])->name('store');
        Route::get('', [BlogController::class, 'index'])->name('index');
        Route::get('{id}/detail', [BlogController::class, 'show'])->name('detail');
        Route::get('place/{id}', [BlogController::class, 'showByPlace'])->name('showByPlace');
    });
    Route::group([
        'prefix' => 'comment',
        'as' => 'comment.'
    ], function () {
        Route::post('create/{id}', [CommentController::class, 'store'])->name('store');
    });
});

