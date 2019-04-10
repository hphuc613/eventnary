<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('guest')->group(function(){
    		Route::get('list/{id}','GuestController@getList')->name('get.list.guest');
    	});
	});
    	

