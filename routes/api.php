<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

//use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CustomerController;

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
Route::post('login',[App\http\Controllers\Api\AuthController::class, 'login']);


//Route::controller(Api\AuthController::class)->group(function () {
    //Route::post('login', 'login');
  //  Route::post('register', 'register');
   // Route::post('logout', 'logout');
   // Route::post('refresh', 'refresh');

//});

Route::group(['middleware'=>['jwt.auth']],function()
{
Route::get('my_customers',[App\Http\Controllers\Api\UserController::class,'index']);

});


Route::controller(CustomerController::class)->group(function () {
    Route::get('customer', 'index');
    Route::post('customer', 'store');
    Route::get('customer/{id}', 'show');
    Route::put('customer/{id}', 'update');
    Route::delete('customer/{id}', 'destroy');
});
