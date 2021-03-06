<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Eventnary Email</title>
</head>
<body>
	
	<div class="content">
		<h3>{{ $ticket }}</h3>
		<p>Chào mừng {{ $name }} đến với Eventnary System!</br></p>
		<p>Bạn đã mua vé để tham gia sự kiện <a href="http://eventnary.hp/event-detail/{{ $event_id }}">{{ $event }}</a></p>
		<p>Địa chỉ tại: {{ $address }}</p>
		<p>{{ $type }}</p>
		<p>Tổng số vé bạn mua là: {{ $quality }} vé</p>
		<p>Phương thức thanh toán của bạn là: <b>{{ $payment }}</b> </p>
		<p>Tổng giá tiền của bạn là: <b>{{ number_format($price) }} VNĐ</b></p>
		<p><b>Chú ý:</b> <i>Cho nhân viên soát vé xem email này khi bạn tham gia sự kiện này!</i></p>
	</div>
	
</body>
</html>

