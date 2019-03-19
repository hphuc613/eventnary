@extends('Event::frontend.layout.master')
@section('title')
	Eventnary | Đăng nhập 
@endsection
@push('css')
	<style>
		.button{
			text-transform: none;
			font-weight: 500;
		}

		.acctitle{
			text-transform: uppercase;
		}

		label{
			text-transform: none;
			font-weight: 400;
			font-size: initial;
		}
	</style>
@endpush

@section('content')

		<div class="clear"></div>

		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">
				
					<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
						
						@include('Dashboard::layouts.notification')
						<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Đăng nhập</div>
						<div class="acc_content clearfix">
							<form id="login-form" name="login-form" class="nobottommargin" action="{{ route('post.home.login') }}" method="post">
								{{ csrf_field() }}
								<div class="col_full">
									<label for="login-form-username">Email/Số điện thoại:</label>
									<input type="text" id="login-form-username" name="account" value="{{ old('account') }}" class="form-control" />
								</div>

								<div class="col_full">
									<label for="login-form-password">Mật khẩu:</label>
									<input type="password" id="login-form-password" name="password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" type="submit" id="login-form-submit" name="login-form-submit" value="login">Đăng nhập</button>
									<a href="#" class="fright">Quên mật khẩu?</a>
								</div>
							</form>
						</div>

						<div class="clear"></div>

						<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>Bạn chưa có tài khoản? Đăng ký tài khoản tại đây nhé!</div>

						<div class="acc_content clearfix">
							<form id="register-form" name="register-form" class="nobottommargin" action="{{ route('post.create.account') }}" method="post">
                                {{ csrf_field() }}
								<input type="hidden" id="register-form-repassword" name="role_id" value="2" class="form-control" />
								<div class="col_full">
									<label for="register-form-name">Tên:</label>
									<input type="text" id="register-form-name" required	name="name" value="{{ old('name') }}" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-phone">Số điện thoại:</label>
									<input type="tel" id="register-form-phone" required name="phone" value="{{ old('phone') }}" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-email">Địa chỉ email:</label>
									<input type="email" id="register-form-email" required name="email" value="{{ old('email') }}" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-password">Mật khẩu:</label>
									<input type="password" id="register-form-password" required name="password" value="{{ old('password') }}" class="form-control" />
								</div>
									

								<div class="col_full nobottommargin">
									<button type="submit" class="button button-3d button-black nomargin">Tạo tài khoản</button>
								</div>
							</form>
						</div>

					</div>

				</div>

			</div>

		</section>

@endsection