@extends('Dashboard::layouts.master')

@section('breadcrumb')
               Vai trò 
@endsection

@section('link')
        <a href="{{ route('get.create.role') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tạo mới</a>
@endsection

@section('content')                
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Danh sách vai trò</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Vai trò</th>
                                                <th>Mô tả</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>Vai trò</th>
                                                <th>Mô tả</th>
                                                <th width="110px">Thao tác</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($data as $key => $val)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $val->title }}</td>
                                                <td>{{ $val->description }}</td>
                                                <td>
                                                    <center>
                                                        <a href="{{ route('get.edit.role',$val->id) }}" data-toggle="tooltip" data-original-title="Sửa"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                        <a href="#" alt="alert" id="del-warning" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-close text-danger"></i> </a>
                                                    </center>
                                                </td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection