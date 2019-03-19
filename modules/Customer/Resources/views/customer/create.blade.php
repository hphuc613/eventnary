@extends('Dashboard::layouts.master')

@include('Customer::customer.breadcrumb')

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
                                <h4 class="m-b-0 text-white">Thêm khách mời</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="{{ route('post.create.customer') }}">
                                {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="card-title">Thông tin khách mời</h3>
                                        <input type="hidden" value="5" name="role_id">
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Họ tên</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Nhập tên" name="name" value="{{ old('name') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Số điện thoại</label>
                                                    <input type="tel" id="phone" class="form-control" data-inputmask-mask="9{10}" placeholder="Nhập số điện thoại" name="phone"  value="{{ old('phone') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" id="lastName" class="form-control" placeholder="" name="email"  value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Mật khẩu</label>
                                                    <input type="password" id="lastName" class="form-control" placeholder="" name="password"  value="{{ old('password') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
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