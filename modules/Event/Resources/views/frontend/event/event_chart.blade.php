@extends('Event::frontend.layout.master')
@section('title')
	Thống kê sự kiện
@endsection

@push('css')
	
	<style>
		label {
			font-weight: 600
		}
	</style>

@endpush

@section('content')

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Sự kiện: <a href="{{ route('get.home.edit.event',[$data->id,$data->slug]) }}">{{ $data->title }}</a></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('get.list.event_profile',Auth::guard('collaborator')->user()->id) }}">Sự kiện</a></li>
			<li class="breadcrumb-item active" aria-current="page">Biểu đồ</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap" style="padding-bottom: 30px;">

		<div class="container clearfix">

			<!-- Charts Area
			============================================= -->
			<div class="row">
				<div class="col-md-6">
					<div class="bottommargin divcenter" style="max-width: 100%; min-height: 350px;">
						<canvas id="chart-0"></canvas>
						<center class="m-t-30">
							<label>Biểu Đồ Vé Miễn Phí</label>
						</center>
						<center class="m-t-40"><h2>Thống kê Vé Miễn Phí</h2></center>
						
						<table class="table">
							<tr>
								<td><label>Tổng số vé:</label></td>
								<td>@if($ticket_free_sell == 50 )
										0 Vé
									@else
										{{ $ticket_free->quality + $ticket_free_sell }} Vé
									@endif</td>
							</tr>
							<tr>
								<td><label>Số vé bán ra:</label></td>
								<td>@if($ticket_free_sell == 50 )
										0 Vé
									@else
										{{$ticket_free_sell }} Vé
									@endif</td>
							</tr>
							<tr>
								<td><label>Số vé còn lại:</label></td>
								<td>@if($ticket_free_sell == 50 )
										0 Vé
									@else
										{{ $ticket_free->quality}} Vé
									@endif</td>
							</tr>
							<tr>
								<td><label>Tổng doanh thu:</label></td>
								<td>@if($ticket_free_sell == 50 )
										0 VNĐ
									@else
										{{ $ticket_free_sell*$ticket_free->price }} VNĐ
									@endif</td>
							</tr>
						</table>

					</div>
				</div>
				<div class="col-md-6">
					<div class="bottommargin divcenter" style="max-width: 100%; min-height: 350px;">
						<canvas id="chart-2"></canvas>
						<center class="m-t-30"><label>Biểu Đồ Vé Thu Phí</label></center>
						<center class="m-t-40"><h2>Thống kê Vé Thu Phí</h2></center>
						<table class="table">
							<tr>
								<td><label>Tổng số vé:</label></td>
								<td>@if($ticket_fee_sell == 50 )
										0 Vé
									@else
										{{ $ticket_fee->quality + $ticket_fee_sell }} Vé
									@endif</td>
							</tr>
							<tr>
								<td><label>Số vé bán ra:</label></td>
								<td>@if($ticket_fee_sell == 50 )
										0 Vé
									@else
										{{ $ticket_fee_sell }} Vé
									@endif</td>
							</tr>
							<tr>
								<td><label>Số vé còn lại:</label></td>
								<td>@if($ticket_fee_sell == 50 )
										0 Vé
									@else
										{{ $ticket_fee->quality }} Vé
									@endif</td>
							</tr>
							<tr>
								<td><label>Tổng doanh thu:</label></td>
								<td>@if($ticket_fee_sell == 50 )
										0 VNĐ
									@else
										{{ number_format($ticket_fee_sell*$ticket_fee->price) }} VNĐ
									@endif</td>
							</tr>
						</table>
					</div>
				</div>
			</div>




			<!-- Charts Area End -->

			<div class="line"></div>


		</div>

	</div>

</section><!-- #content end -->



@endsection

@push('js')

	<script>

		var ticket_free_sell = function() {
			return {{ $ticket_free_sell }};
		};

		var ticket_free = function() {
			return {{ $total_ticket_free }};
		};

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						ticket_free_sell(),
						ticket_free(),
					],
					backgroundColor: [
						window.chartColors.blue,
						window.chartColors.red,
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Số vé đã bán",
					"Số vé còn lại",
				]
			},
			options: {
				responsive: true
			}
		};

		





		var ticket_fee_sell = function() {
			return {{ $ticket_fee_sell }};
		};

		var ticket_fee = function() {
			return {{ $total_ticket_fee }};
		};

		var config2 = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						ticket_fee_sell(),
						ticket_fee(),
					],
					backgroundColor: [
						window.chartColors.green,
						window.chartColors.orange,
					],
					label: 'Dataset 2'
				}],
				labels: [
					"Số vé đã bán",
					"Số vé còn lại",
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById("chart-0").getContext("2d");
			window.myPie = new Chart(ctx, config);
			var ctx2 = document.getElementById("chart-2").getContext("2d");
			window.myPie2 = new Chart(ctx2, config2);
		};

	</script>

@endpush