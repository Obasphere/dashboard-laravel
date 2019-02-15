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

Route::get('/teama', 'TeamAController@index')->name('teama');
Route::get('/teamb', 'TeamBController@index')->name('teamb');
Route::get('/teamc', 'TeamCController@index')->name('teamc');
Route::get('/teamd', 'TeamDController@index')->name('teamd');
Route::get('/teame', 'TeamEController@index')->name('teame');
Route::get('/teamf', 'TeamFController@index')->name('teamf');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/teams', 'TeamsController');
});

Route::get('/home', 'HomeController@index')->name('home');
