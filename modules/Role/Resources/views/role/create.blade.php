@extends('Dashboard::layouts.master')

@section('breadcrumb')
        Vai trò
@endsection

@section('link')
        <a href="{{ route('get.create.role') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tạo mới</a>
@endsection


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
                                <h4 class="m-b-0 text-white">Thêm vai trò</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="{{ route('post.create.role') }}">
                                 {{ csrf_field() }}
                                    <div class="form-body">
                                        <div class="p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tên vai trò</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên vai trò">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Mô tả</label>
                                                    <textarea class="form-control" name="description" rows="5" placeholder="Nhập mô tả"></textarea>
                                                </div>
                                            </div>
                                            <!--/span-->
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