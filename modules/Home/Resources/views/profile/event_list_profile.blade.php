@extends('Event::frontend.layout.master')
@section('title')
	Eventnary | Cộng tác viên
@endsection

@section('content')

<div class="clear"></div>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row clearfix">
				<div class="col-md-9">
					<div class="tab-content clearfix" id="tab-posts">
						<div class="heading-block noborder">
							<h3 style="text-transform: none;">{{ $data->name }}</h3>
							<span>Hồ sơ của bạn</span>
						</div>
						<div class="row topmargin-sm clearfix">
						@foreach($event as $key => $val)
							@php
							    $start_date=$val->start_date;
							    $end_date=$val->end_date;
							@endphp
							<div class="col-12 bottommargin-sm">

								<div class="ipost clearfix">
									<div class="row clearfix">
										<div class="col-md-4">
											<div class="entry-image">
												<a href="{{ asset('upload/image/event/'.$val->current_image) }}" data-lightbox="image"><img class="image_fade" src="{{ asset('upload/image/event/'.$val->current_image) }}" alt="Standard Post with Image"></a>
											</div>
										</div>
										<div class="col-md-8">
											<div class="entry-title">
												<h3><a href="{{ route('get.home.edit.event',[$val->id,$val->slug]) }}">{{ $val->title }} @if($val->status==1) (Đang hoạt động) @elseif($val->status==0) (Chưa được duyệt) @endif</a></h3>
											</div>
											<ul class="entry-meta clearfix">
												<li><i class="icon-calendar3"></i> {{ date_format(new DateTime($start_date),'d-m-Y H:i') }} - {{ date_format(new DateTime($end_date),'d-m-Y H:i') }}</li>
											</ul>
											<div class="entry-content">
												<p>{{ $val->description }}</p>
											</div>
											<div class="entry-content">
												<a href="{{ route('get.home.edit.event',[$val->id,$val->slug]) }}" class="btn btn-primary">Quản lý sự kiện</a>
												<a href="#" class="btn btn-success">Quản lý khách mời</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-3 clearfix">
					@include('Home::profile.right_sidebar')
				</div>
				<div class="col-md-9">
					<a href="{{ $event->previousPageUrl() }}" class="btn btn-outline-secondary float-left">&larr; Trang trước</a>
					<a href="{{ $event->nextPageUrl() }}" class="btn btn-outline-dark float-right">Trang sau &rarr;</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
