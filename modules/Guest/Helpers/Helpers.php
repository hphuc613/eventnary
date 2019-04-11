<?php

function Representer($id)
{
	$data = DB::table('guests')->find($id);
	echo $data->name;
}