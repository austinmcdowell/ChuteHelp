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


Route::get('/', 'SiteController@index');
Route::get('/contact', 'SiteController@contact');


Auth::routes();

Route::get('/admin', 'AdminController@index');
Route::get('/admin/retailers', 'AdminController@retailers');
Route::get('/admin/contact', 'AdminController@contact');
Route::post('/admin/save', 'AdminController@save');

Route::get('/admin/retailers', 'RetailerController@index');
Route::get('/admin/retailers/add', 'RetailerController@add');
Route::get('/admin/retailer/edit/{id}', 'RetailerController@edit');
Route::post('/admin/retailer/save', 'RetailerController@save');

