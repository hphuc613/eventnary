@extends('Event::frontend.layout.master')
@section('title')
	Thư viện hình ảnh
@endsection

@section('content')

<div class="clear m-t-30"></div>
<section id="content">
	<div class="container">
		<div class="col_full clearfix">
		<div class="row">
			<div class="col-md-6">
				<h3>Thư viện hình ảnh</h3>
				@include('Dashboard::layouts.notification')
				<h4>Sự kiện: <a href="{{ route('get.home.edit.event',[$event->id,$event->slug]) }}"><span>{{ $event->title }}</span></a></h4>
			</div>
			<div class="col-md-6">
            	<center><button class="btn btn-success m-t-10"  data-toggle="modal" data-target="#myModal" >Tải lên</button></center>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-body">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="myModalLabel">Thay đổi ảnh đại diện</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">
									<form action="{{ route('post.home.create.gallery') }}" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}	
										<input id="input-8" type="file" name="title" class="file-loading" data-allowed-file-extensions='[]'>
                    					<input type="hidden" name="event_id" value="{{ $event->id }}" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="masonry-thumbs grid-5" data-big="1" data-lightbox="gallery">
			<a href="{{ asset('upload/image/event/'.$event->current_image) }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('upload/image/event/'.$event->current_image) }}" alt="Gallery Thumb 1"></a>
			@foreach($data as $key => $val)
			<a href="{{ asset('upload/image/event/multible/'.$val->title) }}" data-lightbox="gallery-item"><img class="image_fade" src="{{ asset('upload/image/event/multible/'.$val->title) }}" alt="Gallery Thumb 1"></a>
			@endforeach
		</div>
		</div>
	</div>
</section>

@endsection
