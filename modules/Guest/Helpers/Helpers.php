<?php

function Representer($id)
{
	if($id){
		$data = DB::table('ticket_details')->find($id);
		echo $data->name;
	}else{
		echo 'Khách mời';
	}
}