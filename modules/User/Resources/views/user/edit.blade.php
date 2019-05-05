@extends('Dashboard::layouts.master')

@include('User::user.breadcrumb')

@section('content')

	<section id="customer" >
        <div class="row">
            <!-- Column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{ route('post.edit_image.user',$data->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="control-label">Ảnh chính</label>
                                    <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="{{ asset('upload/image/user/'.$data->image) }}" value="{{ $data->image }}" />
                                </div>
                            <button type="submit" class="btn btn-success">Lưu</button>
                        </form>
                    </div>
                    <div><hr></div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>{{ $data->email }}</h6>
                        <small class="text-muted p-t-30 db">Phone</small>
                        <h6>{{ $data->phone }}</h6>
                        <small class="text-muted p-t-30 db">Address</small>
                        <h6>{{ $data->address }}</h6>
                        <br>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-8">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Thông tin cá nhân</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#bank" role="tab">Tài khoản ngân hàng</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#role" role="tab">Phân quyền</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <form class="form-material" method="post" action="">
                    {{ csrf_field() }}
	                    <div class="tab-content">
	                        <!-- Personal info -->
	                    
		                    <div class="tab-pane active show" id="personal" role="tabpanel">
		                        <div class="card-body">
		                            <div class="row">
		                                <div class="form-group col-md-6">
		                                    <label>Họ tên</label>
		                                    <input type="text" value="{{ $data->name }}" name="name" class="form-control form-control-line">
		                                </div>
		                                <div class="form-group col-md-6">
		                                    <label for="example-email">Email</label>
		                                    <input type="email" value="{{ $data->email }}" class="form-control form-control-line" name="email" id="example-email">
		                                </div>
		                                <div class="form-group col-md-6">
		                                    <label>Số điện thoại</label>
		                                    <input type="text" value="{{ $data->phone }}" data-inputmask-mask="9{10}" name="phone" class="form-control form-control-line">
		                                </div>
		                                <div class="form-group col-md-6">
		                                    <label>Địa chỉ</label>
		                                    <input type="text" value="{{ $data->address }}" name="address" class="form-control form-control-line">
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <!-- Company -->
		                    <div class="tab-pane" id="bank" role="tabpanel">
		                        <div class="card-body">
		                            <div class="row p-t-20">
		                                <div class="col-md-6">
		                                    <div class="form-group ">
		                                        <label class="control-label">Tên ngân hàng</label>
		                                        <input type="text" id="lastName" class="form-control" placeholder="" name="bank"  value="{{ $data->bank }}">
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group ">
		                                        <label class="control-label">Tên chi nhánh</label>
		                                        <input type="text" id="lastName" class="form-control" placeholder="" name="branch_bank"  value="{{ $data->branch_bank }}">
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group ">
		                                        <label class="control-label">Số tài khoản</label>
		                                        <input type="text" id="lastName" data-inputmask-mask="9{11}" class="form-control" placeholder="" name="bank_account_number"  value="{{ $data->bank_account_number }}">
		                                    </div>
		                                </div>
		                                <div class="col-md-6">
		                                    <div class="form-group has-success">
		                                        <label class="control-label">Chủ tài khoản</label>
		                                        <input type="text" id="lastName" class="form-control" placeholder="" name="     bank_account_owner"  value="{{ $data->bank_account_owner }}">
		                                        <small class="form-control-feedback">Chủ tài khoản phải viết tên không dấu</small>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="tab-pane" id="role" role="tabpanel">
		                        <div class="card-body">
		                            <div class="row">
		                            	<div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Chọn vai trò</label><br>
                                                <select class="form-control custom-select select2" style="width: 100%" name=role_id>
                                                @foreach($roles as $key => $role)
                                                    <option @if($role->id == $data->role_id) selected="" @endif value="{{ $role->id }}">{{ $role->title }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
		                            </div>
		                        </div>
		                    </div>
	                    </div>
		                <div class="card">
		                	<div class="card-body">
	                            <button type="submit" class="btn btn-success">Lưu</button>
		                	</div>
		                </div>
	                </form>
                </div>
                <div class="card">
                	<div class="row">
	                    <div class="col-lg-12">
	                        <div class="card">
	                            <div class="card-header bg-info">
	                                <h4 class="m-b-0 text-white">Danh sách vai trò</h4>
	                            </div>
	                            <div class="card-body">
	                                <div class="table-responsive">
	                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	                                        <thead>
	                                            <tr>
	                                                <th>STT</th>
	                                                <th>Tên sự kiện</th>
	                                                <th>Thời gian bắt đầu</th>
	                                                <th>Thời gian kết thúc</th>
	                                                <th>Trạng thái</th>
	                                                <th width="110px">Thao tác</th>
	                                            </tr>
	                                        </thead>
	                                        <tfoot>
	                                            <tr>
	                                                <th>STT</th>
	                                                <th>Tên sự kiện</th>
	                                                <th>Thời gian bắt đầu</th>
	                                                <th>Thời gian kết thúc</th>
	                                                <th>Trạng thái</th>
	                                                <th width="110px">Thao tác</th>
	                                            </tr>
	                                        </tfoot>
	                                        <tbody>
	                                            @foreach($data->event as $key => $val)
		                                            @php
					                                    $start_date=$val->start_date;
					                                    $end_date=$val->end_date;
					                                @endphp
	                                            <tr>
	                                                <td>{{ $key+1 }}</td>
	                                                <td>{{ $val->title }}</td>
	                                                <td>{{ date_format(new DateTime($start_date),'d-m-Y H:i:s') }}</td>
	                                                <td>{{ date_format(new DateTime($end_date),'d-m-Y H:i:s') }}</td>
	                                                <td>{{ eventStatusTitle($val->status) }}</td>
	                                                <td>
	                                                    <center>
	                                                        <a href="{{ route('get.edit.event',$val->id) }}" data-toggle="tooltip" data-original-title="Sửa"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
	                                                        <a href="javascript:void(0)" alt="{{ route('get.delete.event',$val->id) }}" id="del-warning" href="#" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-close text-danger"></i> </a>
	                                                        <!-- <button class="btn btn-danger" action="{{ route('get.delete.user',$val->id) }}" >Xóa</button> -->
	                                                    </center>
	                                                </td>
	                                                
	                                            </tr>
	                                            @endforeach
	                                        </tbody>
	                                    </table>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
                </div>
            </div>
        </div>
    </section>

@endsection