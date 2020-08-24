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

//Route Clubs
Route::get('/club', 'ClubsController@index');

//Route Schedule
Route::get('/schedule', 'ScheduleController@index');

//Route Result
Route::get('/result', 'ResultController@index');
Route::post('/result', 'ResultController@store');

//Route Article
Route::get('/article', 'ArticleController@index');

//Route contact
Route::get('/contact', 'ContactController@index');


