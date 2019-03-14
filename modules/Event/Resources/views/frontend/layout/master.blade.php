<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/fonts.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/custom_hp.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Danh Sách Sự Kiện</title>
	<link rel="SHORTCUT ICON"  href="{{ asset('/image/logo.png') }}">

@stack('css')
<style>

#top-search-input {
	float: right;
	margin: 33px 0 33px 15px;
	-webkit-transition: margin .4s ease;
	-o-transition: margin .4s ease;
	transition: margin .4s ease;
}

#top-search-input form {
	width: 160px;
	height: 34px;
	padding: 0;
	margin: 0;
}

#header.sticky-header #top-search-input { margin: 13px 0 13px 15px; }

@media (max-width: 991px) {

	#top-search-input {
		float: none;
		margin: 20px 0;
	}

	#top-search-input form {
		margin: 0 auto;
		width: 300px;
	}

}

.device-sm #top-search-input form { width: 100%; }

</style>

</head>

<body class="stretched side-push-panel">

	<div class="body-overlay"></div>

	<div id="side-panel" class="dark">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget widget_links clearfix">

				<h4>Về chúng tôi</h4>

				<div style="font-size: 14px; line-height: 1.7;">
					<address style="line-height: 1.7;">
						123/321 Nguyễn Văn Cừ, Phường An Khánh<br>
						Quận Ninh Kiều, Thành Phố Cần Thơ<br>
					</address>

					<div class="clear topmargin-sm"></div>

					<abbr title="Phone Number">Số điện thoại:</abbr> (91) 8547 632521<br>
					<abbr title="Fax">Fax:</abbr> (91) 11 4752 1433<br>
					<abbr title="Email Address">Email:</abbr> wofl.alone613@gmail.com
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

			<div class="top-header">
				<div class="container-fluid center topmargin">
					<a href="{{ route('get.home.login') }}" class="btn btn-primary">Đăng nhập </a>
				</div>
			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{ route('get.home.index') }}" class="standard-logo"  data-dark-logo="{{ asset('image/logo_eventnary2.png') }}"><img src="{{ asset('image/logo_eventnary2_dark.png') }}" alt="Eventnary Logo"></a>

						<a href="{{ route('get.home.index') }}" class="retina-logo" data-dark-logo="{{ asset('image/logo_eventnary2.png') }}"><img src="{{ asset('image/logo_eventnary2_dark.png') }}" alt="Eventnary Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="{{ route('get.home.index') }}"><div>Home</div></a>
							<li><a href="{{ route('home.list.event') }}"><div>Sự kiện</div></a>
							</li>
						</ul>

						<div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i class="icon-reorder"></i></a></div>
						

						<!-- Top Search
						============================================= -->
						<div id="top-search-input">
							<form action="{{ route('home.search.event') }}" method="get">
			                 {{ csrf_field() }}
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-line-search"></i></div>
									</div>
									<input type="text" name="key" class="form-control" value="" placeholder="Search..">
								</div>
							</form>
						</div><!-- #top-search end -->



					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		
		@yield('content')
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder">

			<div class="container center">
				<div class="footer-widgets-wrap">

					<div class="row divcenter clearfix">

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>Liên kết</h4>

								<ul class="list-unstyled align-left footer-site-links nobottommargin">
									<li><a href="#" data-scrollto="#wrapper" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Top</a></li>
									<li><a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Giới thiệu</a></li>
									<li><a href="#" data-scrollto="#section-works" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Works</a></li>
									<li><a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Services</a></li>
									<li><a href="#" data-scrollto="#section-blog" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Sự kiện</a></li>
									<li><a href="#" data-scrollto="#section-contact" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Liên hệ</a></li>
									<li><a href="#" data-scrollto="#section-feedback" data-easing="easeInOutExpo" data-speed="1250" data-offset="70">Phản hồi</a></li>
								</ul>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget subscribe-widget clearfix" data-loader="button">
								<h4>Subscribe</h4>

								<div class="widget-subscribe-form-result"></div>
								<form id="widget-subscribe-form" action="../include/subscribe.php" role="form" method="post" class="nobottommargin">
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control form-control-lg not-dark required email" placeholder="Email của bạn">
									<button class="button button-border button-circle button-light topmargin-sm" type="submit">Theo dõi chúng tôi</button>
								</form>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="widget clearfix">
								<h4>Liên hệ</h4>

								<p class="lead">123/321 Nguyễn Văn Cừ, Phường An Khánh<br>
										Quận Ninh Kiều, Thành Phố Cần Thơ</p>

								<div class="center topmargin-sm">
									<a href="#" class="social-icon inline-block noborder si-small si-facebook" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-twitter" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-github" title="Github">
										<i class="icon-github"></i>
										<i class="icon-github"></i>
									</a>
									<a href="#" class="social-icon inline-block noborder si-small si-pinterest" title="Pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>

			<div id="copyrights">
				<div class="container center clearfix">
					Copyright Hoàng Phúc 2019 | All Rights Reserved
				</div>
			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('frontend/js/functions.js') }}"></script>

</body>
</html>