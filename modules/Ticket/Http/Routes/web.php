<?php
    	Route::prefix('ticket')->group(function(){
			Route::get('create/{slug_event}','WebController@getCreateTicket')->name('get.create.ticket_home');
			Route::post('create/{slug_event}','WebController@postCreateTicket')->name('post.create.ticket_home');
    	});


