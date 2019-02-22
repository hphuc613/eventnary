<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('event')->group(function(){
    		Route::get('list','EventController@getList')->name('get.list.event');
    		Route::get('create','EventController@getCreate')->name('get.create.event');
    		Route::post('create','EventController@postCreate')->name('post.create.event');
    		Route::get('edit/{id}','EventController@getEdit')->name('get.edit.event');
    		Route::post('edit/{id}','EventController@postEdit')->name('post.edit.event');
    		Route::get('delete/{id}','EventController@delete')->name('get.delete.event');

    	});
	});
    	

