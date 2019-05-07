<?php

function ticketStatusTitle($id)
{
	if($id==0){
		echo 'Ngừng bán';
	}else{
		echo 'Đang bán';
	}
}

function paymentMethod($id)
{
	if($id==1){
		return "Thanh toán bằng thẻ tín dụng";
	}else{
		return "Thanh toán tại quầy bán vé";
	}
}