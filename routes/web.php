<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UsersController::class, 'index']);
Route::post('users', [UsersController::class, 'store']);

Route::get('posts', [PostsController::class, 'index']);
Route::get('posts/new', [PostsController::class, 'addNew']);
Route::post('posts', [PostsController::class, 'store']);
Route::get('posts/{id}', [PostsController::class, 'viewPost'])->name('posts.viewpost')->whereNumber('id');
