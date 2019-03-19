<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('customer')->group(function(){
    		Route::get('list','CustomerController@getList')->name('get.list.customer');
    		Route::get('create','CustomerController@getCreate')->name('get.create.customer');
    		Route::post('create','CustomerController@postCreate')->name('post.create.customer');
    		Route::get('edit/{id}','CustomerController@getEdit')->name('get.edit.customer');
    		Route::post('edit/{id}','CustomerController@postEdit')->name('post.edit.customer');
            Route::get('delete/{id}','CustomerController@delete')->name('get.delete.customer');
    		Route::post('image/{id}','CustomerController@postImageEdit')->name('post.edit_image.customer');

    	});
	});
    	

