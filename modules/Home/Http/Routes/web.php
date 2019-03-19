<?php

        Route::get('/','HomeController@getHome')->name('get.home.index');
        
        Route::get('/login-page','HomeController@getHomeLogin')->name('get.home.login');
        Route::post('/login-page','HomeController@postHomeLogin')->name('post.home.login');
        Route::get('/logout-page','HomeController@getHomeLogout')->name('get.home.logout');
    	


        Route::prefix('collaborator')->group(function(){
            Route::post('/sign-up','AccountController@postCreate')->name('post.create.account');
            Route::get('/have{id}onl','AccountController@getEditProfile')->name('get.edit.account');
            Route::post('/have{id}onl','AccountController@postEditProfile')->name('post.edit.account');
        });

    	Route::prefix('web')->group(function(){
			Route::prefix('home')->group(function(){

        	});
    	});


