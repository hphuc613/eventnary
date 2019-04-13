@section('breadcrumb')
        Quản lý khách mời
@endsection

@section('link')
        <a href="{{ route('get.create.guest',$event->id) }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tạo mới</a>
@endsection

