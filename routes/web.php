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

Route::resource(
  'images', ImageController::class,
);
Route::resource(
  'profile', UsersController::class
)
->middleware('checksession');



Route::post('comments',[ImageController::class,'comment'])
->middleware('checksession');

Route::post('likes',[ImageController::class,'like'])
->middleware('checksession');

Route::view('register','users.create');
Route::view('login','users.login');
Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);
Route::delete('logout',[AuthController::class,'logout']);




