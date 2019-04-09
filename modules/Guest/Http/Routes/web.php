<?php
    	Route::prefix('web')->group(function(){
			Route::prefix('base')->group(function(){
        		Route::get('index','BaseController@index');
        	});
    	});


