<!doctype html>
<html lang="en">
<head>
	<title>Vé hòa nhạc, vé hội thảo, vé sự kiện, vé thể thao ở Việt Nam | TicketBox</title>
	<meta name="description" content="TicketBox là hệ thống phân phối vé và quản lý sự kiện trực tuyến, giúp bạn bán và mua vé các sự kiện thật dễ dàng.">
	<meta name="keywords" content="Vé hòa nhạc, vé hội thảo, vé sự kiện, vé thể thao ở Việt Nam">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, user-scalable=0, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
</head>
<body id="page-top" data-spy="scroll">
@include('components.nav_mobile')
<div id="content" class="snap-content box-shadow">
	<div class="relative">
		@include('components.nav')
		<div class="render-body w-100 overflow-hidden">
			<section class="clearfix">
				<section class="recommended-events clearfix">
					<div class="section-header text-center bg-white font-bold">
						<span>Sự kiện nổi bật</span>
					</div>
					<div class="container section-container">

						<div id="home-event-container" data-opm="hot">
							@foreach($tourHot as $tour)
								<div class="col-sm-6 left padding-left-right-0-m">
								<div class="card">
									<div class="card-cover relcomative lazyload-hot-event" data-src="{{ pare_url_file($tour->t_avatar) }}" style="background-image: url({{ pare_url_file($tour->t_avatar) }});">
										<a data-opm="0" href="{{ route('get.detail.tour',['url'=>$tour->t_slug]) }}" class="cover-img w-100 event-item-link" data-event-id="77908"></a>
									</div>
									<div class="card-body relative">
										<div class="padding-10">
											<div class="table w-100 margin-bottom-0">
												<div class="table-cell event-title">
													<a data-opm="0" href="" title="SGO48 Koisuru Xmas Party" class="event-item-link" data-event-id="77908">
														{{ $tour->t_title }}
													</a>
												</div>
												<div class="table-cell card-right-block">
												</div>
											</div>
											<div class="table w-100 margin-bottom-0">
												<div class="table-cell">
													<div class="event-price w-100">
														<span class="color-6">Từ</span> <strong>{{ $tour->t_price }} VNĐ</strong>
													</div>
													<div class="event-tags w-100">
                                                            <span class="tag-venues">
                                                            <span class="tag-venue smooth-trans label-default uppercase">{{ $tour->category->c_name }}</span>
                                                            </span>
{{--														<div class="tag-kinds inline-block">--}}
{{--															<span class="ello-th color-c"></span>--}}
{{--															<a data-opm="0" href="" class="tag-kind">Tour diễn</a>--}}
{{--														</div>--}}
													</div>
												</div>
											</div>
										</div>
										<div class="event-date">
											<div class="relative">
												<div class="date-month">
													{{ $tour->t_time_start[0] }}

												</div>
												<div class="date-detail">
													<div class="date-num color-6">
														{{ (explode(' ', $tour->t_time_start))[1] }}
													</div>
													<div class="date-day">
														{{ (explode(' ', $tour->t_time_start))[2] }}
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</section>
			</section>
			<section class="clearfix" data-opm="reco">
				<section class="hot-events bg-white clearfix">
					<div class="section-header text-center font-bold">
						<span>Các sự kiện đề xuất cho bạn</span>
					</div>
					<div class="section-container hot-events-container container">
						<div class="row overflow-hidden">
							<div data-slider="hotevents" id="owl-hot-events" class="owl-hot-events owl-carousel owl-theme" style="opacity: 1; display: block;">
								<div class="owl-wrapper-outer">
									<div class="owl-wrapper" style="width: 5446px; left: 0px; display: block; transition: all 400ms ease 0s; transform: translate3d(-1167px, 0px, 0px);">
										@foreach($tourNews as $tour)
										<div class="owl-item" style="width: 389px;">
											<div class="item">
												<div class="card">
													<div class="card-cover relative" style="background-image: url({{ asset('images/demo/2.jpg') }});background-size: cover;">
														<a data-opm="0" href="/" class="cover-img w-100">
														</a>
													</div>
													<div class="card-body relative">
														<div class="padding-10">
															<div class="table w-100 margin-bottom-0">
																<div class="table-cell event-title">
																	<a data-opm="0" href="/" title="{{ $tour }}">
																		Lưu diễn Thành Phố Hồ Chí Minh
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
								<div class="owl-controls clickable">
									<div class="owl-pagination">
										<div class="owl-page"><span class=""></span></div>
										<div class="owl-page active"><span class=""></span></div>
										<div class="owl-page"><span class=""></span></div>
									</div>
									<div class="owl-buttons">
										<div class="owl-prev"><i class="e-icon ello-left-open-big"></i></div>
										<div class="owl-next"><i class="e-icon ello-right-open-big"></i></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
			@include('components.list_form')
			<section class="clearfix">
				<section class="create-e clearfix hidden-xs hidden-sm color-6">
					<div class="container text-center">
						<div class="w-100 create-e-intro">
							Hãy bắt đầu bán vé sự kiện của bạn với TicketBox!
						</div>
						<div class="w-100">
							<div data-action="create-e" data-toggle="modal" data-target="[modal='create-e-modal']" class="tkb-btn btn-discover input-group rounded tkb-bg-color center">
								<span class="input-group-addon tkb-bg-color"><span class=" ello-plus tkb-dark-color"></span></span>
								<input type="button" class="form-control tkb-bg-color font-bold" value="Tạo sự kiện">
							</div>
						</div>
						<p class="margin-bottom-0">Liên hệ bộ phận phát triển kinh doanh, vui lòng gọi:&nbsp;<a class="color-6 font-bold" href="tel:+84913332100">0913.886.211 - 0915.999.171</a></p>
					</div>
				</section>
			</section>
			<div data-action="gotop" class="btn-go-top circle" style="display: none;">
				<span class="ello-up-open-big"></span>
			</div>
		</div>
		@include('components.footer')
	</div>
</div>
@include('components.list_form')
{{--<script src="https://static.ticketbox.vn/dist/tkbvn/js/shared/layoutv2-libs.js?v2"></script>--}}
<script src="{{ asset('js/home.js') }}"></script>
<style>
	.sp-content {
		display: flex;
		flex-flow: column;
		justify-content: center;
		width: auto;
	}
	.sp-dialog img {
		width: 100%;
		max-width: 600px;
	}
	@media  (min-width: 992px) {
		.sp-content {
			flex-flow: row;
		}
	}
</style>

<script>
	// $(document).ready(function () {
	//
	// 	$(".close-btn").click(function () {
	// 		$(".zalora-link").css("display", "none");
	// 		$(".zalora-link-lg").attr("href", "javascript:void(0)");
	// 	});
	// });
</script>

</body>
</body>
</html>