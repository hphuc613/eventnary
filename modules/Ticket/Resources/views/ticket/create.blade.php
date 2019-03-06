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
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-8">
                            <h3>Sự kiện: <span class="event-name">{{ $event->getTitle() }}</span></h3>
                        </div>
                        <div class="col-md-4 has-danger">
                                <a href="{{ route('get.list.event') }}" class="btn btn-info float-right"> <i class="fa fa-check"></i> Hoàn thành</a>
                                <div class="form-control-feedback m-t-10 float-right">Lưu thông tin vé trước khi hoàn thành</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Thêm vé miễn phí</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="{{ route('post.create.ticket') }}">
                                 {{ csrf_field() }}
                                    <input type="hidden" name="event_id" readonly="" class="form-control" placeholder="Nhập giá vé" value="{{ $event->id }}">
                                    <input type="hidden" name="ticket_type_id" readonly="" class="form-control" placeholder="Nhập giá vé" value="{{ 1 }}">
                                    <div class="form-body">
                                        <div class="p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Tên vé</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên vé" value="{{ old('title') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Giá vé</label>
                                                    <input type="text" name="price" readonly="" class="form-control" placeholder="Nhập giá vé" value="{{ 0 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số vé còn lại</label>
                                                    <input type="text" name="quality" class="form-control" placeholder="Nhập số vé còn lại" value="{{ old('quality') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Ngày bắt đầu bán vé</label>
                                                    <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date" name="start_selling" value="{{ old('start_selling') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Ngày kết thúc bán vé</label>
                                                    <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date2" name="end_selling" value="{{ old('end_selling') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số vé tối đa</label>
                                                    <select name="max_selling" class="form-control" id="">
                                                        @for($i=1;$i<=10;$i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                        <option value="Không giới hạn">Không giới hạn</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số vé tối thiếu</label>
                                                    <select name="min_selling" class="form-control" id="">
                                                        @for($i=1;$i<=10;$i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                        <option value="Không giới hạn">Không giới hạn</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Trạng thái</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="status" class="custom-control-input" checked value="1">
                                                        <label class="custom-control-label" for="customRadio1">Hoạt động</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="0">
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
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Thêm vé thu phí</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="{{ route('post.create.ticket') }}">
                                 {{ csrf_field() }}
                                    <input type="hidden" name="event_id" readonly="" class="form-control" value="{{ $event->id }}">
                                    <input type="hidden" name="ticket_type_id" readonly="" class="form-control" value="{{ 2 }}">
                                    <div class="form-body">
                                        <div class="p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Tên vé</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Nhập tên vé" value="{{ old('title') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Giá vé</label>
                                                    <input type="text" name="price" class="form-control" placeholder="Nhập giá vé" value="{{ old('price') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số vé còn lại</label>
                                                    <input type="text" name="quality" class="form-control" placeholder="Nhập số vé còn lại" value="{{ old('quality') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Ngày bắt đầu bán vé</label>
                                                    <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date3" name="start_selling" value="{{ old('start_selling') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Ngày kết thúc bán vé</label>
                                                    <input type="text" class="form-control" placeholder="{{ date('Y-m-d h:m:s') }}" id="min-date4" name="end_selling" value="{{ old('end_selling') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số vé tối đa</label>
                                                    <select name="max_selling" class="form-control" id="">
                                                        @for($i=1;$i<=10;$i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                        <option value="Không giới hạn">Không giới hạn</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số vé tối thiếu</label>
                                                    <select name="min_selling" class="form-control" id="">
                                                        @for($i=1;$i<=10;$i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                        <option value="Không giới hạn">Không giới hạn</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Trạng thái</label>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="status" class="custom-control-input" checked value="1">
                                                        <label class="custom-control-label" for="customRadio1">Hoạt động</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="status" class="custom-control-input" value="0">
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
                    </div>
                </div>

                @include('Ticket::ticket.list')

@endsection

