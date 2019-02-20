<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/style.css') }}" type="text/css" />
	
	<!-- One Page Module Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('/frontend/onepage.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('/frontend/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/et-line.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('/frontend/css/fonts.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/frontend/css/responsive.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Eventnary | Hệ thống quản lý tổ chức sự kiện</title>
	<link rel="SHORTCUT ICON"  href="{{ asset('/image/logo.png') }}">


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
		
		@include('Home::layouts.header')

		<!-- #header end -->

		@include('Home::home.slider')

		<!-- Content
		============================================= -->

		@yield('content')

		<!-- #content end -->

		<!-- Footer
		============================================= -->
		
		@include('Home::layouts.footer')

		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('/frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('/frontend/js/plugins.js') }}"></script>

	<!-- Google Map JavaScripts
	============================================= -->
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
	<script src="{{ asset('/frontend/js/jquery.gmap.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('/frontend/js/functions.js') }}"></script>
	

	<script>

		jQuery(window).on( 'load', function(){

			// Google Map
			jQuery('#headquarters-map').gMap({
				address: 'Melbourne, Australia',
				maptype: 'ROADMAP',
				zoom: 14,
				markers: [
					{
						address: "Melbourne, Australia",
						html: "Melbourne, Australia",
						icon: {
							image: "images/icons/map-icon-red.png",
							iconsize: [32, 32],
							iconanchor: [14,44]
						}
					}
				],
				doubleclickzoom: false,
				controls: {
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				},
				styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"simplified"},{"saturation":"-100"},{"lightness":"30"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"gamma":"0.00"},{"lightness":"74"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"lightness":"3"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
			});

		});

	</script>
</body>
</html>