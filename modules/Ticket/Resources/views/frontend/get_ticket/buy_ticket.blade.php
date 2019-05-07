<!-- Large modal -->

@if($ticket_fee)
	@if($ticket_fee->quality > 0)
	<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-body">
				<div class="modal-content">
					<form action="{{ route('post.get.ticket',$ticket_fee->id) }}" method="post">
						{{ csrf_field() }}
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">
								Mua vé: <span>{{ $ticket_fee->title }}</span><br>
								Số vé còn lại: <span>{{ $ticket_fee->quality }}</span> vé<br>
								Giá vé: <span>{{ number_format($ticket_fee->price) }}</span> VNĐ
							</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							@if(Auth::guard('collaborator')->check())
							<div class="form-group">
								<label for="">Nhập tên: </label>
								<input type="text" name="name" class="form-control" required value="{{ Auth::guard('collaborator')->user()->name }}">
							</div>
							<div class="form-group">
								<label for="">Số điện thoai: </label>
								<input type="text" name="phone" class="form-control" required value="{{ Auth::guard('collaborator')->user()->phone }}">
							</div>
							<div class="form-group">
								<label for="">Email: </label>
								<input type="text" name="email" class="form-control" required value="{{ Auth::guard('collaborator')->user()->email }}">
							</div>
							@else
							<div class="form-group">
								<label for="">Nhập tên: </label>
								<input type="text" name="name" required class="form-control">
							</div>
							<div class="form-group">
								<label for="">Số điện thoai: </label>
								<input type="text" name="phone" required class="form-control">
							</div>
							<div class="form-group">
								<label for="">Email: </label>
								<input type="text" name="email" required class="form-control">
							</div>
							@endif
							<div class="form-group">
								<label for="">Số lượng vé mua: </label>
								@if($ticket_fee->max_selling == 11)
								<input type="number" name="quality" required class="form-control">
								@else
								<select name="quality" class="form-control" id="">
									@for($i=1; $i <= $ticket_fee->max_selling; $i++)
									<option value="{{ $i }}">{{ $i }} Vé</option>
									@endfor
								</select>
								@endif
							</div>
							<div class="form-group">
								<label>Chọn phương thức thanh toán</label>
								<select name="payment" class="form-control" id="payment">
									<option value="2">Thanh toán tại quầy bán vé</option>
									<option value="1">Thanh toán bằng thẻ tín dụng</option>
								</select>
							</div>
							<div class="form-group">
								<div id="payment_method">
									
								</div>
							</div>
							<button class="btn btn-success btn-block btn-lg" type="submit">Mua vé</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@else
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-body">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Mua vé: <span>{{ $data->title }}</span></h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body center">
						***
						<p style="font-size: 20px"><i>Sự kiện này đã hết vé!</i></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
@else
<div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Mua vé sự kiện: <span>{{ $data->title }}</span></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body center">
					***
					<p style="font-size: 20px"><i>Đây là sự kiện mở cửa miễn phí!</i></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endif