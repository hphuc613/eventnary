<?php
	$listModule = array_map('basename', File::directories(__DIR__));

		foreach ($listModule as $module)
		{

		$namespace = "'HPro\'".$module."'\Http\Controllers'";
		Route::group(
		    ['module'=>$module, 'namespace' => $namespace,'middleware' => ['web']],
		    function() {

		    	require('Routes\web.php');
		    	require('Routes\admin.php');
		});

	}
