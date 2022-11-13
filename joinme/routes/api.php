<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authentication;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/signup', [authentication::class, "signup"]);
Route::post('/login', [authentication::class, "login"]);
Route::get('/logout', [authentication::class, "logout"]);
Route::get('login', [authentication::class, "logined"]);
Route::get("/",[ProductController::class,"homepage"]);
Route::get("/storage/{filename}", function($filename){
    echo asset('storage/'.$filename);
});
Route::post('/addproduct', [ProductController::class, 'addproduct']);
Route::post('/getproduct', [ProductController::class, 'returnproduct']);
