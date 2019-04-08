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

    a {
        color: #b78f07;
    }
    
    .status-event-active{
        color: #0000cf;
        font-size: 15px;
    }

    .status-event-non-active{
        color: #f00;
        font-size: 15px;
    }

    .status-event-wait-active{
        color: #f90;
        font-size: 15px;
    }

    .full-width{ width: 100%; }

    .del-icon{
        font-size: 15px;
        border-radius: 50%;
    }

    .box-title, .bold{
        font-weight: bold;
    }

    .card-non-active{
        background: #f5c2c280;
    }

    .card-active{
        background: #c2f5f066;
    }

    .card-wait-active{
        background: #e9ec7166;;
    }
</style>

@endpush

@section('content')
    <div class="card">
        <div class="col-md-12">
            <div class="card-header bg-info row">
                <div class="col-md-6">
                    <h3 class="text-white bold">Danh sách sự kiện</h3>
                </div>
                <div class="col-md-6">
                    <form class="app-search d-none d-md-block d-lg-block float-right" method="get" action="{{ route('get.search.event') }}">
                        <input type="text" name="key" class="form-control" placeholder="Search & enter">
                    </form>
                </div>
            </div>
        </div>
        <div class="row m-t-30 card-body">
        <!-- .col -->
           @foreach($data as $key => $val)
            <div class="col-md-6 col-lg-6 col-xlg-4">
                <div @if($val->status==1) class="card card-body list-event card-active" @elseif($val->status==0) class="card card-body list-event card-non-active" @else class = "card card-body list-event card-wait-active"  @endif >
                    <div class="row align-items-center">
                        <div class="col-md-4 col-lg-3 text-center">
                            <a href="{{ route('get.edit.event',$val->id) }}"><img src="{{ asset('upload/image/event/'.$val->current_image) }}" alt="Đây là cái hình" class="img-fluid"></a>
                        </div>
                        <div class="col-md-8">
                            <a href="{{ route('get.edit.event',$val->id) }}">
                                <h4 class="box-title m-b-0">{{ $val->title }} <span @if($val->status==1) class="status-event-active" @elseif($val->status==0) class="status-event-non-active" @else class="status-event-wait-active" @endif>({{eventStatusTitle($val->status)}})</span></h4>
                            </a>
                            <address>
                                <p><span>Người đăng:</span>@if($val->user_id) <a href="{{ route('get.edit.user',$val->user_id) }}">{{ $val->user->name }}</a> @endif</p>
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
                            <a class="btn btn-danger btn-xs full-width "alt="{{ route('get.delete.event',$val->id) }}" style="color: white" id="del-warning">Xóa sự kiện</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.col -->
            @endforeach
        </div>
        <div class="card-body">
            <div class="paginate float-right">
                {!! $data->render() !!}
            </div>
        </div>

    </div>


@endsection





