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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('external-books', 'ExternalController@books');
Route::get('v1/books', 'BooksController@index');
Route::post('v1/books', 'BooksController@store');
Route::post('v1/books/{id}', 'BooksController@update');
Route::delete('v1/books/{id}', 'BooksController@destroy');
Route::get('v1/books/{id}', 'BooksController@show');