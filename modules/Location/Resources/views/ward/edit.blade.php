@extends('Dashboard::layouts.master')

@include('Location::ward.breadcrumb')

@push('css')

    <style>
        .form-control[readonly]{
            font-weight: bold;
        }
    </style>
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
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Thêm phường xã</h4>
            </div>
            <div class="card-body">
                <form class="form-material" method="post" action="{{ route('post.edit.ward',$data->id) }}">
                 {{ csrf_field() }}
                    <div class="form-body">
                        <div class="p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Thành phố</label>
                                    <input type="text" class="form-control" readonly value="{{ $data->district->city->title }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Quận huyện</label>
                                    <input type="hidden" class="form-control" readonly name="district_id" value="{{ $data->district_id }}">
                                    <input type="text" class="form-control" readonly value="{{ $data->district->title }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Tên phường xã</label>
                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên phường xã" value="{{ $data->title }}">
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
    @include('Location::ward.list2')
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
</script>

@endpush