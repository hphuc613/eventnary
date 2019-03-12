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
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#company" role="tab">Tài khoản ngân hàng</a> </li>
                    </ul>
                    <!-- Tab panes -->
                    <form class="form-horizontal" method="post" action="">
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
		                                    <input type="text" value="{{ $data->phone }}" name="phone" class="form-control form-control-line">
		                                </div>
		                                <div class="form-group col-md-6">
		                                    <label>Địa chỉ</label>
		                                    <input type="text" value="{{ $data->address }}" name="address" class="form-control form-control-line">
		                                </div>
		                                <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Chọn vai trò</label>
                                                <select class="form-control custom-select select2" name=role_id>
                                                @foreach($roles as $key => $role)
                                                    <option @if($role->id == $data->role_id) selected="" @endif value="{{ $role->id }}">{{ $role->title }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
		                            </div>
		                            
		                        </div>
		                    </div>
		                    <!-- Company -->
		                    <div class="tab-pane" id="company" role="tabpanel">
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
		                                    <div class="form-group ">
		                                        <label class="control-label">Chủ tài khoản</label>
		                                        (<small class="has-success form-control-feedback">Chủ tài khoản phải viết tên không dấu</small>)
		                                        <input type="text" id="lastName" class="form-control" placeholder="" name="     bank_account_owner"  value="{{ $data->bank_account_owner }}">
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
            </div>
        </div>
    </section>

@endsection