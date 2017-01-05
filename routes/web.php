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

use App\Http\Controllers\ContactController;

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

Route::get('staff/settings', 'StaffSectionController@edit')->name('staff.setting.edit');
Route::patch('staff/settings', 'StaffSectionController@update')->name('staff.setting.update');


Route::resource('staff', 'StaffController');


Route::get('main/settings', 'MainSectionController@edit')->name('main.setting.edit');
Route::patch('main/settings', 'MainSectionController@update')->name('main.setting.update');

Route::get('contact/settings', 'ContactSectionController@edit')->name('contact.setting.edit');
Route::patch('contact/settings', 'ContactSectionController@update')->name('contact.setting.update');

Route::resource('contact', ContactController::class);



