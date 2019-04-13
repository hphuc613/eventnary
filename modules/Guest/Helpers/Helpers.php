<?php

function Representer($id)
{
	$data = DB::table('ticket_details')->find($id);
	echo $data->name;
}