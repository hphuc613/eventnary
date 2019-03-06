<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Danh sách các loại</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số vé còn lại</th>
                                <th>Ngày kết thúc bán vé</th>
                                <th>Loại vé</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số vé còn lại</th>
                                <th>Ngày kết thúc bán vé</th>
                                <th>Loại vé</th>
                                <th>Trạng thái</th>
                                <th width="110px">Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($data as $key => $val)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $val->title }}</td>
                                <td>{{ number_format($val->price) }} VNĐ</td>
                                <td>{{ $val->quality }}</td>
                                <td>{{ date_format(new DateTime($val->end_selling),'d-m-Y H:i:s') }}</td>
                                <td>{{ ticketStatusTitle($val->status) }}</td>
                                <td>{{ $val->type->title }}</td>
                                <td>
                                    <center>
                                        <a href="{{ route('get.edit.ticket',$val->id) }}" data-toggle="tooltip" data-original-title="Sửa"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                        <a href="javascript:void(0)" alt="{{ route('get.delete.ticket',$val->id) }}" id="del-warning" href="#" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-close text-danger"></i> </a>
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


