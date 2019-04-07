<?php

        Route::get('/','HomeController@getHome')->name('get.home.index');
        
        Route::get('/login-page','HomeController@getHomeLogin')->name('get.home.login');
        Route::post('/login-page','HomeController@postHomeLogin')->name('post.home.login');
        Route::get('/logout-page','HomeController@getHomeLogout')->name('get.home.logout');
    	


        Route::prefix('collaborator')->group(function(){
            Route::post('/sign-up','AccountController@postCreate')->name('post.create.account');
            Route::get('/have{id}onl','AccountController@getEditProfile')->name('get.edit.account');
            Route::post('/have{id}onl','AccountController@postEditProfile')->name('post.edit.account');
            Route::get('list-event/have{id}onl','AccountController@getListEventProfile')->name('get.list.event_profile');
            Route::post('image/have{id}onl','AccountController@postImageEdit')->name('post.edit_image.account');
        });

    	Route::prefix('web')->group(function(){
			Route::prefix('home')->group(function(){

        	});
    	});


