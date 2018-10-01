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

Route::get('/', 'product@list');
Route::get('/list', 'product@list')->name('list');
Route::match(array('GET', 'POST'),'/create', 'product@create')->name('create');
Route::match(array('GET', 'POST'), '/update/{product_id}', 'product@update')->name('update');
Route::get('/delete/{product_id}', 'product@delete')->name('delete');
Route::get('/view/{product_id}', 'product@view')->name('view');
