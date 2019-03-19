@extends('Event::frontend.layout.master')
@section('title')
	Thêm vé cho sự kiện
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
		    <div class="col-lg-6">
		        <div class="card">
		            <div class="card-header bg-info">
		                <h4 class="m-b-0 text-white">Thêm vé miễn phí</h4>
		            </div>
		            <div class="card-body">
		                <form class="form-material" method="post" action="">
		                 {{ csrf_field() }}
		                    <input type="hidden" name="event_id" readonly="" class="form-control" placeholder="Nhập giá vé" value="{{ $event->id }}">
		                    <input type="hidden" name="ticket_type_id" readonly="" class="form-control" placeholder="Nhập giá vé" value="{{ 1 }}">
		                    <div class="form-body">
		                        <div class="p-t-20">
		                            
		                            
									<div class="toggle">
										<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Mở rộng</div>
										<div class="togglec row">

											<div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Tên vé</label>
				                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên vé" value="{{ old('title') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Giá vé</label>
				                                    <input type="text" name="price" readonly="" class="form-control" placeholder="Nhập giá vé" value="{{ 0 }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Số vé còn lại</label>
				                                    <input type="text" name="quality" class="form-control" placeholder="Nhập số vé còn lại" value="{{ old('quality') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Ngày bắt đầu bán vé</label>
				                                    <input type="text" class="form-control min-date" placeholder="{{ date('Y-m-d h:m:s') }}" id="" name="start_selling" value="{{ old('start_selling') }}">
				                                </div>
				                            </div>


											<div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Ngày kết thúc bán vé</label>
				                                    <input type="text" class="form-control min-date2" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date2" name="end_selling" value="{{ $event->end_date }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Số vé tối đa có thể mua</label>
				                                    <select name="max_selling" class="form-control" id="">
				                                        @for($i=1;$i<=10;$i++)
				                                        <option value="{{ $i }}">{{ $i }}</option>
				                                        @endfor
				                                        <option selected value="Không giới hạn">Không giới hạn</option>
				                                    </select>
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Số vé tối thiếu có thể mua</label>
				                                    <select name="min_selling" class="form-control" id="">
				                                        @for($i=1;$i<=10;$i++)
				                                        <option value="{{ $i }}">{{ $i }}</option>
				                                        @endfor
				                                        <option value="Không giới hạn">Không giới hạn</option>
				                                    </select>
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Trạng thái</label>
				                                    <div class="custom-control custom-radio">
				                                        <input type="radio" id="customRadio1" name="status" class="custom-control-input" checked value="1">
				                                        <label class="custom-control-label" for="customRadio1">Hoạt động</label>
				                                    </div>
				                                    <div class="custom-control custom-radio">
				                                        <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="0">
				                                        <label class="custom-control-label" for="customRadio2">Ngừng hoạt động</label>
				                                    </div>
				                                </div>
				                            </div>

				                            <div class="col-md-12">
				                            	<div class="form-actions">
							                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Lưu</button>
							                        <button type="reset" class="btn btn-inverse">Cancel</button>
							                    </div>
				                            </div>
										</div>
									</div>
		                        </div>
		                        <!--/row-->
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		    <div class="col-lg-6">
		        <div class="card">
		            <div class="card-header bg-info">
		                <h4 class="m-b-0 text-white">Thêm vé thu phí</h4>
		            </div>
		            <div class="card-body">
		                <form class="form-material" method="post" action="">
		                 {{ csrf_field() }}
		                    <input type="hidden" name="event_id" readonly="" class="form-control" value="{{ $event->id }}">
		                    <input type="hidden" name="ticket_type_id" readonly="" class="form-control" value="{{ 2 }}">
		                    <div class="form-body">
		                        <div class="p-t-20">
		                            
		                            <div class="toggle">
										<div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>Mở rộng</div>
										<div class="togglec row">
											<div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Tên vé</label>
				                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên vé" value="{{ old('title') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Giá vé</label>
				                                    <input type="text" name="price" class="form-control" placeholder="Nhập giá vé" value="{{ old('price') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Số vé còn lại</label>
				                                    <input type="text" name="quality" class="form-control" placeholder="Nhập số vé còn lại" value="{{ old('quality') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Ngày bắt đầu bán vé</label>
				                                    <input type="text" class="form-control min-date3" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date3" name="start_selling" value="{{ old('start_selling') }}">
				                                </div>
				                            </div>
											<div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Ngày kết thúc bán vé</label>
				                                    <input type="text" class="form-control min-date4" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date2" name="end_selling" value="{{ $event->end_date }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Số vé tối đa có thể mua</label>
				                                    <select name="max_selling" class="form-control" id="">
				                                        @for($i=1;$i<=10;$i++)
				                                        <option value="{{ $i }}">{{ $i }}</option>
				                                        @endfor
				                                        <option selected value="Không giới hạn">Không giới hạn</option>
				                                    </select>
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Số vé tối thiếu có thể mua</label>
				                                    <select name="min_selling" class="form-control" id="">
				                                        @for($i=1;$i<=10;$i++)
				                                        <option value="{{ $i }}">{{ $i }}</option>
				                                        @endfor
				                                        <option value="Không giới hạn">Không giới hạn</option>
				                                    </select>
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Trạng thái</label>
				                                    <div class="custom-control custom-radio">
				                                        <input type="radio" id="customRadio1" name="status" class="custom-control-input" checked value="1">
				                                        <label class="custom-control-label" for="customRadio1">Hoạt động</label>
				                                    </div>
				                                    <div class="custom-control custom-radio">
				                                        <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="0">
				                                        <label class="custom-control-label" for="customRadio2">Ngừng hoạt động</label>
				                                    </div>
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                            	<div class="form-actions">
							                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Lưu</button>
							                        <button type="reset" class="btn btn-inverse">Cancel</button>
							                    </div>
				                            </div>
										</div>
									</div>
		                        </div>
		                        <!--/row-->
		                    </div>
		                    
		                </form>
		            </div>
		        </div>
		    </div>

		    <div class="col-lg-12">
		    	@include('Ticket::frontend.ticket.ticket_list')
		    </div>
		</div>
	</div>
</section>


@endsection
