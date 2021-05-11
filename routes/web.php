<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class,'index']);
Route::get('post/', [PostController::class,'index'],) ->name('post.index');
Route::get('post/create', [PostController::class,'create'],) ->name('post.create');
Route::get('post/show/{id}', function ($id){return 'users'.$id;})->name('post.show');
Route::post('post/', [PostController::class,'store'],) ->name('post.store');
