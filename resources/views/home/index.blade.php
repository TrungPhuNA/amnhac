@extends('layouts.master')
@section('content')
	<!-- end header -->
	<section class="banner_section">
		<div class="banner-main">
			<img src="{{ asset('images/banner2.jpg') }}" />
			<div class="container">

				<div class="text-bg relative">
					<h1>Music<br><span class="Perfect">Perfect music</span><br>Welcome to the music</h1>
				</div>

			</div>
		</div>

	</section>

	<!-- music-box  -->
	<div class="music-box">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
					<div class="for-box">
						<i><img src="{{ asset('icon/icon1.png') }}" alt="icon"/></i>
						<h3>Attractive event</h3>
						<p>The events are exciting and exciting</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
					<div class="for-box">
						<i><img src="{{ asset('icon/icon2.png') }}" alt="icon"/></i>
						<h3>Convergence brother</h3>
						<p>Gathering many heroes all over the country</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
					<div class="for-box">
						<i><img src="{{ asset('icon/icon3.png') }}" alt="icon"/></i>
						<h3>Diverse music genres</h3>
						<p>A lot of music is broadcast</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
					<div class="for-box">
						<i><img src="{{ asset('icon/icon4.png') }}" alt="icon"/></i>
						<h3>Cheap</h3>
						<p>Cheap ticket costs, suitable for all ages</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end music-box  -->

	<!-- Download -->
	<div id="screenshot" class="Lastestnews" style="margin-bottom: 20px">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Big event</h2>
						<span>Upcoming events will attract and bring you the most interesting experience</span>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($tourHot as $hot)
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="news-box">
							<figure>
								<a href="{{ route('get.detail.tour', str_slug($hot->t_title)) }}"
								   title="{{ $hot->t_title }}">
									<img src="{{ asset(pare_url_file($hot->t_avatar)) }}" alt="img" />
								</a>
							</figure>
							<h3>
								<a href="{{ route('get.detail.tour', str_slug($hot->t_title)) }}" title="{{ $hot->t_title }}">
									{{ $hot->t_title }}
								</a>
							</h3>
							@php
								$time = explode(' ',$hot->t_time_start);
							@endphp
							<span> {{ $time[0] ?? "[N\A]" }}</span><span>{{ $time[1] ?? '' }} - {{ $time[2] ?? "[N\A]" }}</span>
							<p>{{ $hot->t_description }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end Download -->
	<!-- Download -->
	<div id="screenshot" class="Lastestnews" style="margin-bottom: 20px">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Latest Event</h2>
						<span>Upcoming events will attract and bring you the most interesting experience</span>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($tourNews as $tour)
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
						<div class="news-box">
							<figure>
								<a href="{{ route('get.detail.tour', str_slug($tour->t_title)) }}"
								   title="{{ $tour->t_title }}">
									<img src="{{ asset(pare_url_file($tour->t_avatar)) }}" alt="img" />
								</a>
							</figure>
							<h3>
								<a href="{{ route('get.detail.tour', str_slug($tour->t_title)) }}" title="{{ $tour->t_title }}">
									{{ $tour->t_title }}
								</a>
							</h3>
							@php
								$time = explode(' ',$tour->t_time_start);
							@endphp
							<span> {{ $time[0] ?? "[N\A]" }}</span><span>{{ $time[1] ?? '' }} - {{ $time[2] ?? "[N\A]" }}</span>
							<p>{{ $tour->t_description }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end Download -->

	<!-- Albums -->
	<div id="screenshot" class="Albums">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>News / Events</h2>
						<span>Summary of the latest tours / events today<br></span>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($articles as $article)
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
						<div class="Albums-box">
							<figure>
								<a href="{{ route('get.detail.article',[str_slug($article->a_name), $article->id]) }}" class="fancybox" rel="ligthbox">
									<img src="{{ asset(pare_url_file($article->a_avatar)) }}" class="zoom img-fluid " alt="">
								</a>
								<h3>
									<a href="">{{ $article->a_name }}</a>
								</h3>
							</figure>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end Albums -->

	<!-- Newsletter -->
	<div class="Newsletter">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>Newsletter</h2>
					<div class="row">
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
							<input class="email" placeholder="Enter Your Email" type="text" name="Enter Your Email">
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
							<button class="submit-btn">Subscribe</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end Newsletter -->
@stop