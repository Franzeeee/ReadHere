<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

route::resource('blog', PostController::class)->except(['index', 'show'])->middleware('auth');
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [PostController::class, 'show'])->name('blog.show');

#Routes for Login.
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
