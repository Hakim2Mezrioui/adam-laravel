<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
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

Route::get("/home", [HomeController::class, "home"]);

Route::get("/hello/{name}", function($name) {
    return 'hello ' . $name;
    // return "hello $name";
    // return "hello " . $name;
});

// Route::get("/hello", function() {
//     return "hello " . $_GET['name'];
// });

Route::get("/hello", function(Request $request) {
    return "hello " . $request->input("name");
});

Route::get("yieldSection", function() {
    return view("yieldSection");
});