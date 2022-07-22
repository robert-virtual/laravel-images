<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UsersController;
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

Route::resources([
  'images' => ImageController::class,
  'profile' => UsersController::class
]);

Route::post('comments',[ImageController::class,'comment']);
Route::post('likes',[ImageController::class,'like']);

Route::view('register','users.create');
Route::view('login','users.login');
Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);
Route::delete('logout',[AuthController::class,'logout']);




