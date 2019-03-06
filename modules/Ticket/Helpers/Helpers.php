<?php

function ticketStatusTitle($id)
{
	if($id==0){
		echo 'Ngừng bán';
	}else{
		echo 'Đang bán';
	}
}