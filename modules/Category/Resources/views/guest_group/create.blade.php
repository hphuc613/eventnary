@extends('Dashboard::layouts.master')

@include('Category::guest_group.breadcrumb')

@section('content')
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Thêm nhóm khách mời</h4>
            </div>
            <div class="card-body">
                <form class="form-material" method="post" action="">
                 {{ csrf_field() }}
                    <div class="form-body">
                        <div class="p-t-20">
                            <div class="col-md-12">
                                
                                <div class="form-group">
                                    <label class="control-label">Tên nhóm khách mời</label>
                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên nhóm khách mời" value="{{ old('title') }}">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Mô tả</label>
                                    <textarea class="form-control" name="description" rows="5" placeholder="Nhập mô tả">{{ old('description') }}</textarea>
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
    @include('Category::guest_group.list2')
</div>
@endsection

