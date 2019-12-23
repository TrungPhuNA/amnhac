@extends('layouts.master')
@section('content')
	<div class="blogbg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="blogtitlepage" style="border-bottom: 1px solid #f2f2f2;padding-bottom: 10px;">
						<h2>{{ $tourDetail->t_title }}</h2>
						<p class="desc" >{{ $tourDetail->t_description }}</p>
						<div style="display: flex">
							<div style="flex: 0 0 40%">
								<ul>
									<li><i style="width: 30px" class="fa fa-map-o"></i> <span>{{ $tourDetail->t_address }}</span></li>
									<li><i style="width: 30px" class="fa fa-clock-o" aria-hidden="true"></i> <span>{{ $tourDetail->t_time_start }}</span></li>
									<li><i style="width: 30px" class="fa fa-check" aria-hidden="true"></i> <span class="label-success label">Còn vé</span></li>
								</ul>
							</div>
							<div>
								<form action="" style="display: flex">
									<input type="number" style="width: 200px;margin: 0;margin-right: 10px" class="form-control" name="qty" value="1">
									<button type="submit" class="btn btn-success">Đặt vé</button>
								</form>
							</div>
						</div>
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