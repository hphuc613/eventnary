@extends('Event::frontend.layout.master')


@section('content')
@include('Event::frontend.layout.slider')


<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="postcontent nobottommargin">

						<div id="posts" class="events small-thumbs">
							
							@foreach($data as $key => $val)
								@php
								    $start_date=$val->start_date;
								    $end_date=$val->end_date;
								@endphp
								<div class="entry clearfix">
								<div class="entry-image">
									<a href="#">
										<img src="{{ asset('upload/image/event/'.$val->current_image) }}" alt="{{ $val->title }}">
										<div class="entry-date">10<span>Apr</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="#">{{ $val->title }}</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><a href="#"><i class="icon-time"></i> {{ date_format(new DateTime($start_date),'d-m-Y H:i') }} - {{ date_format(new DateTime($end_date),'d-m-Y H:i') }}</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> {{ $val->ward->district->title }}, {{ $val->ward->district->city->title }}</a></li>
									</ul>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
										<a href="#" class="btn btn-success " disabled="disabled">Buy Tickets</a>
										<a href="#" class="btn btn-danger">Read More</a>
									</div>
								</div>
								</div>
							@endforeach

						</div>

						<!-- Pagination
						============================================= -->
						<div class="row mb-3">
							<div class="col-12">
								<a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
								<a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
							</div>
						</div>
						<!-- .pager end -->

					</div>

					@include('Event::frontend.layout.sidebar')

				</div>

			</div>

		</section>

@endsection