<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route Home
Route::get('/', 'HomeController@index');

//Route Continent
Route::get('/continent', 'ContinentController@index');
Route::post('/continent', 'ContinentController@store');
Route::put('/continent/{id}', 'ContinentController@update');
Route::delete('/continent/{id}', 'ContinentController@destroy');
Route::get('/continent/dataTable', 'ContinentController@dataTable');

//Route Country
Route::get('/country', 'CountryController@index');
Route::post('/country', 'CountryController@store');

//Route Dropdown
Route::get('/get-country','DropdownController@getCountry');
Route::get('/get-club','DropdownController@getClub');
Route::get('/get-position-code','DropdownController@getPositionCode');

//Route Clubs
Route::get('/club', 'ClubsController@index');
Route::post('/club/create', 'ClubsController@store');

//Route Players
Route::get('/player-create/{id}', 'PlayersController@create');
Route::post('/player-store', 'PlayersController@store');


//Route Schedule
Route::get('/schedule', 'ScheduleController@index');

//Route Result
Route::get('/result', 'ResultController@index');
Route::post('/result', 'ResultController@store');

//Route Standing
//Route::post('/result', 'StandingsController@store');

//Route Article
Route::get('/article', 'ArticleController@index');

//Route contact
Route::get('/contact', 'ContactController@index');


