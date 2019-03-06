<?php

        Route::get('/','HomeController@getHome')->name('get.home.index');
        Route::get('/login-page','HomeController@login')->name('get.home.login');
    	


    	Route::prefix('web')->group(function(){
			Route::prefix('home')->group(function(){

        	});
    	});


