<?php

/*
 * Route for getting hotel admin log in form
 */
Route::get('hotel/login', [
    'as' => 'hotel.login',
    'uses' => 'Hotel\AuthController@getLogin'
]);

/**
 * Route for posting the hotel admin data when log in (Authenticate)
 */
Route::post('hotel/login', [
    'as' => 'hotel.login',
    'uses' => 'Hotel\AuthController@postLogin'
]);

/**
 * Route for hotel admin log out
 */
Route::get('hotel/logout', [
    'as' => 'hotel.logout',
    'uses' => 'Hotel\AuthController@getLogout'
]);

/**
 * Route for hotel admin get to edit hotel page
 */
Route::get('hotel/edit', [
    'as' => 'hotel.edit',
    'uses' => 'Hotel\HotelController@edit'
]);

/**
 * Route for posting hotel data to update
 */
Route::post('hotel/edit', [
    'as' => 'hotel.edit',
    'uses' => 'Hotel\HotelController@update'
]);
