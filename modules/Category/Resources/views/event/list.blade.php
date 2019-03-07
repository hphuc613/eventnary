@extends('Dashboard::layouts.master')

@include('Category::event.breadcrumb')

@section('content')                
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="m-b-0 text-white">Danh sách loại sự kiện</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Loại sự kiện</th>
                                                <th>Mô tả</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>STT</th>
                                                <th>Loại sự kiện</th>
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
                                                        <a href="{{ route('get.edit.eventtype',$val->id) }}" data-toggle="tooltip" data-original-title="Sửa"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                        <a href="javascript:void(0)" alt="{{ route('get.delete.eventtype',$val->id) }}" id="del-warning" href="#" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-close text-danger"></i> </a>
                                                        <!-- <button class="btn btn-danger" action="{{ route('get.delete.eventtype',$val->id) }}" >Xóa</button> -->
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

