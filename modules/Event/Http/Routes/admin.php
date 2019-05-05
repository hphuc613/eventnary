<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('event')->group(function(){
    		Route::get('list','EventController@getList')->name('get.list.event');
    		Route::get('create','EventController@getCreate')->name('get.create.event');
    		Route::post('create','EventController@postCreate')->name('post.create.event');
    		Route::get('edit/{id}','EventController@getEdit')->name('get.edit.event');
    		Route::post('edit/{id}','EventController@postEdit')->name('post.edit.event');
    		Route::get('delete/{id}','EventController@delete')->name('get.delete.event');
            Route::get('gallery/{id}','EventController@getListGallery')->name('get.list_gallery.event');
            Route::post('gallery','EventController@postListGallery')->name('post.list_gallery.event');
            Route::get('delete-gallery/{id}','EventController@deleteGallery')->name('get.delete_gallery.event');


            Route::get('chart/{id}','EventController@getChart')->name('get.chart.event');

            Route::get('search-event','AdminController@getSearchEvent')->name('get.search.event');

            Route::get('event-wait','AdminController@statusWait')->name('get.wait.event');
            Route::get('event-active','AdminController@statusActive')->name('get.active.event');
            Route::get('event-stop','AdminController@statusStop')->name('get.stop.event');
    	});
	});
    	

