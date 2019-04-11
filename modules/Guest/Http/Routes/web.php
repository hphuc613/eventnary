<?php
    Route::prefix('event')->group(function(){
		Route::prefix('guest')->group(function(){
    		Route::get('create/{id}-{slug}','WebController@getCreateGuest')->name('get.home.create.guest');
    		Route::post('create/{id}-{slug}','WebController@postCreateGuest')->name('post.home.create.guest');
    		Route::get('edit/{id}-{event_id}-{slug}','WebController@getEditGuest')->name('get.home.edit.guest');
    		Route::post('edit/{id}-{event_id}-{slug}','WebController@postEditGuest')->name('post.home.edit.guest');
    		Route::get('delete/{id}','WebController@getDeleteGuest')->name('get.home.delete.guest');
    	});
	});


