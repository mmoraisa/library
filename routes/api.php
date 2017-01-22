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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['prefix' => 'author'],function(){
    Route::get('',['uses' => 'AuthorController@getAll']);
    Route::get('/{id}',['uses' => 'AuthorController@get']);
    Route::post('',['uses' => 'AuthorController@save']);
    Route::put('/{id}',['uses' => 'AuthorController@update']);
    Route::delete('/{id}',['uses' => 'AuthorController@delete']);
});

Route::group(['prefix' => 'category'],function(){
    Route::get('',['uses' => 'CategoryController@getAll']);
    Route::get('/{id}',['uses' => 'CategoryController@get']);
    Route::post('',['uses' => 'CategoryController@save']);
    Route::put('/{id}',['uses' => 'CategoryController@update']);
    Route::delete('/{id}',['uses' => 'CategoryController@delete']);
});

Route::group(['prefix' => 'book'],function(){
    Route::get('',['uses' => 'BookController@getAll']);
    Route::get('/{id}',['uses' => 'BookController@get']);
    Route::post('',['uses' => 'BookController@save']);
    Route::put('/{id}',['uses' => 'BookController@update']);
    Route::delete('/{id}',['uses' => 'BookController@delete']);
});
