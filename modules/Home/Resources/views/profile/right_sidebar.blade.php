<div class="list-group">
	<a href="{{ route('get.edit.account',$data->id) }}" class="list-group-item list-group-item-action clearfix">Profile <i class="icon-user float-right"></i></a>
	<a href="{{ route('home.create.event') }}" class="list-group-item list-group-item-action clearfix">Tạo sự kiện mới<i class="icon-plus float-right"></i></a>
	<a href="{{ route('get.list.event_profile',$data->id) }}" class="list-group-item list-group-item-action clearfix">Sự kiện của bạn <i class="icon-tasks float-right"></i></a>
	<!-- <a href="#" class="list-group-item list-group-item-action clearfix">Settings <i class="icon-cog float-right"></i></a> -->
	<a href="{{ route('get.home.logout') }}" class="list-group-item list-group-item-action clearfix">Logout <i class="icon-line2-logout float-right"></i></a>
</div>