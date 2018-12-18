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

Route::get('admin/sua-cong-viec/{id}','AdminController@getEditWork')->name('getEditWork');

Route::post('admin/sua-cong-viec','AdminController@postEditWork')->name('postEditWork');

Route::get('admin/sua-trong-so','AdminController@getEdit')->name('getEdit');

Route::post('admin/them-cong-viec','AdminController@postAddWork')->name('postAddWork');

Route::get('admin/xoa-cong-viec/{id}','AdminController@getDeleteJob')->name('getDeleteJob');

Route::post('tim-kiem','AdminController@postSearchWork')->name('postSearchWork');

Route::post('lay-danh-sach-dia-diem','AdminController@postListLocation')->name('postListLocation');
