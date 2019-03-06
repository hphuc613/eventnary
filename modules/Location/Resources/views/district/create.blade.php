@extends('Dashboard::layouts.master')

@include('Location::district.breadcrumb')

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
                <h4 class="m-b-0 text-white">Thêm quận huyện</h4>
            </div>
            <div class="card-body">
                <form class="form-material" method="post" action="{{ route('post.create.district') }}">
                 {{ csrf_field() }}
                    <div class="form-body">
                        <div class="p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Chọn thành phố</label>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <select class="form-control select2 custom-select" name="city_id">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tên quận huyện</label>
                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên quận huyện" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Mô tả</label>
                                    <textarea class="form-control" name="description" rows="5" placeholder="Nhập mô tả">{{ old('description') }}</textarea>
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
    @include('Location::district.list2')

</div>
@endsection