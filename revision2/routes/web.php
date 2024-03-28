<?php

use App\Http\Controllers\RevisionController;
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

Route::get("/home", [RevisionController::class, 'home']);

Route::get("/about", [RevisionController::class, 'about']);

Route::get("blogs", [RevisionController::class, "blogs"]);
Route::get("add-blog", [RevisionController::class, "addBlog"]);
Route::post("add-blog-to-db", [RevisionController::class, "addBlogToDB"]);