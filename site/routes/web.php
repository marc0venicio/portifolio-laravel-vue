<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BlogController::class, 'index']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('/contato', [BlogController::class, 'contato']);
Route::get('/register', [BlogController::class, 'register']);
Route::get('/create', [PostController::class, 'createBlog'])->middleware('auth');
Route::get('/assinantes', [PostController::class, 'client'])->middleware('auth');
Route::post('/blog-create', [PostController::class, 'store']);
Route::get('/blog/{slug}', [PostController::class, 'show']);
Route::post('/contato', [BlogController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
