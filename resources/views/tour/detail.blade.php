@extends('layouts.master')
@section('content')
	<div class="blogbg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="blogtitlepage">
						<h2>{{ $tourDetail->t_title }}</h2>
						<p class="desc">{{ $tourDetail->t_description }}</p>
						<ul>
							<li><i class="fa fa-map-o"></i> <span>{{ $tourDetail->t_address }}</span></li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ $tourDetail->t_time_start }}</span></li>
							<li><i class="fa fa-check" aria-hidden="true"></i> <span class="label-success label">Còn vé</span></li>
							<li>
								<form action="" style="display: flex">
									<input type="number" style="width: 200px;margin: 0;margin-right: 10px" class="form-control" name="qty" value="1">
									<button type="submit" class="btn btn-success">Đặt vé</button>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="" style="display: block">
					<img src="{{ pare_url_file($tourDetail->t_banner) }}"
						 style="width: 100%;height: 400px"
						 alt="">
				</a>
				{!! $tourDetail->t_content !!}
			</div>
		</div>
	</div>
@stop