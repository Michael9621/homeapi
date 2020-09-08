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

Route::apiResource('/categories', 'CategoryController');

Route::apiResource('/locations', 'LocationController');

Route::apiResource('/properties', 'PropertyController');

Route::get('/location/{id}/properties', 'LocationController@locationProperties');

Route::get('/category/{id}/properties', 'CategoryController@categoryProperties');


