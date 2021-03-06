<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'AuthController@login')->name("auth.login");
Route::post('register', 'AuthController@register')->name("auth.register");
Route::post('logout', 'AuthController@logout')->name("auth.logout");
Route::post('refresh', 'AuthController@refresh')->name("auth.refresh");
Route::get('me', 'AuthController@me')->name("auth.me");
//this is to protect the routes with jwt
Route::middleware(['auth.jwt'])->group( function () {
    Route::get("/cards/{id}", "CardApiController@find")->name("cards.find");
    Route::get("/cards", "CardApiController@all")->name("cards.all");

});

Route::post("users/login","UserController@Login");
route::post("users/register","UserController@Register");
route::get("users/{email}/tasks/all","TaskController@GetUserTasks");
route::get("users/{email}/tasks/next","TaskController@GetNextTask");

