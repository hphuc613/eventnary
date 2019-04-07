<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('base')->group(function(){
    		Route::get('outdex','AdminController@outdex');
    	});
	});
    	

    Route::get('/test/email','AdminController@getTestMail');
    Route::post('/test/email','AdminController@postTestMail');
