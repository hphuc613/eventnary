@extends('Event::frontend.layout.master')


@section('content')
@include('Event::frontend.layout.slider')

<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="postcontent nobottommargin">

						<div id="posts" class="events small-thumbs">
							
							@for($i=0; $i<=3; $i++)
								<div class="entry clearfix">
								<div class="entry-image">
									<a href="#">
										<img src="frontend/images/events/thumbs/1.jpg" alt="Inventore voluptates velit totam ipsa tenetur">
										<div class="entry-date">10<span>Apr</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="#">Inventore voluptates velit totam ipsa tenetur</a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="badge badge-warning">Private</span></li>
										<li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a></li>
									</ul>
									<div class="entry-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
										<a href="#" class="btn btn-success " disabled="disabled">Buy Tickets</a>
										<a href="{{ route('home.detail.event') }}" class="btn btn-danger">Read More</a>
									</div>
								</div>
								</div>
							@endfor

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