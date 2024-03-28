<?php

use App\Http\Controllers\Controllers;
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

Route::get('/home', [Controllers::class, 'Home']);

Route::get("/hello/{name}", [Controllers::class, "Hello"]);

Route::get("welcome", [Controllers::class, 'Welcome']);

Route::get("page", [Controllers::class, "page"]);