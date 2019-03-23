@extends('Event::frontend.layout.master')
@section('title')
	Eventnary | Cộng tác viên
@endsection

@push('css')
	<style>
		label{
			text-transform: none;
			font-size: 15px;
			font-weight: 600;
		}
	</style>
@endpush

@section('content')

<div class="clear"></div>

<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<div class="row clearfix">

				<div class="col-md-9">
				
					@if($data->image)
					<img src="{{ asset('upload/image/user/'.$data->image) }}" data-toggle="modal" data-target="#myModal" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">
					@else
					<img src="{{ asset('image/avatar.png') }}" data-toggle="modal" data-target="#myModal" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">
					@endif
					<div class="heading-block noborder">
						<h3 style="text-transform: none;">{{ $data->name }}</h3>
						<span>Hồ sơ của bạn</span>
					</div>

					<!-- Small modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-body">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Thay đổi ảnh đại diện</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<form action="{{ route('post.edit_image.user',$data->id) }}" method="post" enctype="multipart/form-data">
											{{ csrf_field() }}	
											<input id="input-8" type="file" name="image" class="file-loading" data-allowed-file-extensions='[]'>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>

					<div class="row clearfix">

						<div class="col-lg-12">
							@include('Dashboard::layouts.notification')

							<div class="tabs tabs-alt clearfix" id="tabs-profile">

								<ul class="tab-nav clearfix">
									<li><a href="#tab-feeds"><i class="icon-rss2"></i> Thông tin cá nhân</a></li>
									<li><a href="#tab-replies"><i class="icon-reply"></i> Tài khoản ngân hàng</a></li>
								</ul>
								
								<form action="" method="post">
								{{ csrf_field() }}	
									<div class="tab-container">
										
										<div class="tab-content clearfix" id="tab-feeds">
											
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputName1">Họ tên</label>
														<input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="emailHelp" value="{{ $data->name }}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputEmail1">Email</label>
														<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->email }}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputPhone1">Số điện thoại</label>
														<input type="text" class="form-control" name="phone" id="exampleInputPhone1" value="{{ $data->phone }}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputAddress1">Địa chỉ</label>
														<input type="text" class="form-control" id="exampleInputAddress1" aria-describedby="emailHelp" name="address" value="{{ $data->address }}">
													</div>
												</div>
											</div>
										</div>

										<div class="tab-content clearfix" id="tab-replies">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputBank1">Tên ngân hàng</label>
														<input type="text" class="form-control" name="bank" id="exampleInputBank1" aria-describedby="emailHelp" value="{{ $data->bank }}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputBranchBank1">Tên chi nhánh</label>
														<input type="text" class="form-control" name="branch_bank" id="exampleInputBranchBank1" aria-describedby="emailHelp" value="{{ $data->branch_bank }}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputBankNumber1">Số tài khoản</label>
														<input type="text" class="form-control" name="bank_account_number" id="exampleInputBankNumber1" value="{{ $data->bank_account_number }}">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputBankOwner1">Chủ tài khoản</label>
														<input type="text" class="form-control" id="exampleInputBankOwner1" aria-describedby="emailHelp" name="bank_account_owner" value="{{ $data->bank_account_owner }}">
													</div>
													<small id="emailHelp" class="form-text  red">* Chủ tài khoản phải viết tên không dấu</small>
												</div>
											</div>
										</div>
									</div>
								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary mt-3 float-right">Lưu</button>
									</div>
								</div>
								</form>

							</div>

						</div>

					</div>

				</div>

				<div class="w-100 line d-block d-md-none"></div>

				<div class="col-md-3 clearfix">

					@include('Home::profile.right_sidebar')

				</div>

			</div>

		</div>

	</div>

</section><!-- #content end -->

@endsection