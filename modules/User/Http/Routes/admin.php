<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('user')->group(function(){
    		Route::get('list','UserController@getList')->name('get.list.user');
    		Route::get('create','UserController@getCreate')->name('get.create.user');
    		Route::post('create','UserController@postCreate')->name('post.create.user');
    		Route::get('edit/{id}','UserController@getEdit')->name('get.edit.user');
    		Route::post('edit/{id}','UserController@postEdit')->name('post.edit.user');
            Route::get('delete/{id}','UserController@delete')->name('get.delete.user');
    		Route::post('image/{id}','UserController@postImageEdit')->name('post.edit_image.user');

    	});
	});
    	

