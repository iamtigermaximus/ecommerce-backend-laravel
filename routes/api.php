<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//import Controllers here
use App\Http\Controllers\UserController;

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

//create api routes (post, get, update...)
//starts with Route::
//-http methods
// route name
// controller name + ::class
//method name

Route::post('register',[UserController::class, 'register']);


