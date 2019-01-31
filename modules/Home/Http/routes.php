<?php
$namespace = 'HPro\Home\Http\Controllers';
Route::group(
    ['module'=>'Home', 'namespace' => $namespace],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
