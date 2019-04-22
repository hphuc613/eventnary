<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('city')->group(function(){
    		Route::get('list','CityController@getList')->name('get.list.city');
    		Route::get('create','CityController@getCreate')->name('get.create.city');
    		Route::post('create','CityController@postCreate')->name('post.create.city');
    		Route::get('edit/{id}','CityController@getEdit')->name('get.edit.city');
    		Route::post('edit/{id}','CityController@postEdit')->name('post.edit.city');
    		Route::get('delete/{id}','CityController@delete')->name('get.delete.city');

    	});
        Route::prefix('district')->group(function(){
            Route::get('list','DistrictController@getList')->name('get.list.district');
            Route::get('create','DistrictController@getCreate')->name('get.create.district');
            Route::post('create','DistrictController@postCreate')->name('post.create.district');
            Route::get('edit/{id}','DistrictController@getEdit')->name('get.edit.district');
            Route::post('edit/{id}','DistrictController@postEdit')->name('post.edit.district');
            Route::get('delete/{id}','DistrictController@delete')->name('get.delete.district');

        });
        Route::prefix('ward')->group(function(){
            Route::get('list','WardController@getList')->name('get.list.ward');
            Route::get('create','WardController@getCreate')->name('get.create.ward');
            Route::post('create','WardController@postCreate')->name('post.create.ward');
            Route::get('edit/{id}','WardController@getEdit')->name('get.edit.ward');
            Route::post('edit/{id}','WardController@postEdit')->name('post.edit.ward');
            Route::get('delCete/{id}','WardController@delete')->name('get.delete.ward');

        });


	});
    	

