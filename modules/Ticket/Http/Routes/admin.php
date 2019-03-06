<?php
	Route::prefix('admin')->group(function(){
		Route::prefix('ticket')->group(function(){
    		Route::get('list','TicketController@getList')->name('get.list.ticket');
    		Route::get('create/{id_event}','TicketController@getCreate')->name('get.create.ticket');
    		Route::post('create','TicketController@postCreate')->name('post.create.ticket');
    		Route::get('edit/{id}','TicketController@getEdit')->name('get.edit.ticket');
    		Route::post('edit/{id}','TicketController@postEdit')->name('post.edit.ticket');
    		Route::get('delete/{id}','TicketController@delete')->name('get.delete.ticket');

    	});
	});
    	

