<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignUpController;
use Faker\Guesser\Name;

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

Route::get('/', [PostController::class,'index'])->name('index');
Route::get('/signup', [SignUpController::class,'index'])->name('signup');
Route::post('/signup', [SignUpController::class,'create'])->name('signup_create');
Route::get('post/', [PostController::class,'index'],) ->name('post.index');
Route::get('post/create', [PostController::class,'create'],) ->name('post.create');
Route::get('post/show/{id}', [PostController::class,'show'])->name('post.show');

