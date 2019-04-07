<?php
    	Route::prefix('ticket')->group(function(){
			Route::get('create/{slug_event}','WebController@getCreateTicket')->name('get.create.ticket_home');
			Route::post('create/{slug_event}','WebController@postCreateTicket')->name('post.create.ticket_home');
			Route::get('edit/{slug_event}','WebController@getEditTicket')->name('get.edit.ticket_home');
			Route::post('edit/{slug_event}','WebController@postEditTicket')->name('post.edit.ticket_home');
			Route::get('delete/{slug_event}','WebController@deleteTicket')->name('get.delete.ticket_home');

	        Route::post('get-ticket/{id}','WebController@postGetTicket')->name('post.get.ticket');
    	});


