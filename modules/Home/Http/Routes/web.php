<?php

        Route::get('/','HomeController@getHome')->name('get.home.index');
        Route::get('/login-page','HomeController@getHomeLogin')->name('get.home.login');
        Route::post('/login-page','HomeController@postHomeLogin')->name('post.home.login');
    	


    	Route::prefix('web')->group(function(){
			Route::prefix('home')->group(function(){

        	});
    	});


