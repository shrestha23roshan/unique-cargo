<?php

Route::namespace('Modules\MediaManagement\Http\Controllers')->middleware('access:admin.media-management')->prefix('admin/media-management')->name('admin.media-management.')->group(function(){
    Route::resource('banner', 'BannerController');
    Route::resource('brand', 'BrandController');
});
