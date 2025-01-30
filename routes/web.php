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

Route::get("/test", function(){
    return view('test');
});


Route::get("user/{id}/{name}", [RoleController::class, 'index']);

Route::get("roles", [RoleController::class,'roleIndex']);


// form

Route::get("roles/create", [RoleController::class,'create']);
Route::post("roles/store", [RoleController::class,'store']);