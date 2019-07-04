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

/**
 * Frontend Route
 */
Route::get('/', 'HomeController@index')->name('home');
/** Contacts **/
Route::get('contacts', 'HomeController@getContacts')->name('contacts');
Route::post('contacts','HomeController@sendmail')->name('contacts.mail');

/**
 * Backend Route
 */

Route::group(['namespace' => 'Auth'], function(){
    Route::get('unique-cargo-login', ['as' => 'login', 'uses' => 'LoginController@login']);
    Route::post('unique-cargo-login', ['as' => 'auth.login', 'uses' => 'LoginController@authenticate']);
    Route::post('logout', ['as' => 'auth.logout', 'uses' => 'LoginController@logout']);
});
