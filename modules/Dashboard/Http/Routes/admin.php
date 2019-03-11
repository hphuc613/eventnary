<?php
	Route::prefix('admin')->group(function(){
    	Route::get('/','AdminController@index')->name('home.admin')->middleware('auth');
    	Route::get('/login','AdminController@getLogin')->name('get.login.admin');
    	Route::post('/login','AdminController@postLogin')->name('login');
	});
    	

