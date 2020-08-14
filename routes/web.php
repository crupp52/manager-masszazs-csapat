<?php

Auth::routes();

Route::get('/', function () {
    return view('dashboard.base');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('service')->name('service.')->group(function () {
        Route::get('index', 'ServiceController@index')->name('index');
        Route::get('create', 'ServiceController@create')->name('create');
        Route::get('edit/{id}', 'ServiceController@edit')->name('edit');
        Route::get('delete/{id}', 'ServiceController@delete')->name('delete');
        Route::post('save/{id?}', 'ServiceController@save')->name('save');
    });
});
