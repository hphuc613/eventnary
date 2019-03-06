<?php
$namespace = 'HPro\Location\Http\Controllers';
Route::group(
    ['module'=>'Location', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
