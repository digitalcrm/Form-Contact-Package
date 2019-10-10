<?php


Route::group(['namespace'=>'Digitalcrm\Contact\Http\Controllers'], function(){

	Route::get('contact', 'ContactControllers@index')->name('contact');

	Route::post('contact', 'ContactControllers@send');

});
