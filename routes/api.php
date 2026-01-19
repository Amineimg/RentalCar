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

header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');


Route::get('/cars', 'CarApiController@getCars');
Route::get('/car/{id}', 'CarApiController@getCarForBook');
Route::get('/car/{id}/{car_name}', 'CarApiController@getCar');
Route::get('/posts', 'PostApiController@getPosts');
Route::get('/contents', 'ContentApiController@getContents');
Route::get('/search', 'SearchApiController@cars');
Route::post('/book', 'CarApiController@book');
Route::post('/contact', 'EmailApiController@contact');
