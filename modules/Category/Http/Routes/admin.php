<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('event-type')->group(function(){
    		Route::get('list','EventTypeController@getList')->name('get.list.eventtype');
    		Route::get('create','EventTypeController@getCreate')->name('get.create.eventtype');
    		Route::post('create','EventTypeController@postCreate')->name('post.create.eventtype');
    		Route::get('edit/{id}','EventTypeController@getEdit')->name('get.edit.eventtype');
    		Route::post('edit/{id}','EventTypeController@postEdit')->name('post.edit.eventtype');
    		Route::get('delete/{id}','EventTypeController@delete')->name('get.delete.eventtype');

    	});
        Route::prefix('ticket-type')->group(function(){
            Route::get('list','TicketTypeController@getList')->name('get.list.tickettype');
            Route::get('create','TicketTypeController@getCreate')->name('get.create.tickettype');
            Route::post('create','TicketTypeController@postCreate')->name('post.create.tickettype');
            Route::get('edit/{id}','TicketTypeController@getEdit')->name('get.edit.tickettype');
            Route::post('edit/{id}','TicketTypeController@postEdit')->name('post.edit.tickettype');
            Route::get('delete/{id}','TicketTypeController@delete')->name('get.delete.tickettype');

        });


	});
    	

