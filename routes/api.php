<?php

use Illuminate\Http\Request;

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



Route::group(['middleware' => ['checkindex']], function () {
    Route::get('books', 'BookApiController@index');
    Route::get('books/{book}', 'BookApiController@show');
    Route::post('books', 'BookApiController@store');
    Route::put('books/{book}', 'BookApiController@update');
    Route::delete('books/{book}', 'BookApiController@delete'); //
});



Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('get-details', 'PassportController@getDetails');
});