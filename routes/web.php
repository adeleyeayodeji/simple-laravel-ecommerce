<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
//GET
Route::get('/login', [UserController::class, "index"]);
Route::get('/', [ProductController::class, "index"]);
Route::get('/detail/{id}', [ProductController::class, "detail"]);

//POST
Route::post('/login', [UserController::class, "login"]);
Route::post('/search', [ProductController::class, "search"]);