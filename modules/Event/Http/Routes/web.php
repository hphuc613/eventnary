<?php
    	Route::prefix('web')->group(function(){
			Route::prefix('base')->group(function(){
        		Route::get('index','BaseController@index');
        	});
    	});


        Route::get('event-list','WebController@getListEvent')->name('home.list.event');
        // Route::get('event-detail','WebController@detail')->name('home.detail.event');


