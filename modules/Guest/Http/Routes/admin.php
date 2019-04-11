<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('guest')->group(function(){
    		Route::get('create/{id}','GuestController@getCreate')->name('get.create.guest');
    		Route::post('create/{id}','GuestController@postCreate')->name('post.create.guest');
    		Route::get('edit/{id}-{event_id}','GuestController@getEdit')->name('get.edit.guest');
    		Route::post('edit/{id}-{event_id}','GuestController@postEdit')->name('post.edit.guest');
    		Route::get('delete/{id}','GuestController@getDelete')->name('get.delete.guest');
    	});
	});
    	

