<?php
$namespace = 'HPro\Event\Http\Controllers';
Route::group(
    ['module'=>'Event', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
