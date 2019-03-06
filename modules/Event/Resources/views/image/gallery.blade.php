@extends('Dashboard::layouts.master')

@include('Event::event.breadcrumb')

@push('css')
    <style>
        .event-title{
            color: red;
        }

        .dropify-wrapper{
            height: 145px;
        }

        .card2 {
            background-color: #1212121a;
        } 
    </style>
@endpush
@section('content')
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="el-element-overlay">
    <div class="card">
        <div class="card-body row">
            <div class="col-md-4">
                <h3 class="card-title">Thư viện hình ảnh</h3>
                <h5 class="card-subtitle m-b-20 text-muted">Sự kiện: <span class="event-title">{{ $event->title }}</span></h5>
            </div>
            <div class="col-md-4">
                <form action="{{ route('post.list_gallery.event') }}" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}
                    <div class="form-group" style="margin-bottom: 10px">
                        <input type="file" name="title" id="input-file-now-custom-1" class="dropify"/>
                        <input type="hidden" name="event_id" value="{{ $event->id }}" />
                        <center><button class="btn btn-success m-t-10">Tải lên</button></center>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <a href="{{ route('get.edit.event',$event->id) }}" class="btn btn-info float-right"> <i class="fa fa-check"></i> Hoàn thành</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="card card2">
        <div class="card-body row">
            <div class="row col-md-12">
                @foreach($data as $key => $val)
                <div class="col-lg-3 col-md-6">
                    <div class="el-card-item" style="padding-bottom: 0px;">
                        <div class="el-card-avatar el-overlay-1"> <img src="{{ asset('upload/image/event/multible/'.$val->title) }}" alt="imge" style="height: 200px" />
                            <div class="el-overlay">
                                <ul class="el-info">
                                    <li><a class="btn default btn-outline image-popup-vertical-fit" href="{{ asset('upload/image/event/multible/'.$val->title) }}"><i class="icon-magnifier"></i></a></li>
                                    <li><a href="javascript:void(0)" id="del-warning" alt="{{ route('get.delete_gallery.event',$val->id) }}" class="btn default btn-outline image-popup-vertical-fit" data-toggle="tooltip" data-original-title="Xóa"><i class="mdi mdi-window-close"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection