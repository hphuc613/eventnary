@extends('Dashboard::layouts.master')

@include('Ticket::ticket.breadcrumb')


@push('css')
    
    <style>
        .event-name{
            color: red;
        }
    </style>

@endpush
@section('content')

<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="card">
    <div class="card-body row">
        <div class="col-md-8">
            <h3>Sự kiện: <span class="event-name">{{ $ticket->event->title }}</span></h3>
        </div>
        <div class="col-md-4 has-danger">
            <a href="{{ route('get.edit.event',$ticket->event_id) }}" class="btn btn-info float-right"> <i class="fa fa-check"></i> Hoàn thành</a>
            <div class="form-control-feedback m-t-10 float-right">Lưu thông tin vé trước khi hoàn thành</div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header bg-info">
        <h4 class="m-b-0 text-white">Chỉnh sửa thông tin vé</h4>
    </div>
    <div class="card-body">
        <form class="form-material" method="post" action="{{ route('post.edit.ticket',$ticket->id) }}">
         {{ csrf_field() }}
            <input type="hidden" name="event_id" readonly="" class="form-control" value="{{ $ticket->event_id }}">
            <input type="hidden" name="ticket_type_id" readonly="" class="form-control" value="{{ $ticket->ticket_type_id }}">
            <div class="form-body">
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Tên vé</label>
                            <input type="text" name="title" class="form-control" placeholder="Nhập tên vé" value="{{ $ticket->title }}">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Số vé còn lại</label>
                            <input type="text" name="quality" class="form-control" placeholder="Nhập số vé còn lại" value="{{ $ticket->quality }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ngày bắt đầu bán vé</label>
                            <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date3" name="start_selling" value="{{ $ticket->start_selling }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Ngày kết thúc bán vé</label>
                            <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date4" name="end_selling" value="{{ $ticket->end_selling }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Số vé tối đa</label>
                            <select name="max_selling" class="form-control" id="">
                                @for($i=1;$i<=10;$i++)
                                <option @if($ticket->max_selling == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                                @endfor
                                <option @if($ticket->max_selling == 11) selected @endif value="11">Không giới hạn</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Số vé tối thiếu</label>
                            <select name="min_selling" class="form-control" id="">
                                @for($i=1;$i<=10;$i++)
                                <option @if($ticket->min_selling == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Giá vé</label>
                            <input type="text" name="price" class="form-control" placeholder="Nhập giá vé" value="{{ $ticket->price }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Trạng thái</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="status" class="custom-control-input" @if($ticket->status==1) checked @endif  value="1">
                                <label class="custom-control-label" for="customRadio1">Hoạt động</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="status" class="custom-control-input" @if($ticket->status==0) checked @endif value="0">
                                <label class="custom-control-label" for="customRadio2">Ngừng hoạt động</label>
                            </div>
                        </div>
                    </div>
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

@include('Ticket::ticket.list')

@endsection

