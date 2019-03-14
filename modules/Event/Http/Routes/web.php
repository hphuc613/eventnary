<?php
    	Route::prefix('web')->group(function(){
			Route::prefix('base')->group(function(){
        		Route::get('index','BaseController@index');
        	});
    	});


        Route::get('event-list','WebController@getListEvent')->name('home.list.event');
        Route::get('event-detail/{id}','WebController@getInfoEvent')->name('home.detail.event');
        Route::get('search-event','WebController@searchEvent')->name('home.search.event');


