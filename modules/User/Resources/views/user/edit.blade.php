@extends('Dashboard::layouts.master')

@include('User::user.breadcrumb')

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
                                <h4 class="m-b-0 text-white">Thêm người dùng</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="{{ route('post.edit.user',$data->id) }}">
                                {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title">Thông tin người dùng</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Họ tên</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Nhập tên" name="name" value="{{ $data->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Số điện thoại</label>
                                                    <input type="tel" id="phone" class="form-control" data-inputmask-mask="9{10}" placeholder="Nhập số điện thoại" name="phone"  value="{{ $data->phone }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" id="lastName" class="form-control" placeholder="" name="email"  value="{{ $data->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Mật khẩu</label>
                                                    <input type="password" id="lastName" class="form-control" placeholder="" name="password"  value="{{ $data->password }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label class="control-label">Địa chỉ</label>
                                                    <input type="text" id="lastName" class="form-control" placeholder="" name="address"  value="{{ $data->address }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Chọn vai trò</label>
                                                    <select class="form-control custom-select" name=role_id>
                                                    @foreach($roles as $key => $role)
                                                        <option @if($role->id == $data->role_id) selected="" @endif value="{{ $role->id }}">{{ $role->title }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <h3 class="card-title">Tài khoản ngân hàng</h3>
                                        <hr>
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
                                                    (<small class="form-control-feedback">Chủ tài khoản phải viết tên không dấu</small>)
                                                    <input type="text" id="lastName" class="form-control" placeholder="" name="     bank_account_owner"  value="{{ $data->bank_account_owner }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Lưu</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('js')
        

@endpush