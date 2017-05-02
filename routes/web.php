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
    return view('welcome');
});

Route::group(['prefix' => 'pizzpad'], function () {
    Route::post('/create', ['as' => 'makepizza.create', 'uses' => 'PZPizzaPadController@create']);
    Route::get('/', ['uses' => 'PZPizzaPadController@index']);

});


Route::get('/cheese', ['uses' => 'PZCheeseController@index']);

Route::get('/ingredients', ['uses' => 'PZIngredientsController@index']);

