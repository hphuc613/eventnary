<?php
$namespace = 'HPro\Guest\Http\Controllers';
Route::group(
    ['module'=>'Guest', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
