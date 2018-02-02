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


//restaurant
/*Route::get('api/v1/restaurant/show/{rid}', 'RestaurantController@show');
Route::get('api/v1/restaurant/index', 'RestaurantController@index');

Route::post('api/v1/restaurant/store', 'RestaurantController@store');
Route::put('api/v1/restaurant/update/{rid}', 'RestaurantController@update');

Route::delete('api/v1/restaurant/destroy/{rid}', 'RestaurantController@delete');  */
