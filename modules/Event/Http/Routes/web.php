<?php
    	Route::prefix('web')->group(function(){
			Route::prefix('base')->group(function(){
        		Route::get('index','BaseController@index');
        	});
    	});


        Route::get('event-list','EventController@list')->name('home.list.event');
        Route::get('event-detail','EventController@detail')->name('home.detail.event');


