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

Route::get('/','ClientController@getHome')->name('getHome');

Route::get('cong-viec','ClientController@getWorkInfo')->name('getWorkInfo');

Route::get('admin/trang-chu','AdminController@getHome')->name('getAdminHome');

Route::get('admin/them-cong-viec','AdminController@getAddWork')->name('getAddWork');

Route::get('admin/sua-cong-viec','AdminController@getEditWork')->name('getEditWork');

Route::get('admin/sua-trong-so','AdminController@getEdit')->name('getEdit');
