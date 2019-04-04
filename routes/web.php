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

Route::resources([
    'car'=>'CarController',
    'search'=>'SearchController',
    'filter'=>'FilterController',
    'used-cars'=> 'UsedCarsController',
    'dash'=>'DashController',
    'api'=>'APIController'   



]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('used-cars/for-sale/{slug}', 'UsedCarsController@getForSale');
Route::get('used-cars/{town?}/{make?}', 'UsedCarsController@show');

Route::post('/search', 'SearchController@filter');
Route::get('/filter', 'FilterController@filter');
Route::post('/setfilter','FilterController@setfilter');

Route::get('geo/loc','GeoController@getLoc');
Route::get('geo/city/{town}','GeoController@getCity');


Route::get('used-cars/in/{town}','UsedCarsController@getIn');


Route::get('dependent-dropdown','APIController@index');
Route::get('get-make-list','APIController@getMakeList');
Route::get('get-model-list','APIController@getModelList');
Route::get('get-vehicle-list','APIController@getVehicleList');
#Route::get('get-city-list','APIController@getCityList');
Route::get('get-city-list','APIController@getOutcodeList');
Route::get('get-body-list','APIController@getBodyList');

Route::get('ukvd','UkvdController@index');
Route::get('ukvd/vd/{reg}','UkvdController@getVd');
Route::fallback(function () {
    //
    dd('Failed to find route - fallback');
});
