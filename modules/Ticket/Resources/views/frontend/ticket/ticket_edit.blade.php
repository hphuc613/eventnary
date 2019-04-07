@extends('Event::frontend.layout.master')
@section('title')
	Chỉnh sửa vé sự kiện
@endsection

@section('content')
<div class="clear"></div>
<section id="content" class="m-t-30">
		
	<div class="container">
        <div class="row">
	        <div class="col-md-8">
	            <h3>Sự kiện: <span class="event-name">{{ $event->getTitle() }}</span></h3>
	        </div>
	        <div class="col-md-4">
	            <a href="{{ route('get.home.edit.event',[$event->id,$event->slug]) }}" class="btn btn-primary float-right">Hoàn thành</a>
	        </div>
	    </div>
		@include('Dashboard::layouts.notification')
		<div class="row m-b-30">
			<div class="card">
			    <div class="card-header bg-info">
			        <h4 class="m-b-0 text-white">Chỉnh sửa thông tin @if($ticket->ticket_type_id == 1) Vé miễn phí @else Vé thu phí @endif</h4>
			    </div>
			    <div class="card-body">
			        <form class="form-material" method="post" action="{{ route('post.edit.ticket_home',$ticket->id) }}">
			         {{ csrf_field() }}
			            <input type="hidden" name="event_id" readonly="" class="form-control" value="{{ $ticket->event_id }}">
			            <input type="hidden" name="ticket_type_id" readonly="" class="form-control" value="{{ $ticket->ticket_type_id }}">
			            <div class="form-body">
			                <div class="row p-t-20">
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label class="control-label">Tên vé</label>
			                            <input type="text" name="title" class="form-control" placeholder="Nhập tên vé" value="{{ $ticket->title }}">
			                        </div>
			                    </div>
			                    
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label class="control-label">Số vé còn lại</label>
			                            <input type="text" name="quality" class="form-control" placeholder="Nhập số vé còn lại" value="{{ $ticket->quality }}">
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label class="control-label">Ngày bắt đầu bán vé</label>
			                            <input type="text" class="form-control min-date3" placeholder="{{ date('Y-m-d h:m:s') }}" name="start_selling" value="{{ $ticket->start_selling }}">
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label class="control-label">Ngày kết thúc bán vé</label>
			                            <input type="text" class="form-control min-date4" placeholder="{{ date('Y-m-d h:m:s') }}" name="end_selling" value="{{ $ticket->end_selling }}">
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label class="control-label">Số vé tối đa</label>
			                            <select name="max_selling" class="form-control" id="">
			                                @for($i=1;$i<=10;$i++)
			                                <option @if($ticket->max_selling == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
			                                @endfor
			                                <option @if($ticket->max_selling == 11) selected @endif value="11">Không giới hạn</option>
			                            </select>
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label class="control-label">Số vé tối thiếu</label>
			                            <select name="min_selling" class="form-control" id="">
			                                @for($i=1;$i<=10;$i++)
			                                <option @if($ticket->min_selling == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
			                                @endfor
			                            </select>
			                        </div>
			                    </div>
			                    <div class="col-md-6">
			                        <div class="form-group">
			                            <label class="control-label">Giá vé</label>
			                            <input type="text" name="price" @if($ticket->type->id==1 ) readonly @endif class="form-control" placeholder="Nhập giá vé" value="{{ $ticket->price }}">
			                        </div>
			                    </div>
			                </div>
			                <!--/row-->
			            </div>
			            <div class="form-actions float-right">
			                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Lưu</button>
			                <button type="reset" class="btn btn-inverse">Cancel</button>
			            </div>
			        </form>
			    </div>
			</div>
		</div>
		<div class="m-b-30">
			@include('Ticket::frontend.ticket.ticket_list')
		</div>
	</div>
	
</section>

@endsection