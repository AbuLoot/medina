<?php

Auth::routes();


// Joystick Administration
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('/', 'Joystick\AdminController@index');
    Route::get('search-products', 'Joystick\ProductController@search');

    Route::resource('categories', 'Joystick\CategoryController');
    Route::resource('countries', 'Joystick\CountryController');
    Route::resource('companies', 'Joystick\CompanyController');
    Route::resource('cities', 'Joystick\CityController');
    Route::resource('news', 'Joystick\NewController');
    Route::resource('languages', 'Joystick\LanguageController');
    Route::resource('options', 'Joystick\OptionController');
    Route::resource('orders', 'Joystick\OrderController');
    Route::resource('pages', 'Joystick\PageController');
    Route::resource('products', 'Joystick\ProductController');
    Route::resource('gallery', 'Joystick\GalleryController');

    Route::resource('roles', 'Joystick\RoleController');
    Route::resource('users', 'Joystick\UserController');
    Route::resource('permissions', 'Joystick\PermissionController');

    Route::get('apps', 'Joystick\AppController@index');
    Route::get('apps/{id}', 'Joystick\AppController@show');
    Route::delete('apps/{id}', 'Joystick\AppController@destroy');
});


// Input
Route::get('search', 'InputController@search');
Route::get('search-ajax', 'InputController@searchAjax');
Route::post('send-app', 'InputController@sendApp');


// Pages
Route::get('/', 'PageController@index');
Route::get('contacts', 'PageController@contacts');
Route::get('{page}', 'PageController@page');
