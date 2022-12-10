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
        Route::get('/detail/{id}', [DashboardController::class, 'detail'])->name('.detail');
        Route::get('/edit/{place}', [DashboardController::class, 'edit'])->name('.place.edit');
        Route::put('/{place}/update', [DashboardController::class, 'update'])->name('.place.update');
        Route::get('/form', [DashboardController::class, 'create'])->name('.place.form');
        Route::get('/place/{id}', [DashboardController::class, 'place'])->name('.place');
        Route::get('/place/delete/{id}', [DashboardController::class, 'delete'])->name('.place.delete');
        Route::get('/create', [DashboardController::class, 'create'])->name('.place.create');
        Route::post('/store', [DashboardController::class, 'store'])->name('.place.store');
    });

    Route::group([
        'prefix' => 'user',
        'as' => 'user'
    ], function () {
        Route::get('/users', [UserController::class, 'index']);
        Route::delete('/remove', [UserController::class, 'delete'])->name('.remove');
    });
    Route::group([
        'prefix' => 'blog',
        'as' => 'blog'
    ], function () {
        Route::get('/blogs', [BlogController::class, 'index']);
        Route::delete('/remove', [BlogController::class, 'delete'])->name('.remove');
    });
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


