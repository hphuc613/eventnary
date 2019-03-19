@extends('Dashboard::layouts.master')

@include('User::collaborator.breadcrumb')

@section('content')
<div class="card">
    <div class="col-md-12">
        <div class="card-header bg-info row">
            <div class="col-md-6">
                <h3 class="text-white bold">Danh sách người dùng</h3>
            </div>
            <div class="col-md-6">
                <form class="app-search d-none d-md-block d-lg-block float-right" method="get" action="{{ route('get.search.event') }}">
                    <input type="text" name="key" class="form-control" placeholder="Search & enter">
                </form>
            </div>
        </div>
    </div>
	<div class="row m-t-30">
        <!-- .col -->
       @foreach($data as $key => $val)
        <div class="col-md-6 col-lg-6 col-xlg-4">
            <div class="card card-body">
                <div class="row align-items-center">
                    <div class="col-md-4 col-lg-3 text-center">
                        <a href="{{ route('get.edit.user',$val->id) }}"><img src="{{ asset('upload/image/user/'.$val->image) }}" alt="user" class="img-circle img-fluid"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <a href="{{ route('get.edit.user',$val->id) }}">
                            <h3 class="box-title m-b-0">{{ $val->name }}</h3>
                        </a>
                        <address>

							<abbr title="Địa chỉ">Địa chỉ:</abbr> {{ $val->address }}
                            <br/>
                            <abbr title="Phone">SĐT:</abbr> {{ $val->phone }}<br>
                            <abbr title="Email">Email:</abbr> {{ $val->email }}
                        </address>
                        <div class="row">
                            <a class="btn btn-danger btn-xs full-width"alt="{{ route('get.delete.user',$val->id) }}" id="del-warning">Xóa người dùng này</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        @endforeach
        <div class="row" style="margin-top: 15px;">
            <div class="col-md-12 pull-right">
                {!! $data->render() !!}
            </div>
        </div>
    </div>
</div>

@endsection