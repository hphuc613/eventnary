@extends('Event::frontend.layout.master')
@section('title')
    Bán vé
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
                <li class="breadcrumb-item active" aria-current="page">Thêm mới khách mời</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <div class="container m-t-30">
                <div class="row">
                    <div class="col-md-12">
                            @include('Dashboard::layouts.notification')
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Bán vé</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-material" method="post" action="">
                                 {{ csrf_field() }}
                                    <div class="form-body">
                                        <div class="p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Chọn loại vé</label>
                                                    <select name="ticket_id" class="form-control select2">
                                                        @foreach($tickets as $key => $val)
                                                            <option value="{{ $val->id }}">{{ $val->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Tên người đại diện</label>
                                                    <input type="text" name="name" required class="form-control" placeholder="Nhập tên người mua" value="{{ old('name') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số điện thoại</label>
                                                    <input type="text" name="phone" required class="form-control" placeholder="Nhập số điện thoại" value="{{ old('phone') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" name="email" required class="form-control" placeholder="Nhập email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Số vé</label>
                                                    <input type="number" name="quality" required class="form-control"  value="{{ old('quality') }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Phương thức thanh toán</label>
                                                    <input type="text" required class="form-control" readonly="" placeholder="Thanh toán tại quầy bán vé">
                                                    <input type="hidden" name="payment" value="2">
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
                    <!-- Start Page Content -->
                
                    @include('Ticket::frontend.sell_ticket.list2')
                </div>
    </div>
@endsection

@push('js')

    <script>
        $(".select2").select2();
    </script>

@endpush