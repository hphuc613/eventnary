<!-- Large modal -->

@if($ticket_free)
	@if($ticket_free->quality > 0)
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-body">
				<div class="modal-content">
					<form action="{{ route('post.get.ticket',$ticket_free->id) }}" method="post">
						{{ csrf_field() }}
						<div class="modal-header">
							<h4 class="modal-title" id="myModalLabel">
								Tên vé: <span>{{ $ticket_free->title }}</span><br>
								Số vé còn lại: <span class="red">{{ $ticket_free->quality }}</span> vé
							</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							@if(Auth::guard('collaborator')->check())
							<div class="form-group">
								<label >Nhập tên: </label>
								<input type="text" name="name" class="form-control" required value="{{ Auth::guard('collaborator')->user()->name }}">
							</div>
							<div class="form-group">
								<label >Số điện thoai: </label>
								<input type="text" name="phone" class="form-control" required value="{{ Auth::guard('collaborator')->user()->phone }}">
							</div>
							<div class="form-group">
								<label >Email: </label>
								<input type="text" name="email" class="form-control" required value="{{ Auth::guard('collaborator')->user()->email }}">
							</div>
							<div class="form-group">
								<label >Số lượng vé: </label>
								@if($ticket_free->max_selling == 11)
								<input type="number" name="quality" required class="form-control">
								@else
								<select name="quality" class="form-control" id="">
									@for($i=1; $i <= $ticket_free->max_selling; $i++)
									<option value="{{ $i }}">{{ $i }} Vé</option>
									@endfor
								</select>
								@endif
							</div>
							<input type="hidden" name="payment" value="2">
							<button class="btn btn-success btn-block btn-lg" type="submit">Mua vé</button>

							@else
							<div class="form-group center">
								***
								<p style="font-size: 20px"><i>Bạn phải đăng nhập tài khoản!</i></p>
								<a href="{{ route('get.home.login') }}" class="btn btn-info">Đăng nhập tài khoản</a>
							</div>
							@endif
							
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
						<h4 class="modal-title" id="myModalLabel">Tên vé: <span>{{ $data->title }}</span></h4>
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-body">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Nhận vé miễn phí sự kiện: <span>{{ $data->title }}</span></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body center">
					***
					<p style="font-size: 20px"><i>Vé miễn phí không có sẵn!</i></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endif