<?php
    	Route::prefix('ticket')->group(function(){
			Route::get('create/{slug_event}','WebController@getCreateTicket')->name('get.create.ticket_home');
			Route::post('create/{slug_event}','WebController@postCreateTicket')->name('post.create.ticket_home');
			Route::get('edit/{slug_event}','WebController@getEditTicket')->name('get.edit.ticket_home');
			Route::post('edit/{slug_event}','WebController@postEditTicket')->name('post.edit.ticket_home');
			Route::get('delete/{slug_event}','WebController@deleteTicket')->name('get.delete.ticket_home');

			Route::get('sell/{id}-{slug_event}','WebController@getSellTicket')->name('get.sell.ticket_home');
			Route::post('sell/{id}-{slug_event}','WebController@postSellTicket')->name('post.sell.ticket_home');
			Route::get('sell/edit/{id}-{event_id}-{slug_event}','WebController@getEditTicketDetail')->name('get.sell.edit.ticket_home');
			Route::post('sell/edit/{id}-{event_id}-{slug_event}','WebController@postEditTicketDetail')->name('post.sell.edit.ticket_home');

			Route::get('sell/delete/{id}-{slug_event}','WebController@getDeleteTicketDetail')->name('get.sell.delete.ticket_home');

	        Route::post('get-ticket/{id}','WebController@postGetTicket')->name('post.get.ticket');
    	});


