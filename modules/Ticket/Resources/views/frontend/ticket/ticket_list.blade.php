
<div class="m-t-30">
	<h4>Danh sách các loại vé</h4>
	<table class="table table-hover">
	  <thead>
		<tr>
		  <th>STT</th>
		  <th>Tên</th>
		  <th>Giá</th>
		  <th>Số vé còn lại</th>
		  <th>Ngày kết thúc bán vé</th>
		  <th>Loại vé</th>
		  <th>Trạng thái</th>
		  <th></th>
		</tr>
	  </thead>
	  <tbody>
		@foreach($data as $key => $val)
		<tr>
			<td>{{ $key+1 }}</td>
		    <td>{{ $val->title }}</td>
		    <td>{{ number_format($val->price) }} VNĐ</td>
		    <td>{{ $val->quality }}</td>
		    <td>{{ date_format(new DateTime($val->end_selling),'d-m-Y H:i:s') }}</td>
		    <td>{{ $val->type->title }}</td>
		    <td>{{ ticketStatusTitle($val->status) }}</td>
		    <td>
		    	<center>
	                <a href="{{ route('get.edit.ticket_home',$val->event->slug) }}" class="btn btn-warning white" data-toggle="tooltip" data-original-title="Sửa">Sửa</a>
	                <a href="{{ route('get.delete.ticket_home',$val->event->slug) }}" class="btn btn-danger" alt="{{ route('get.delete.ticket',$val->id) }}" id="del-warning" href="#" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-close text-danger"></i>Xóa</a>
	            </center>
		    </td>
		</tr>
		@endforeach
	  </tbody>
	</table>
</div>