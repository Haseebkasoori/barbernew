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

Route::post('/user/login', 'Auth\LoginController@ApiLogin');
Route::post('/user/register', 'Auth\RegisterController@ApiRegister');

Route::post('/saloon/login', 'Saloon\Auth\LoginController@ApiLogin');
Route::post('/saloon/register', 'Saloon\Auth\RegisterController@ApiRegister');
Route::post('/saloon/availability', 'ApiController@storeAvailability');
Route::post('/saloonsById', 'ApiController@getSaloonsById');
Route::post('/saloonsBySearch', 'ApiController@getSaloonsBySearch');
Route::post('/SaloonsByName', 'ApiController@getSaloonsByName');
Route::post('/AllServices', 'ApiController@getAllServices');
Route::post('/cities', 'ApiController@getCityForSearch');
Route::post('/SaloonAvailabilities', 'ApiController@getAvailabilitiesBySaloonId');
Route::post('/AllAvailabilities', 'ApiController@getAvailabilities');
Route::post('/SaloonBookings', 'ApiController@getBookingsBySaloonId');
Route::post('/CustomerBookings', 'ApiController@getBookingsByUserId');

Route::post('/slotBooking', 'CustomerController@slotBooking');
Route::post('/slotBookingUpdate', 'CustomerController@slotBookingUpdate');

Route::group(['middleware' => ['auth:api']], function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/edit-customer', 'CustomerController@update');
    Route::get('/categories', 'ApiController@getCategories');
    Route::get('/services/{cat_id}', 'ApiController@getServicesByCatId');
    
});

Route::group(['middleware' => ['auth:saloon-api']], function(){
    Route::get('/saloon', function (Request $request) {
        return $request->user();
    });
    Route::post('/edit-saloon', 'Saloon\SaloonController@update');
});
