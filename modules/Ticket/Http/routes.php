<?php
$namespace = 'HPro\Ticket\Http\Controllers';
Route::group(
    ['module'=>'Ticket', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
