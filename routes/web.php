<?php

use App\Http\Controllers\ItemController;
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
    return redirect('/home');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/search', [App\Http\Controllers\ItemController::class, 'search']);

Route::get('/login', [App\Http\Controllers\UserController::class, 'login'])->middleware('guest');
Route::post('/login', [App\Http\Controllers\UserController::class, 'auth'])->middleware('guest');

Route::get('/item/{item}', [App\Http\Controllers\ItemController::class, 'view']);
Route::get('/more/{type}', [App\Http\Controllers\ItemController::class, 'more_like_this']);

Route::get('/register', [App\http\Controllers\UserController::class, 'register']);
Route::post('/create', [App\http\Controllers\UserController::class, 'create']);

Route::post('/logout', [App\http\Controllers\UserController::class, 'logout']);

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);