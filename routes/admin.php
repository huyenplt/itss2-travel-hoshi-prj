<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PlaceController;

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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('user');
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog');

    // place
    Route::get('/places', [PlaceController::class, 'index'])->name('place.index');
    Route::get('/places/create', [PlaceController::class, 'create'])->name('place.create');
    Route::post('/places/create', [PlaceController::class, 'store'])->name('place.store');
    Route::get('/places/{place}', [PlaceController::class, 'edit'])->name('place.edit');
    Route::post('/places/{place}', [PlaceController::class, 'update'])->name('place.update');
    Route::post('/places/delete/{place}', [PlaceController::class, 'delete'])->name('place.delete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


