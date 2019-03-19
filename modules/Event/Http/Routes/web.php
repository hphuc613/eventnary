<?php
    	Route::prefix('web')->group(function(){
			Route::prefix('base')->group(function(){
        		Route::get('index','BaseController@index');
        	});
    	});


        Route::get('event-list','WebController@getListEvent')->name('home.list.event');
        Route::get('event-detail/{id}','WebController@getInfoEvent')->name('home.detail.event');
        Route::get('event-create','WebController@getCreateEvent')->name('home.create.event');
        Route::post('event-create','WebController@postCreateEvent')->name('post.home.create.event');
        Route::get('event-edit/{id}-{slug}','WebController@getEditEvent')->name('get.home.edit.event');
        Route::post('event-edit/{id}-{slug}','WebController@postEditEvent')->name('post.home.edit.event');
        

        Route::get('gallery/{id}-{slug}','WebController@getListGalleryEvent')->name('get.home.list.gallery');
        Route::post('gallery/','WebController@postListGalleryEvent')->name('post.home.create.gallery');

        Route::get('search-event','WebController@searchEvent')->name('home.search.event');


