@extends('Event::frontend.layout.master')
@section('title')
	Chỉnh sửa sự kiện
@endsection

@push('css')
	<style>
		span{
			font-size: 20px;
		}
	</style>
@endpush

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Sự kiện: <a href="{{ route('get.home.edit.event',[$data->id,$data->slug]) }}">{{ $data->title }}</a></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('get.list.event_profile',Auth::guard('collaborator')->user()->id) }}">Sự kiện</a></li>
			<li class="breadcrumb-item active" aria-current="page">Chỉnh sửa sự kiện</li>
		</ol>
	</div>

</section><!-- #page-title end -->
	
<div class="clear"></div>
<section id="content">
	<div class="content-wrap nopadding">
		<div class="container clearfix">
			<form action="" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
				<div class="tab-container">
					
					<div class="tab-content clearfix" id="tab-feeds">

						<h3>Chỉnh sửa sự kiện</h3>
							@include('Dashboard::layouts.notification')
						<div class="row">
							<div class="col-md-12 m-b-10">
								<span><strong>Chú ý:</strong> (<span class="red">*</span>) là các trường bắt buộc phải nhập</span>
								<div class="float-right">
									@if($data->status == 1)
									<a href="{{ route('get.home.chart.event',[$data->id,$data->slug]) }}" class="btn btn-orange">Quản lý Thống kê</a>
									<a href="{{ route('get.create.ticket_home',$data->slug) }}" class="btn btn-info">Quản lý vé</a>
									<a href="{{ route('get.home.create.guest',[$data->id,$data->slug]) }}" class="btn btn-success">Quản khách mời</a>
									<a href="{{ route('get.home.list.gallery',[$data->id,$data->slug]) }}" class="btn btn-warning">Thư viện hình ảnh</a>
									<a href="{{ route('home.detail.event',[$data->id,$data->slug]) }}" alt="Đi đến trang chi tiết" class="btn btn-primary">Trang chi tiết</a>
									@else
									<a href="{{ route('get.create.ticket_home',$data->slug) }}" class="btn btn-info">Quản lý vé</a>
									<a href="{{ route('get.home.list.gallery',[$data->id,$data->slug]) }}" class="btn btn-warning">Thư viện hình ảnh</a>
									@endif
									
								</div>
							</div>
						</div>
						<div class="row">

							<div class="col-4">
								<div class="list-group" id="list-tab" role="tablist">
									<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Thông tin sự kiện (<span class="red">*</span>)</a>
									<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Địa chỉ(<span class="red">*</span>)</a>
									<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Nội dung sự kiện</a>
									<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-status" role="tab" aria-controls="settings">Trạng thái</a>
									<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Thêm hình ảnh</a>
								</div>
							</div>
							<div class="col-8">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputName1">Tên sự kiện (<span class="red">*</span>):</label>
													<input type="text" class="form-control" name="title" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Nhập tên sự kiện" value="{{ $data->title }}">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPhone1">Số điện thoại liên hệ (<span class="red">*</span>):</label>
													<input type="text" class="form-control" name="phone_contact" id="exampleInputPhone1" placeholder="Nhập số điện thoại liên hệ" value="{{ $data->phone_contact }}">
												</div>
											</div>
											<div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="exampleStartdate1">Ngày bắt đầu sự kiện (<span class="red">*</span>):</label>
				                                    <input type="text" class="min-date form-control" placeholder="{{ date('Y-m-d h:m:s') }}" 
				                                    id="exampleStartdate1" name="start_date" value="{{ $data->start_date }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="exampleEnddate1">Ngày kết thúc sự kiện:</label>
				                                    <input type="text" class="min-date2 form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="exampleEnddate1" name="end_date" value="{{ $data->end_date }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="examplentc1">Nhà tổ chức:</label>
				                                    <input type="text" class="form-control" id="examplentc1" placeholder="Nhập tên nhà tổ chức" name="organizational" value="{{ $data->organizational }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="exampleEndlinkntc1">Địa chỉ trang web của nhà tổ chức:</label>
				                                    <input type="text" class="form-control" id="exampleEndlinkntc1" placeholder="Địa chỉ web của nhà tổ chức" name="organizational_link" value="{{ $data->organizational_link }}">
				                                </div>
				                            </div>
				                            <div class="col-md-12">
				                            	<label for="">Thể loại sự kiện</label>
				                            	<select name="event_type_id" id="" class="form-control">
				                            		<option value="">-- Không có loại sự kiện --</option>
				                            		@foreach($type as $key => $val)
					                            		<option value="{{ $val->id }}">{{ $val->title }}</option>
				                            		@endforeach
				                            	</select>
				                            </div>
										</div>
									</div>
									<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

										<div class="row">
											<div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label">Chọn thành phố (<span class="red">*</span>)</label>
		                                            <select class="select2 form-control custom-select" id="city" >
		                                                <option value="">--Chọn--</option>
		                                                @foreach($cities as $key => $city)
                                                			<option @if($data->ward->district->city->id == $city->id) selected @endif value="{{ $city->id }}">{{ $city->title }}</option>
		                                                @endforeach
		                                            </select>
				                                </div>
				                            </div>
											<div class="col-md-6">
												<div class="form-group">
				                                    <label class="control-label">Chọn quận huyện (<span class="red">*</span>)</label>
		                                            <select class="select2 form-control custom-select" id="district" >
		                                                <option value="">--Chọn--</option>
		                                                @foreach($districts as $key => $district)
		                                                <option @if($data->ward->district->id == $district->id) selected @endif value="{{ $district->id }}">{{ $district->title }}</option>
		                                                @endforeach
		                                            </select>
		                                        </div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
                                					<label class="control-label">Chọn phường xã (<span class="red">*</span>)</label>
				                                    <select class="select2 form-control custom-select" id="ward" name="ward_id">
		                                                <option value="">--Chọn--</option>
		                                                @foreach($wards as $key => $ward)
		                                                <option @if($data->ward->id == $ward->id) selected @endif value="{{ $ward->id }}">{{ $ward->title }}</option>
		                                                @endforeach
		                                            </select>
		                                        </div>
											</div>
											<div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label">Địa chỉ (<span class="red">*</span>)</label>
				                                    <input type="text" name="address" class="form-control" placeholder="Nhập tên địa chỉ" value="{{ $data->address }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label">Vị trí trên bản đồ</label>
				                                    <textarea class="form-control" name="location" id="location" rows="7" placeholder="Nhập địa chỉ Google Map">{{ $data->location }}</textarea>
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="event-location">
				                                    {!! $data->location !!}
				                                </div>
				                            </div>
										</div>
									</div>
									<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
										<div class="row">
											<div class="col-md-12">
				                            	<div class="form-group">
				                            		<label for="mota1">Mô tả ngắn:</label>
				                            		<textarea name="description" id="mota1" class="form-control" rows="5">{{ $data->description }}</textarea>
				                            	</div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Nội dung:</label>
				                                    <textarea name="content" class="form-control" id="editor1" rows="20">{{ $data->content }}</textarea>
				                                </div>
				                            </div>
										</div>
									</div>
									<div class="tab-pane fade" id="list-status" role="tabpanel" aria-labelledby="list-messages-list">
										<div class="row m-t-30">
											<div class="col-md-4"></div>
											<div class="col-md-4">
												<div class="col-md-12 radio">
													<input type="radio" disabled name="status" @if($data->status==1) checked @endif value="1">
													<span> Đang hoạt động </span>
												</div>
												<div class="col-md-12 radio">
													<input type="radio" name="status" @if($data->status==2) checked @endif value="2">
													<span> Chờ xét duyệt </span>
												</div>
												<div class="col-md-12 radio">
													<input type="radio" name="status" @if($data->status==0) checked @endif value="0"> 
													<span> Ngừng hoạt động </span>
												</div>
											</div>
											<div class="col-md-4"></div>
										</div>
									</div>
									<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
										<div class="row">
											<div class="col-md-4"></div>
											<div class="col-md-4">
			                                    <div class="form-group">
			                                        <label class="control-label">Ảnh chính</label>
													<a href="{{ asset('upload/image/event/'.$data->current_image) }}" data-lightbox="image"><img class="image_fade" src="{{ asset('upload/image/event/'.$data->current_image) }}" alt="Standard Post with Image"></a>
			                                    </div>
			                                </div>
											<div class="col-md-4"></div>
											<div class="col-md-12">
												<input id="input-6" name="current_image" type="file" value="{{ $data->current_image }}" class="file-loading">
											</div>
											<div class="col-md-12 row m-t-50">
												<div class="col-md-3"></div>
												<div class="col-md-5"></div>
												<div class="col-md-4">
													<button type="submit" class="btn btn-primary"><i class="icon-plus"></i> Hoàn tất chỉnh sửa</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection

@push('js')
<script>
    $(document).ready(function(){
        $('#city').change(function(){
            var city = $("#city").val();
            var url = "{{ url('admin/ajax-district') }}/" + city;
            $.ajax({
                url : url,
                success : function(data){
                    $("#district").html(data);
                    console.log(data);
                }
            });
        });
    });

    $(document).ready(function(){
        $('#district').change(function(){
            var district = $("#district").val();
            var url = "{{ url('admin/ajax-ward') }}/" + district;
            $.ajax({
                url : url,
                success : function(data){
                    $("#ward").html(data);
                    console.log(data);
                }
            });
        });
    });

    // $(document).ready(function(){
    //     $('#title').change(function() {
    //         var title = $('#title').val();
    //         var data = slug(title);
    //         console.log(data);
    //         $('#slug').val(data);
    //     })
    // })

    $(document).ready(function(){
        $('#location').change(function() {
            var data = $('#location').val();
            console.log(data);
            $('.event-location').html(data);
        })
    })

	CKEDITOR.replace( 'editor1' );

</script>

@endpush