<?php

use App\Http\Controllers\RawQueriesController;
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

Route::get("/store", [RawQueriesController::class, 'store']);
Route::get("/get", [RawQueriesController::class, 'get']);
Route::get("/update", [RawQueriesController::class, 'update']);
Route::get("/delete/{id}", [RawQueriesController::class, 'update']);