<?php

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

Route::get('/', [PostController::class, 'posts']);
Route::get('/addPost', [PostController::class, 'addPost']);
Route::post('/addPostToDB', [PostController::class, 'addPostToDB']);
Route::get("deletePost/{id}", [PostController::class, "deletePost"]);


Route::get('/modifPost/{id}', [PostController::class, 'modifPost']);
Route::post('/modifPostToDB', [PostController::class, 'modifPostToDB']);