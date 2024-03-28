<?php

use App\Http\Controllers\routesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/home', function() {
    return "home";
});

Route::get("/hello/{name}", function($name) {  // route paramateré
    return "hello " . $name; // "hello " + name; `hello {name}`;
    return "hello $name"; // "hello " + name; `hello {name}`;
});

Route::get("/nameRoute", function() {
    return "naming routes";
})->name("naming routes");

Route::get("fragment/{id}", function(Request $request) {
    // return $request->path(); // pour afficher active route
    return "id = " . $request->input("id") . "<br />" . "age = " . $request->input("age");  
    return "person number: " . $_GET['age']; 
    // $_GET['key'] , $_POST['key'];
    // $_SESSION['key']
    // $_REQUEST[localtion: '']
});

Route::get('id/{id}', function($id) {
    return "id = $id";
})->where('id', "[3-8]");

Route::get("/hello", [routesController::class, 'hello']);