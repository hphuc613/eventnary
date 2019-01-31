<?php
$namespace = 'HPro\Base\Http\Controllers';
Route::group(
    ['module'=>'Base', 'namespace' => $namespace],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
