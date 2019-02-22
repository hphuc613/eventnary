<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('role')->group(function(){
    		Route::get('list','RoleController@getList')->name('get.list.role');
    		Route::get('create','RoleController@getCreate')->name('get.create.role');
    		Route::post('create','RoleController@postCreate')->name('post.create.role');
    		Route::get('edit/{id}','RoleController@getEdit')->name('get.edit.role');
    		Route::post('edit/{id}','RoleController@postEdit')->name('post.edit.role');
    		Route::get('delete/{id}','RoleController@delete')->name('get.delete.role');

    	});
	});
    	

