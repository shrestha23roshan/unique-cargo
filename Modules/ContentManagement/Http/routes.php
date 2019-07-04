<?php

Route::namespace('Modules\ContentManagement\Http\Controllers')->middleware('access:admin.content-management')->prefix('admin/content-management')->name('admin.content-management.')->group(function(){
    Route::resource('about-us', 'AboutUsController', ['only' => ['index', 'edit', 'update']]);
    Route::resource('services', 'ServiceController');
    Route::resource('works', 'WorksController');
});

/** Frontend Routes */
Route::group(['namespace' => 'Modules\ContentManagement\Http\Controllers\Frontend'], function() {
    /** About us Routes */
    Route::get('about-us', 'AboutUsController@index')->name('about-us.index');

     /** Service Routes */
     Route::get('services', 'ServiceController@index')->name('services.index');

     /** Work Routes */
     Route::get('works', 'WorksController@index')->name('works.index');
     Route::get('works/{slug}', 'WorksController@show')->name('works.show');
   
 });
