<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('szolgaltatasok', 'HomeController@services')->name('services');
Route::get('arak', 'HomeController@prices')->name('prices');
Route::get('csapat', 'HomeController@team')->name('team');
Route::get('kapcsolat', 'HomeController@contact')->name('contact');

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', function () {
        return redirect()->route('admin.service.index');
    });

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::prefix('service')->name('service.')->group(function () {
            Route::get('index', 'ServiceController@index')->name('index');
            Route::get('create', 'ServiceController@create')->name('create');
            Route::get('edit/{id}', 'ServiceController@edit')->name('edit');
            Route::get('delete/{id}', 'ServiceController@delete')->name('delete');
            Route::post('save/{id?}', 'ServiceController@save')->name('save');
        });

        Route::prefix('service-photo')->name('service-photo.')->group(function () {
            Route::get('delete/{id}', 'ServiceController@deletePhoto')->name('delete');
        });
    });
});
