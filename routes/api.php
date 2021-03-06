<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


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
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    
});
Route::resource('books', 'BookController');*/

//Agreguem ruta al controlador de books
Route::middleware('auth:api')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
        
    });
});
Route::resource('/books','App\Http\Controllers\Api\BookController');
Route::post('login', [UserController::class,'login']);
Route::post('register',[UserController::class,'register']);
Route::post('details',[UserController::class,'details']);
