<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('welcome');
});

//posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/show/{id}', [PostController::class, 'show'])->where('id','[0-9]+');
Route::get('/posts/search/{keyword}', [PostController::class, 'search']);
Route::get('/posts/latest/{num}', [PostController::class, 'latest']);

//tags
Route::get('/tags', [TagController::class, 'index']);
