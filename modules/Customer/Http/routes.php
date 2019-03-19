<?php
$namespace = 'HPro\Customer\Http\Controllers';
Route::group(
    ['module'=>'Customer', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
