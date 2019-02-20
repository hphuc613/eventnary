<?php
$namespace = 'HPro\Base\Http\Controllers';
Route::group(
    ['module'=>'Role', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
