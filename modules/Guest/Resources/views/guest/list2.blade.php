<div class="col-lg-8">
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
                            <th>Tên khách mời</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Người đại diện</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tên khách mời</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Người đại diện</th>
                            <th width="110px">Thao tác</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data as $key => $val)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $val->name }}</td>
                            <td>{{ $val->email }}</td>
                            <td>{{ $val->phone }}</td>
                            <td>{{ Representer($val->represent_id) }}</td>
                            <td>
                                <center>
                                    <a href="{{ route('get.edit.guest',[$val->id,$val->event_id]) }}" data-toggle="tooltip" data-original-title="Sửa"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                    <a href="javascript:void(0)" alt="{{ route('get.delete.guest',$val->id) }}" id="del-warning" href="#" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-close text-danger"></i> </a>
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