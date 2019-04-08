<?php

function eventStatusTitle($id)
{
	if($id==0){
		echo 'Ngừng hoạt động';
	}elseif($id==1){
		echo 'Đang hoạt động';
	}else{
		echo 'Đang chờ xét duyệt';
	}
}