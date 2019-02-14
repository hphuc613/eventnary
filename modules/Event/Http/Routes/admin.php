<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('base')->group(function(){
    		Route::get('outdex','AdminController@outdex');
    	});
	});
    	

