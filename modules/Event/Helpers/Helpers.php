<?php

function eventStatusTitle($id)
{
	if($id==0){
		echo 'Ngừng hoạt động';
	}else{
		echo 'Đang hoạt động';
	}
}