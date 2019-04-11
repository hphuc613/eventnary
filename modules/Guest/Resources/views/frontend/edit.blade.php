@extends('Event::frontend.layout.master')
@section('title')
    Quản lý khách mời
@endsection


@section('content')
    <div class="clear"></div>

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Sự kiện: <a href="{{ route('get.home.edit.event',[$event->id,$event->slug]) }}">{{ $event->title }}</a></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('get.list.event_profile',Auth::guard('collaborator')->user()->id) }}">Sự kiện</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa khách mời</li>
            </ol>
        </div>

    </section><!-- #page-title end -->
    <div class="container m-t-30">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Thêm khách mời</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="">
                                 {{ csrf_field() }}
                                    <div class="form-body">
                                        <div class="p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Tên người đại diện</label>
                                                    <select name="represent_id" class="form-control select2">
                                                        <option value="">-- Chọn người đại diện--</option>
                                                        @foreach($representers as $key => $val)
                                                            <option @if($guest->represent_id == $val->id) selected @endif value="{{ $val->id }}">{{ $val->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tên khách mời</label>
                                                    <input type="text" name="name" required class="form-control" placeholder="Nhập tên vai trò" value="{{ $guest->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số điện thoại khách mời</label>
                                                    <input type="text" name="phone" required class="form-control" placeholder="Nhập tên vai trò" value="{{ $guest->phone }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Email khách mời</label>
                                                    <input type="email" name="email" required class="form-control" placeholder="Nhập tên vai trò" value="{{ $guest->email }}">
                                                </div>
                                            </div>
                                            <input type="hidden" name="event_id" class="form-control" value="{{ $event->id }}">

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
                
                    @include('Guest::frontend.list2')
                </div>
    </div>
@endsection