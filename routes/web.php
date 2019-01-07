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

Auth::routes();

Route::get('/', 'DashboardController@index');

Route::get('/bills', 'BillsController@index');
Route::get('/bills/add', 'BillsController@create');
Route::post('/bills', 'BillsController@store');
