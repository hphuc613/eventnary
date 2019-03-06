@extends('Dashboard::layouts.master')

@include('Event::event.breadcrumb')

@push('css')

<style>
    .list-event address p span{
        font-weight: 600;
    }
    .list-event address p{
        margin: 5px 0px;
    }
    
    .status-event{
        color: #0000cf;
        font-size: 15px;
    }

    .full-width{ width: 100%; }

    .del-icon{
        position: relative;
        bottom: 213px;
        left: 453px;
        font-size: 15px;
        border-radius: 50%;
    }

    .box-title {
        font-weight: bold;
    }
</style>

@endpush

@section('content')

    <div class="row m-t-30">
        <!-- .col -->
       @foreach($data as $key => $val)
        <div class="col-md-6 col-lg-6 col-xlg-4">
            <div class="card card-body list-event">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-3 text-center">
                        <a href="{{ route('get.edit.event',$val->id) }}"><img src="{{ asset('upload/image/event/'.$val->current_image) }}" alt="Đây là cái hình" class="img-fluid"></a>
                    </div>
                    <div class="col-md-8">
                        <a href="{{ route('get.edit.event',$val->id) }}">
                            <h4 class="box-title m-b-0">{{ $val->title }} <span class="status-event">({{eventStatusTitle($val->status)}})</span></h4>
                        </a>
                        <address>
                            <p><span>Địa chỉ:</span> {{ $val->address }}, {{ $val->ward->title }}, {{ $val->ward->district->title }}, {{ $val->ward->district->city->title }}</p>
                            @php
                                $start_date=$val->start_date;
                                $end_date=$val->end_date;
                            @endphp
                            <p><span>Ngày bắt đầu: </span> {{ date_format(new DateTime($start_date),'d-m-Y H:i:s') }}</p>
                            <p><span>Ngày kết thúc:</span> {{ date_format(new DateTime($end_date),'d-m-Y H:i:s') }}</p>
                        </address>

                    </div>
                </div>
                <div class="row" style="margin: 0px 30px">
                    <div class="col-md-4">
                        <a class="btn btn-info btn-xs full-width" href="#">Thêm Khách Mời</a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary btn-xs full-width" href="{{ route('get.create.ticket',$val->id) }}">Quản lý vé</a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-danger btn-xs full-width" href="#">Xóa sự kiện</a>
                    </div>
                    <a href="javascript:void(0)" alt="{{ route('get.delete.event',$val->id) }}" id="del-warning" href="#" data-toggle="tooltip" data-original-title="Xóa" class="btn btn-danger del-icon"> <i class="fa fa-close"></i></a>
                </div>
            </div>
        </div>

        <!-- /.col -->
        @endforeach
    </div>
</div>

@endsection





