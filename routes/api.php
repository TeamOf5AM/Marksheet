<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;

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
Route::post('register',[AuthController::Class,'register']);
Route::post('login',[AuthController::Class,'login'])->name('user.login');
Route::get('login',[AuthController::Class,'login'])->name('login');




Route::middleware('auth:api')->group(function(){
        Route::get('get-user',[AuthController::class,'userInfo'])->name('api.get-user');
});

// Route::middlewa  re('auth:api')->get('get-user', [AuthController::Class,'userInfo']);
