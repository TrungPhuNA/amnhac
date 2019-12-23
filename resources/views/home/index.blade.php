@extends('layouts.master')
@section('content')
	<!-- end header -->
	<section class="banner_section">
		<div class="banner-main">
			<img src="{{ asset('images/banner2.jpg') }}" />
			<div class="container">

				<div class="text-bg relative">
					<h1>Âm nhạc<br><span class="Perfect">Âm nhạc hoàn hảo</span><br>Chào mừng đến với âm nhạc</h1>
{{--					<p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis lacinia nec et est--}}
{{--						<br> aptent taciti sociosqu ad litora torquent per conubia nostra</p>--}}
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
						<h3>Sự kiện hấp dẫn</h3>
						<p>Các sự kiện được diễn ra hấp dẫn, sôi nổi</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
					<div class="for-box">
						<i><img src="{{ asset('icon/icon2.png') }}" alt="icon"/></i>
						<h3>Hội tụ anh hào</h3>
						<p>Quy tụ nhiều anh hào khắp cả nước</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
					<div class="for-box">
						<i><img src="{{ asset('icon/icon3.png') }}" alt="icon"/></i>
						<h3>Đa dạng về thể loại ca nhạc</h3>
						<p>Rất nhiều dòng nhạc được phát sóng</p>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
					<div class="for-box">
						<i><img src="{{ asset('icon/icon4.png') }}" alt="icon"/></i>
						<h3>Giá rẻ</h3>
						<p>Chi phí vé rẻ, phù hợp mọi lứa tuổi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end music-box  -->

{{--	<div class="container-fluid">--}}
{{--		<div class="row">--}}
{{--			<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">--}}
{{--				<div class="img-box">--}}
{{--					<figure><img src="{{ asset('images/musicbg.jpg') }}" alt="img" /></figure>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--			<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">--}}
{{--				<div class="text-box">--}}
{{--					<div class="box">--}}
{{--						<i><img src="{{ asset('images/5.png') }}"/></i>--}}
{{--						<h3>1 1 1 1</h3>--}}
{{--						<p>It is a long established fact that a reader will be distracted by the readable--}}
{{--							<br> content of a page when looking at its layout. The point of using Lorem </p>--}}
{{--						<a href="index.html#">Read More</a>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}

	<!-- Download -->
	<div id="screenshot" class="Lastestnews">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="titlepage">
						<h2>Sự kiện mới nhất</h2>
						<span>Các sự kiện sắp tới sẽ thu hút và mang đến cho các bạn trải nghiệm thú vị nhất</span>
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
						<h2>Tin tức / Sự kiện</h2>
						<span>Tổng hợp các tour / sự kiện mới nhất hiện nay<br></span>
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