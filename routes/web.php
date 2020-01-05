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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/login', 'PagesController@login');
Route::resource('/SendGasoline', 'SendGasolineController');
Route::get('/create', 'SendGasolineController@create');
Route::resource('/dashboard', 'ConfirmationController');
Route::post('/dashboard', 'BroadCastController@sendBC');
Route::resource('/updatedgas', 'ConfirmationController');
Route::resource('/report', 'ReportController');
Route::post('/getreports', 'ReportController@issueFine');

Route::get('/getreports', 'ReportController@home')->middleware('auth');
Route::get('/fine', 'ReportController@getFines')->middleware('auth');
Route::post('/fine/object', 'ReportController@objectFine')->middleware('auth');
Route::post('/fine', 'ReportController@clearFine')->middleware('auth');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
