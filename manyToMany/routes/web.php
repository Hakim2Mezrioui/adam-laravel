<?php

use App\Http\Controllers\RoleController;
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

Route::get("/addRole", [RoleController::class, "addRole"]);
Route::get("/roles", [RoleController::class, "roles"]);
Route::get("/role", [RoleController::class, "role"]);
Route::get("/updateRole", [RoleController::class, "updateRole"]);
Route::get("/deleteRole", [RoleController::class, "deleteRole"]);
Route::get("/addUser", [RoleController::class, "addUser"]);
Route::get("/getAllRolesOfUser", [RoleController::class, "getAllRolesOfUser"]);
