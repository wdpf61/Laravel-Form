<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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


//Route::get("user/{id}/{name}", [RoleController::class, 'index']);


// Route::get("user/{id?}/{name}", function ($id="" , $name=""){
//     //  print_r($id, $name);
//     echo "hello ";
//     echo $id;
//     echo $name;
// });









Route::get("roles", [RoleController::class,'roleIndex']);
Route::get("roles/create", [RoleController::class,'create']);
Route::post("roles/store", [RoleController::class,'store']);

Route::get('/user', [UserController::class,'index']);
Route::get('/user/create', [UserController::class,'create']);
Route::post('/user/store', [UserController::class,'store']);
Route::get('/user/edit/{id}', [UserController::class,'edit']);
Route::get('/user/delete/{id}', [UserController::class,'destroy']);

Route::post('/user/update', [UserController::class,'update']);