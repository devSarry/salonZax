<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/dashboard', 'AdminController@index');

Route::get('services/settings', 'ServiceSettingsController@edit')->name('services.setting.edit');
Route::patch('services/settings', 'ServiceSettingsController@update')->name('services.setting.update');

Route::resource('services', 'ServicesController');

Route::resource('category', 'ServiceCategoryController', [
    'only' => [
        'create', 'edit', 'update', 'destroy', 'store'
    ]]);

//Route::resource('staff', 'StaffController');



