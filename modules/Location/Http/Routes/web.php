<?php
	Route::prefix('admin')->group(function(){
		Route::get('ajax-district/{id}','WebController@ajaxOptionDistrict')->name('ajax.option.district');
        Route::get('ajax-ward/{id}','WebController@ajaxOptionWard');
	});