@extends('Dashboard::layouts.master')

@include('Event::event.breadcrumb')

@push('css')

@endpush
@section('content')
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Thêm sự kiện</h4>
            </div>
            <div class="card-body">
                <form class="form-material" method="post" action="{{ route('post.create.event') }}" enctype="multipart/form-data">
                 {{ csrf_field() }}
                    <div class="form-body">
                        <h3 class="card-title">Thông tin sự kiện</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Tên sự kiện</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Nhập tên sự kiện" value="{{ old('title') }}">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Số điện thoại liên hệ</label>
                                    <input type="text" name="phone_contact" class="form-control" data-inputmask-mask="9{10}" placeholder="Nhập số điện thoại" value="{{ old('phone_contact') }}">
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Ngày bắt đầu</label>
                                    <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date" name="start_date" value="{{ old('start_date') }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Ngày kết thúc</label>
                                    <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date2" name="end_date" value="{{ old('end_date') }}">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Mô tả ngắn</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">Nội dung</label>
                                    <textarea name="content" class="form-control" id="editor1" rows="20"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
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
                                    <div class="form-group">
                                        <label class="control-label">Ảnh chính</label>
                                        <input type="file" name="current_image" id="input-file-now-custom-1" class="dropify" data-default-file="{{ asset('backend/assets/node_modules/dropify/src/images/test-image-1.jpg') }}"/>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            
                            <!--/span-->
                        </div>
                        <h3 class="card-title">Địa chỉ</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nhà tổ chức</label>
                                    <input type="text" name="organizational" class="form-control" placeholder="Nhập tên sự kiện" value="{{ old('organizational') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Link nhà tổ chức</label>
                                    <input type="text" name="organizational_link" class="form-control" placeholder="Nhập tên sự kiện" value="{{ old('organizational_link') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Chọn thành phố</label>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" id="city" >
                                                <option value="">--Chọn--</option>
                                                @foreach($cities as $key => $city)
                                                <option value="{{ $city->id }}">{{ $city->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('get.create.city') }}" target="_blank" class="btn btn-success">Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Chọn quận huyện</label>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" id="district" >
                                                <option value="">--Chọn--</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('get.create.district') }}" target="_blank" class="btn btn-success">Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Chọn phường xã</label>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <select class="select2 form-control custom-select" id="ward" name="ward_id">
                                                <option value="">--Chọn--</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('get.create.ward') }}" target="_blank" class="btn btn-success">Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" placeholder="Nhập tên địa chỉ" value="{{ old('address') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Địa điểm</label>
                                    <textarea class="form-control" name="location" id="location" rows="10" placeholder="Nhập địa chỉ Google Map">{{ old('location') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-location">
                                    
                                </div>
                            </div>
                        </div>
                        <h3 class="card-title">Thể loại sự kiện</h3>
                        <hr>
                        <div class="row p-t-20 container">
                            <div class="col-md-1"></div>
                            <div class="col-md-9">
                                <select class="select2 form-control custom-select" name="event_type_id">
                                    <option value="">--Không có loại sự kiện--</option>
                                    @foreach($event_type as $key => $val)
                                    <option value="{{ $val->id }}">{{ $val->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ route('get.create.eventtype') }}" target="_blank" class="btn btn-success">Thêm</a>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions m-t-50 float-right has-danger">
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i> Tiếp theo</button>
                        <button type="reset" class="btn btn-inverse">Cancel</button>
                        <div class="form-control-feedback m-t-10">* Chọn tiếp theo để quản lý vé!</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
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
</script>

@endpush