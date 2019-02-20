<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('role')->group(function(){
    		Route::get('list','AdminController@getList')->name('get.list.role');
    		Route::get('create','AdminController@getCreate')->name('get.create.role');
    		Route::post('create','AdminController@postCreate')->name('post.create.role');
    		Route::get('edit/{id}','AdminController@getEdit')->name('get.edit.role');
    		Route::post('edit/{id}','AdminController@postEdit')->name('post.edit.role');
    		Route::get('delete/{id}','AdminController@delete')->name('get.delete.role');

    	});
	});
    	

