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

Route::get('/home', function () {
    return view('welcome');
});

Route::group(['prefix' => 'cheeses'], function () {

    Route::get('/', ['uses' => 'DbCheesesController@index']);

    Route::get('/create', ['uses' => 'DbCheesesController@create']);
    Route::post('/create', ['as' => 'app.cheese', 'uses' => 'DbCheesesController@store']);
});



Route::group(['prefix' => 'pizza'], function (){

    Route::get('/', ['uses' => 'DbPizzaController@index']);

    Route::get('/create', ['uses' => 'DbPizzaController@create']);
    Route::post('/create', ['as' => 'app.pizza', 'uses' => 'DbPizzaController@store']);
});



Route::group(['prefix' => 'base'], function (){

    Route::get('/', ['uses' => 'DbBaseController@index']);

    Route::get('/create', ['uses' => 'DbBaseController@create']);
    Route::post('/create', ['as' => 'app.base', 'uses' => 'DbBaseController@store']);

});


Route::group(['prefix' => 'ingredients'], function (){

    Route::get('/', ['uses' => 'DbIngredientsController@index']);

    Route::get('/create', ['uses' => 'DbIngredientsController@create']);
    Route::post('/create', ['as' => 'app.ingredients', 'uses' => 'DbIngredientsController@store']);
});





