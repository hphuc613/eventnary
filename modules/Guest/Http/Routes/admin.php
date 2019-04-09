<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('guest')->group(function(){
    		// Route::get('list','CustomerController@getList')->name('get.list.customer');

    	});
	});
    	

