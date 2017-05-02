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

Route::get('/cheese', ['uses' => 'DbCheesesController@index']);


Route::post('/cheese', ['as' => 'app.cheese', 'uses' => 'DbCheesesController@create']);



Route::get('/base', ['uses' => 'DbPizzaBottomsController@index']);


Route::post('/base', ['as' => 'app.base', 'uses' => 'DbPizzaBottomsController@create']);


Route::get('/ingredients', ['uses' => 'DbPizzaIngredientsController@index']);


Route::post('/ingredients', ['as' => 'app.ingredients', 'uses' => 'DbPizzaIngredientsController@create']);