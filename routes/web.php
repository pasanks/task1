<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});

Auth::routes();

Route::get('/home', 'PagesController@getIndex')->name('home');
Route::get('/home/profile', 'HomeController@getProfile') ;

Route::post('/insert', 'BookController@insert') ;

Route::get('datatable', ['uses'=>'DatatablesController@datatable']);
Route::get('datatable/getposts', ['as'=>'datatable.getposts','uses'=>'DatatablesController@getPosts']);

Route::get('/show', 'BookController@showData');