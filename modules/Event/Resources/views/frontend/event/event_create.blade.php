@extends('Event::frontend.layout.master')
@section('title')
	Thêm mới sự kiện
@endsection

@section('content')
	
<div class="clear"></div>
<section id="content">
	<div class="content-wrap nopadding">
		<div class="container clearfix">
			<form action="{{ route('post.home.create.event') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
				<div class="tab-container">
					
					<div class="tab-content clearfix" id="tab-feeds">

						<h3>Thêm mới sự kiện</h3>
							@include('Dashboard::layouts.notification')
							<span><strong>Chú ý:</strong> (<span class="red">*</span>) là các trường bắt buộc phải nhập</span>
						<div class="row">

							<div class="col-4">
								<div class="list-group" id="list-tab" role="tablist">
									<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Thông tin sự kiện (<span class="red">*</span>)</a>
									<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Địa chỉ(<span class="red">*</span>)</a>
									<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Nội dung sự kiện</a>
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
													<input type="text" class="form-control" name="title" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Nhập tên sự kiện" value="{{ old('title') }}">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPhone1">Số điện thoại liên hệ (<span class="red">*</span>):</label>
													<input type="text" class="form-control" name="phone_contact" id="exampleInputPhone1" placeholder="Nhập số điện thoại liên hệ" value="{{ old('phone_contact') }}">
												</div>
											</div>
											<div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="exampleStartdate1">Ngày bắt đầu sự kiện (<span class="red">*</span>):</label>
				                                    <input type="text" class="min-date form-control" placeholder="{{ date('Y-m-d h:m:s') }}" 
				                                    id="exampleStartdate1" name="start_date" value="{{ old('start_date') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="exampleEnddate1">Ngày kết thúc sự kiện:</label>
				                                    <input type="text" class="min-date2 form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="exampleEnddate1" name="end_date" value="{{ old('end_date') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="examplentc1">Nhà tổ chức:</label>
				                                    <input type="text" class="form-control" id="examplentc1" placeholder="Nhập tên nhà tổ chức" name="organizational" value="{{ old('organizational') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label" for="exampleEndlinkntc1">Địa chỉ trang web của nhà tổ chức:</label>
				                                    <input type="text" class="form-control" id="exampleEndlinkntc1" placeholder="Địa chỉ web của nhà tổ chức" name="organizational_link" value="{{ old('organizational_link') }}">
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
		                                                <option value="{{ $city->id }}">{{ $city->title }}</option>
		                                                @endforeach
		                                            </select>
				                                </div>
				                            </div>
											<div class="col-md-6">
												<div class="form-group">
				                                    <label class="control-label">Chọn quận huyện (<span class="red">*</span>)</label>
		                                            <select class="select2 form-control custom-select" id="district" >
		                                                <option value="">--Chọn--</option>
		                                            </select>
		                                        </div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
                                					<label class="control-label">Chọn phường xã (<span class="red">*</span>)</label>
				                                    <select class="select2 form-control custom-select" id="ward" name="ward_id">
		                                                <option value="">--Chọn--</option>
		                                            </select>
		                                        </div>
											</div>
											<div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label">Địa chỉ (<span class="red">*</span>)</label>
				                                    <input type="text" name="address" class="form-control" placeholder="Nhập tên địa chỉ" value="{{ old('address') }}">
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <label class="control-label">Vị trí trên bản đồ</label>
				                                    <textarea class="form-control" name="location" id="location" rows="7" placeholder="Nhập địa chỉ Google Map">{{ old('location') }}</textarea>
				                                </div>
				                            </div>
				                            <div class="col-md-6">
				                                <div class="event-location">
				                                    
				                                </div>
				                            </div>
										</div>
									</div>
									<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
										<div class="row">
											<div class="col-md-12">
				                            	<div class="form-group">
				                            		<label for="mota1">Mô tả ngắn:</label>
				                            		<textarea name="description" id="mota1" class="form-control" rows="5">{{ old('description') }}</textarea>
				                            	</div>
				                            </div>
				                            <div class="col-md-12">
				                                <div class="form-group">
				                                    <label class="control-label">Nội dung:</label>
				                                    <textarea name="content" class="form-control" id="editor1" rows="20">{{ old('content') }}</textarea>
				                                </div>
				                            </div>
										</div>
									</div>
									<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
										<div class="row">
											<div class="col-md-3"></div>
											<div class="col-md-6">
			                                    <div class="form-group">
			                                        <label class="control-label">Ảnh chính</label>
													<input id="input-6" name="current_image" type="file" class="file-loading">
													<input name="status" type="hidden" value="0" class="file-loading">
													<input name="user_id" type="hidden" value="{{ Auth::guard('collaborator')->user()->id }}" class="file-loading">
			                                    </div>
			                                </div>
											<div class="col-md-3"></div>
											<div class="col-md-12 row m-t-50">
												<div class="col-md-3"></div>
												<div class="col-md-5"></div>
												<div class="col-md-4">
													<button type="submit" class="btn btn-primary"><i class="icon-plus"></i> Hoàn tất thêm sự kiện</button>
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