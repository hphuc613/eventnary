<div id="side-panel" class="dark">

	<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

	<div class="side-panel-wrap">

	
	@if(Auth::guard('collaborator')->check())
		@php
			$collaborator = Auth::guard('collaborator');
		@endphp
		<div class="widget widget_links clearfix">
			<div class="row">
				<div class="col-md-4">
					<center><a href="">
						@if($collaborator->user()->image)
						<img src="{{ asset('upload/image/user/'.$collaborator->user()->image) }}" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">
						@else
						<img src="{{ asset('image/avatar.png') }}" class="alignleft img-circle img-thumbnail notopmargin nobottommargin" alt="Avatar" style="max-width: 84px;">
						@endif
					</a></center>
				</div>
				<div class="col-md-8">
					<div class="p-l-10" style="font-size: 14px;">
						<a href="{{ route('get.edit.account',$collaborator->user()->id) }}"><h4 class="m-b-10">{{ $collaborator->user()->name }}</h4></a>
						{{ $collaborator->user()->email }}
						<ul class="left m-t-10" >
							<a class="" href="{{ route('home.create.event') }}"><i class="icon-plus"></i> Tạo sự kiện mới</a><br>
							<a class="" href="{{ route('get.list.event_profile',$collaborator->user()->id) }}"><i class="icon-tasks"></i> Sự kiện của bạn</a><br>
							<a class="" href="#"><i class="icon-bar-chart"></i> Thống kê sự kiện</a><br>
							<a class="" href="{{ route('get.home.logout') }}"><i class="icon-signout"></i> Đăng xuất</a>
						</ul>
					</div>
				</div>
			</div>
			
		</div>
	@else

		<div class="center">
			<form id="login-form" name="login-form" class="nobottommargin" action="{{ route('post.current.login') }}" method="post">
				{{ csrf_field() }}
				<input type="text" class="form-control" required="" name="account"  placeholder="Email/Số điện thoại">
				<input type="password" class="form-control m-t-5" required name="password" placeholder="Mật khẩu">
				<button class="btn btn-primary m-t-10 m-b-10" type="submit">Đăng nhập</button>
			</form>
			<a href="{{ route('get.home.login') }}"><u>Đăng ký</u></a>
		</div>

		<div class="widget quick-contact-widget clearfix">

			<h4>Về chúng tôi</h4>

			<div style="font-size: 14px; line-height: 1.7;">
				<address style="line-height: 1.7;">
					123/321 Nguyễn Văn Cừ, Phường An Khánh<br>
					Quận Ninh Kiều, Thành Phố Cần Thơ<br>
				</address>

				<div class="clear topmargin-sm"></div>

				<abbr title="Phone Number">Số điện thoại:</abbr> (91) 8547 632521<br>
				<abbr title="Fax">Fax:</abbr> (91) 11 4752 1433<br>
				<abbr title="Email Address">Email:</abbr> eventnary.system@gmail.com
			</div>

		</div>

		<div class="widget quick-contact-widget clearfix">

			<h4>Connect Socially</h4>

			<a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
				<i class="icon-facebook"></i>
				<i class="icon-facebook"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
				<i class="icon-twitter"></i>
				<i class="icon-twitter"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-github" title="Github">
				<i class="icon-github"></i>
				<i class="icon-github"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-pinterest" title="Pinterest">
				<i class="icon-pinterest"></i>
				<i class="icon-pinterest"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-forrst" title="Forrst">
				<i class="icon-forrst"></i>
				<i class="icon-forrst"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-linkedin" title="LinkedIn">
				<i class="icon-linkedin"></i>
				<i class="icon-linkedin"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-gplus" title="Google Plus">
				<i class="icon-gplus"></i>
				<i class="icon-gplus"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-instagram" title="Instagram">
				<i class="icon-instagram"></i>
				<i class="icon-instagram"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-flickr" title="Flickr">
				<i class="icon-flickr"></i>
				<i class="icon-flickr"></i>
			</a>
			<a href="#" class="social-icon si-small si-colored si-skype" title="Skype">
				<i class="icon-skype"></i>
				<i class="icon-skype"></i>
			</a>

		</div>


	@endif
	</div>

</div>