@extends('Dashboard::layouts.master')

@include('Location::city.breadcrumb')

@section('content')

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Chỉnh sửa thành phố</h4>
            </div>
            <div class="card-body">
                <form class="form-material" method="post" action="{{ route('post.edit.city',$data->id) }}">
                 {{ csrf_field() }}
                    <div class="form-body">
                        <div class="p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tên thành phố</label>
                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên thành phố" value="{{ $data->title }}">
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Mô tả</label>
                                    <textarea class="form-control" name="description" rows="5" placeholder="Nhập mô tả">{{ $data->description }}</textarea>
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
    @include('Location::city.list2')
</div>
@endsection

