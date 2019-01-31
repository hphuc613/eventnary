<?php

        Route::get('/','HomeController@index')->name('get.home.index');
    	


    	Route::prefix('web')->group(function(){
			Route::prefix('home')->group(function(){

        	});
    	});


