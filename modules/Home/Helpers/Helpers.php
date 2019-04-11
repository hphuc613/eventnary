<?php

function Authecation()
{
	if(Auth::guard('collaborator')->check()){
		return redirect()->back();
	}
	else{
		header('Location:'.route('get.home.login'));
		die();
	}

}


