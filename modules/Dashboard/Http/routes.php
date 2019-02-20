<?php
$namespace = 'HPro\Dashboard\Http\Controllers';
Route::group(
    ['module'=>'Role', 'namespace' => $namespace,'middleware' => ['web']],
    
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
