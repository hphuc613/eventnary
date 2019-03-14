@extends('Event::frontend.layout.master')

@push('css')
	<style>
		#page-title{
			padding: 45px 0px 18px 0px;
		}

		.breadcrumb .breadcrumb-event{ color: #1ABC9C; }

	</style>

@endpush

@section('content')
@php
    $start_date=$data->start_date;
    $end_date=$data->end_date;
@endphp
	<section id="page-title">

		<div class="container clearfix">
			<h1>Sự kiện: {{ $data->title }}</h1>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('get.home.index') }}">Trang chủ</a></li>
				<li class="breadcrumb-item"><a href="{{ route('home.list.event') }} ">Sự kiện</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#" class="breadcrumb-event">{{ $data->title }}</a></li>
			</ol>
		</div>

	</section><!-- #page-title end -->

	<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-event">

						<div class="col_three_fourth">
							<div class="entry-image nobottommargin">
								<a href="#"><img src="{{ asset('upload/image/event/'.$data->current_image) }}" value="{{ $data->current_image }}" alt="Event Single"></a>
								<div class="entry-overlay">
									<span class="d-none d-md-block">Bắt đầu vào lúc: {{ date_format(new DateTime($start_date),'H:i d/m/Y') }}</span><div id="event-countdown" class="countdown"></div>
								</div>
							</div>
						</div>
						<div class="col_one_fourth col_last">
							<div class="card events-meta mb-3">
								<div class="card-header"><h5 class="mb-0">Event Info:</h5></div>
								<div class="card-body">
									<ul class="iconlist nobottommargin">
										<li><i class="icon-calendar3"></i>{{ date_format(new DateTime($start_date),'d-m-Y') }} - {{ date_format(new DateTime($end_date),'d-m-Y') }}</li>
										<li><i class="icon-time"></i> {{ date_format(new DateTime($start_date),'H:i') }} - {{ date_format(new DateTime($end_date),'H:i') }}</li>
										<li><i class="icon-map-marker2"></i> {{ $data->address }}, {{ $data->ward->title }}, {{ $data->ward->district->title }}, {{ $data->ward->district->city->title }}</li>
										<li><i class="icon-dollar"></i> <strong>@if($data->price) {{ $data->price }} @else 0 @endif VNĐ</strong></li>
									</ul>
								</div>
							</div>
							<a href="#" class="btn btn-success btn-block btn-lg">Mua vé</a>
						</div>

						<div class="clear"></div>
					
						<div class="row">
							<div class="col-md-9">

									{!! $data->content !!}

							</div>

							<div class="col-md-3">

								<h4>Location</h4>

								<section id="event-location" class="gmap" style="height: 300px;">
									{!! $data->location !!}
								</section>

								<h4>Thư viện hình ảnh</h4>

								<!-- Events Single Gallery Thumbs
								============================================= -->
								<div class="col-md-12" data-lightbox="gallery">
									@foreach($gallery as $key => $val)
									<a href="{{ asset('upload/image/event/multible/'.$val->title) }}" data-lightbox="gallery-item" class="">
										<img class="image_fade float-left" style="width: 48% !important; margin-right: 1px; border: 2px solid lightsteelblue;"; src="{{ asset('upload/image/event/multible/'.$val->title) }}" alt="Gallery Thumb 1">
									</a>
									@endforeach
								</div><!-- Event Single Gallery Thumbs End -->

							</div>

							<div class="clear"></div>
						</div>

					</div>

				</div>

			</div>

		</section>

@endsection