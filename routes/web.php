<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/home', [PostController::class, 'show'])->name('home_show');
Route::get('/home/create_post', [PostController::class, 'store'])->name('home_store');
Route::get('/home/create_post/true', function () {
    return view('home_store');
})->name('home_store_true');

Route::get('/home/post/{id}', [PostController::class, 'show_post'])->name('home_post');
//Route::get('/home/post/create_comment/{id}', [CommentController::class, 'store'])->name('post_create_comment');
Route::get('/home/create_post/{id}', function ($id) {
    return view('home_store_comment')->with('id', $id);
})->name('post_create_comment');
