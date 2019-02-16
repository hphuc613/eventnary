@extends('Event::frontend.layout.master')

@push('css')
	<style>
		.button{
			text-transform: none;
			font-weight: 500;
		}
	</style>
@endpush

@section('content')
		<div class="clear"></div>

		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

						<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Đăng nhập</div>
						<div class="acc_content clearfix">
							<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
								<div class="col_full">
									<label for="login-form-username">Email/Số điện thoại:</label>
									<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="login-form-password">Mật khẩu:</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Đăng nhập</button>
									<a href="#" class="fright">Quên mật khẩu?</a>
								</div>
							</form>
						</div>

						<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>Bạn chưa có tài khoản? Vào đây để tạo tài khoản cho riêng mình nhé!</div>
						<div class="acc_content clearfix">
							<form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">
								<div class="col_full">
									<label for="register-form-name">Tên:</label>
									<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-phone">Số điện thoại:</label>
									<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-email">Địa chỉ email:</label>
									<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-password">Mật khẩu:</label>
									<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="register-form-repassword">Nhập lại mật khẩu:</label>
									<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
								</div>

								<div class="col_full nobottommargin">
									<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Tạo tài khoản</button>
								</div>
							</form>
						</div>

					</div>

				</div>

			</div>

		</section>

@endsection