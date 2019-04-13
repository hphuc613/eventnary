@extends('Dashboard::layouts.master')

@include('Guest::guest.breadcrumb')

@section('content')
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-info">

                                <h4 class="m-b-0 text-white">Thêm khách mời</h4>
                                <h4 class="m-b-0 text-white">Sự kiện: {{ $event->title }}</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="{{ route('post.create.guest',$event->id) }}">
                                 {{ csrf_field() }}
                                    <div class="form-body">
                                        <div class="p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Tên người đại diện</label>
                                                    <select name="represent_id" class="form-control select2">
                                                        <option value="">-- Chọn người đại diện--</option>
                                                        @foreach($representers as $key => $val)
                                                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tên khách mời</label>
                                                    <input type="text" name="name" required class="form-control" placeholder="Nhập tên vai trò" value="{{ old('name') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số điện thoại khách mời</label>
                                                    <input type="text" name="phone" required class="form-control" placeholder="Nhập tên vai trò" value="{{ old('phone') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Email khách mời</label>
                                                    <input type="email" name="email" required class="form-control" placeholder="Nhập tên vai trò" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <input type="hidden" name="event_id" class="form-control" value="{{ $event->id }}">
                                            <input type="hidden" name="guest_group_id" class="form-control" value="2">

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
                    <!-- Start Page Content -->
                
                    @include('Guest::guest.list2')
                </div>
@endsection