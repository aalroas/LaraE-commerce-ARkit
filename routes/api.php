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

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api']], function () {

Route::get('/products', 'API\ProductController@index');

Route::get('/products/{id}', 'API\ProductController@show');

Route::get('/orders', 'API\OrderController@index');

Route::post('/order', 'API\OrderController@store');

Route::post('/user/update', 'API\AuthController@update');

Route::post('logout','API\AuthController@logout');
   
});