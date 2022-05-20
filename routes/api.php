<?php

use App\Http\Controllers\Api\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

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



Route::group(['middleware' => 'auth:sanctum'] , function (){

    Route::resource('categories', \App\Http\Controllers\Api\CategoryController::class);


    Route::resource('transact', \App\Http\Controllers\Api\TrasnactController::class);
});


Route::post('/auth/login',[AuthController::class , 'login']);
Route::post('/auth/register',[AuthController::class , 'register']);

Route::post('/auth/logout',[AuthController::class , 'logout']);



