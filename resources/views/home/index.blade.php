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


<div id="snap-drawers" class="snap-drawers visible-xs">
	<div class="snap-drawer snap-drawer-right">
		<div class="menu-containter relative w-100 h-100 table margin-bottom-0">
			<div class="menu-header table-row">
				<!-- if not logedin -->
				<div class="sign-block padding-5 text-center">
					<div class="signin-fb">
						<a class="input-group fb-bg-color rounded" href="/user/login-facebook">
							<span class="input-group-addon"><span class="ello-facebook"></span></span>
							<span class="form-control">Đăng nhập bằng Facebook</span>
						</a>
					</div>
					<div class="sign-tkb">
						<div class="table valign-middle uppercase font-085">
							<div class="signin-tkb table-cell w-50">
								<a data-toggle="modal" data-target="[modal='signin-modal']">Đăng nhập</a>
							</div>
							<div class="signup-tkb table-cell">
								<a data-toggle="modal" data-target="[modal='signup-modal']" data-dismiss="modal">Đăng ký</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="table-row">
				<div class="menu-body h-100">
					<ul class="padding-left-0">
						<li>
							<a href="/events">
								<span class="ello-th menu-icon"></span> <span class="menu-name">Khám phá</span>
							</a>
						</li>
						<li>
							<a href="/help-center" title="">
								<span class="ello-help-1 menu-icon"></span> <span class="menu-name">Giải đáp thắc mắc</span>
							</a>
						</li>
						<li>
							<a href="/contact">
								<span class="ello-phone menu-icon"></span> <span class="menu-name">Liên hệ hợp tác</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="content" class="snap-content box-shadow">
	<div class="relative">
		@include('components.nav')
		<div class="render-body w-100 overflow-hidden">

{{--			<header class="text-center showsearch">--}}
{{--				<div class="container">--}}
{{--					<div class="header-container">--}}
{{--						<div class="header-slider slick-initialized slick-slider slick-dotted" data-opm="slider" role="toolbar">--}}
{{--							<a class="slick-control slick-prev slick-arrow" style="display: block;"><i class="ello-angle-left"></i></a>--}}
{{--							<div aria-live="polite" class="slick-list draggable" style="padding: 0px 20px;">--}}
{{--								<div class="slick-track" style="opacity: 1; width: 20000px; transform: translate3d(-1355px, 0px, 0px);" role="listbox">--}}
{{--									<div class="item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">--}}
{{--										<a data-opm="2" href="https://ticketbox.vn/event/running-man-keep-on-77691" tabindex="-1">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/06/74EF50.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--									<div class="item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">--}}
{{--										<a data-opm="3" href="https://ticketbox.vn/event/honda-youth-fest-dai-nhac-hoi-khinh-khi-cau-hcm-77937" tabindex="-1">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/22/421C3B.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--									<div class="item slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00">--}}
{{--										<a data-opm="0" href="https://ticketbox.vn/event/abl-2019-77580" tabindex="0">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/07/A47028.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--									<div class="item slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01">--}}
{{--										<a data-opm="1" href="https://ticketbox.vn/event/RAVOLUTION-77689" tabindex="-1">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/06/E6CC3B.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--									<div class="item slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02">--}}
{{--										<a data-opm="2" href="https://ticketbox.vn/event/running-man-keep-on-77691" tabindex="-1">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/06/74EF50.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--									<div class="item slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide03">--}}
{{--										<a data-opm="3" href="https://ticketbox.vn/event/honda-youth-fest-dai-nhac-hoi-khinh-khi-cau-hcm-77937" tabindex="-1">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/22/421C3B.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--									<div class="item slick-slide slick-cloned slick-center" data-slick-index="4" aria-hidden="true" tabindex="-1">--}}
{{--										<a data-opm="0" href="https://ticketbox.vn/event/abl-2019-77580" tabindex="-1">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/07/A47028.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--									<div class="item slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" tabindex="-1">--}}
{{--										<a data-opm="1" href="https://ticketbox.vn/event/RAVOLUTION-77689" tabindex="-1">--}}
{{--											<img src="https://static.ticketbox.vn/Upload/eventcover/2019/11/06/E6CC3B.jpg" class="w-100">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--							<a class="slick-control slick-next slick-arrow" style="display: block;"><i class="ello-angle-right"></i></a>--}}
{{--							<ul class="slick-dots" style="display: block;" role="tablist">--}}
{{--								<li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><button type="button" data-role="none" role="button" tabindex="0">1</button></li>--}}
{{--								<li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><button type="button" data-role="none" role="button" tabindex="0">2</button></li>--}}
{{--								<li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class=""><button type="button" data-role="none" role="button" tabindex="0">3</button></li>--}}
{{--								<li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation03" id="slick-slide03" class=""><button type="button" data-role="none" role="button" tabindex="0">4</button></li>--}}
{{--							</ul>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</header>--}}

			<section class="clearfix">
				<section class="recommended-events clearfix">
					<div class="section-header text-center bg-white font-bold">
						<span>Sự kiện nổi bật</span>
					</div>
					<div class="container section-container">

						<div id="home-event-container" data-opm="hot">
							@for( $i = 1 ; $i <= 2 ; $i ++)
								<div class="col-sm-6 left padding-left-right-0-m">
								<div class="card">
									<div class="card-cover relcomative lazyload-hot-event" data-src="{{ asset('images/demo/1.png') }}" style="background-image: url({{ asset('images/demo/1.jpg') }});">
										<a data-opm="0" href="{{ route('get.detail.article',['hi',2]) }}" class="cover-img w-100 event-item-link" data-event-id="77908"></a>
									</div>
									<div class="card-body relative">
										<div class="padding-10">
											<div class="table w-100 margin-bottom-0">
												<div class="table-cell event-title">
													<a data-opm="0" href="" title="SGO48 Koisuru Xmas Party" class="event-item-link" data-event-id="77908">
														Sư kiện Hạ Long Bay 2019
													</a>
												</div>
												<div class="table-cell card-right-block">
												</div>
											</div>
											<div class="table w-100 margin-bottom-0">
												<div class="table-cell">
													<div class="event-price w-100">
														<span class="color-6">Từ</span> <strong> 200,000 VNĐ</strong>
													</div>
													<div class="event-tags w-100">
                                                            <span class="tag-venues">
                                                            <span class="tag-venue smooth-trans label-default uppercase">Hạ Long</span>
                                                            </span>
														<div class="tag-kinds inline-block">
															<span class="ello-th color-c"></span>
															<a data-opm="0" href="" class="tag-kind">Tour diễn</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="event-date">
											<div class="relative">
												<div class="date-month">
													Tháng 10
												</div>
												<div class="date-detail">
													<div class="date-num color-6">
														7
													</div>
													<div class="date-day">
														Chủ nhật
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endfor
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
										@for ($i =1 ; $i <= 10 ; $i ++)
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
																	<a data-opm="0" href="/" title="Lưu diễn Thành Phố Hồ Chí Minh">
																		Lưu diễn Thành Phố Hồ Chí Minh
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endfor
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
			<form modal="signin-modal" class="signinup mover-actor modal fade dl-one in" role="dialog" novalidate="novalidate" style="padding-left: 17px;" aria-hidden="false"><div class="modal-backdrop fade in" style="height: 477px;"></div>
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content rounded color-6">
						<button type="button" class="close dl-close hidden-xs" data-dismiss="modal">
							<span class=""><i class="fa fa-window-close-o" aria-hidden="true"></i></span>
						</button>
						<div class="modal-header dl-one-header">
							<div class="modal-hl">
								<h4 class="modal-title font-bold">Đăng nhập</h4>
							</div>
							<div class="modal-hr">
								<span class="color-6">Cần tạo tài khoản?</span> <a data-toggle="modal" data-target="[modal='signup-modal']" data-dismiss="modal" class="tkb-color underline">Đăng ký</a>
							</div>
						</div>
						<div class="modal-body mover-up-actions">
							<div class="dl-row mover-up-el">
								<div class="signin-fb">
									<a href="javascript:void(0)" class="input-group fb-bg-color rounded fb-login-btn">
										<span class="fb-bg-color input-group-addon"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
										<span class="fb-bg-color form-control text-center font-bold">Đăng nhập bằng Facebook</span>
									</a>
								</div>

							</div>
							<div class="dl-row mover-up-el">
								<table class="w-100 a-row">
									<tbody><tr>
										<td>
											<div class="line w-100"></div>
										</td>
										<td width="50" class="text-center color-6 font-085">
											<i>hoặc</i>
										</td>
										<td>
											<div class="line w-100"></div>
										</td>
									</tr>
									</tbody></table>
							</div>
							<div data-err="alerter" class="dl-er-message hide">
								<div class="alert alert-warning" role="alert">
									<span data-err="message">Oops!</span>
								</div>
							</div>
							<div class="dl-row mover-up-el">
								<div class="cs1-inp-group dl-input-groups">
									<div class="dl-input-row input-group">
										<span class="input-group-addon"><span class="color-c"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></span>
										<input required="true" name="email" type="email" class="form-control padding-left-0" placeholder="Email" tabindex="100" aria-required="true">
									</div>
									<div class="dl-input-row input-group">
										<span class="input-group-addon"><span class="color-c"><i class="fa fa-briefcase" aria-hidden="true"></i>
</span></span>
										<input required="true" name="password" type="password" class="form-control padding-left-0" placeholder="Mật khẩu" tabindex="101" aria-required="true">
									</div>
								</div>
							</div>
							<div class="dl-row mover-up-el">
								<table class="w-100 a-row">
									<tbody><tr>
										<td class="text-left">
											<input type="checkbox" name="remember" class="material-cb">
											Ghi nhớ
										</td>
										<td class="text-right">
											<a class="color-6" data-toggle="modal" data-target="[modal='resetpwd-modal']" data-dismiss="modal">Quên mật khẩu</a>
										</td>
									</tr>
									</tbody></table>
							</div>
						</div>
						<div class="modal-footer padding-top-0">
							<button data-style="zoom-out" type="submit" class="ladda-button btn tkb-bg-color rounded w-100 font-bold" tabindex="102">
								<span class="ladda-label">Đăng nhập</span>
								<span class="ladda-spinner"></span></button>
						</div>
					</div>
					<div class="modal-under-footer text-center">
						<a class="underline padding-20 visible-xs color-white" data-dismiss="modal">Đóng</a>
					</div>
				</div>
			</form>
			<form modal="signup-modal" class="signinup mover-actor modal fade dl-one in" role="dialog" novalidate="novalidate" style="padding-left: 17px;" aria-hidden="false"><div class="modal-backdrop fade in" style="height: 539px;"></div>
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content rounded color-6">
						<!-- dl close btn -->
						<button type="button" class="close dl-close hidden-xs" data-dismiss="modal">
							<span class=""><i class="fa fa-window-close-o" aria-hidden="true"></i></span>
						</button>						<!-- dl body -->
						<div class="w-100">
							<div class="modal-header dl-one-header">
								<div class="modal-hl">
									<h4 class="modal-title font-bold">Đăng ký</h4>
								</div>
								<div class="modal-hr">
									<span class="color-6">Bạn đã có tài khoản?</span> <a data-toggle="modal" data-target="[modal='signin-modal']" data-dismiss="modal" class="tkb-color underline">Đăng nhập</a>
								</div>
							</div>
							<div class="modal-body mover-up-actions">
								<div class="dl-row mover-up-el">
									<div class="signin-fb">
										<a href="javascript:void(0)" class="input-group fb-bg-color rounded fb-login-btn">
											<span class="fb-bg-color input-group-addon"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
											<span class="fb-bg-color form-control text-center font-bold">Đăng ký bằng Facebook</span>
										</a>
									</div>

								</div>
								<div class="dl-row mover-up-el">
									<table class="w-100 a-row">
										<tbody><tr>
											<td>
												<div class="line w-100"></div>
											</td>
											<td width="220" class="text-center color-6 font-085">
												<i> Hoặc đăng ký tài khoản trên TicketBox</i>
											</td>
											<td>
												<div class="line w-100"></div>
											</td>
										</tr>
										</tbody></table>
								</div>
								<div data-err="alerter" class="dl-er-message hide">
									<div class="alert alert-warning" role="alert">
										<span data-err="message">Opps!</span>
									</div>
								</div>
								<div class="dl-row mover-up-el">
									<div class="dl-input-groups cs1-inp-group overflow-hidden">
										<div class="dl-input-row pull-left w-100 cs1-inp-pair">
											<div class="w-50 cs1-inp pull-left">
												<div class="input-group">
													<span class="input-group-addon"><span class="color-c"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span></span>
													<input required="true" name="firstname" type="text" class="form-control padding-left-0" placeholder="Tên" tabindex="103" aria-required="true">
												</div>
											</div>
											<div class="w-50 cs1-inp pull-left">
												<div class="input-group">
													<input required="true" name="lastname" type="text" class="form-control" placeholder="Họ" tabindex="104" aria-required="true">
												</div>
											</div>
										</div>
										<div class="dl-input-row input-group">
											<span class="input-group-addon"><span class="color-c"><i class="fa fa-envelope-o" aria-hidden="true"></i></span></span>
											<input required="true" name="email" type="email" class="form-control padding-left-0" placeholder="Email" tabindex="105" aria-required="true">
										</div>
										<div class="dl-input-row input-group">
											<span class="input-group-addon"><span class="color-c"><i class="fa fa-briefcase" aria-hidden="true"></i></span></span>
											<input required="true" name="password" type="password" class="form-control padding-left-0" placeholder="Mật khẩu" tabindex="106" aria-required="true">
										</div>
									</div>
								</div>
								<div class="dl-row mover-up-el text-center text-wrap">
									<small>Bằng việc đăng ký và sử dụng trang web, bạn đã đồng ý với các <a href="/term-and-policy" target="_blank">Điều khoản &amp; Quy chế</a></small>
								</div>
							</div>
							<div class="modal-footer padding-top-0">
								<button data-style="zoom-out" type="submit" class="ladda-button btn tkb-bg-color rounded w-100 font-bold" tabindex="107"><span class="ladda-label">Hoàn tất</span><span class="ladda-spinner"></span></button>
							</div>
						</div>
						<!-- dl success -->
						<div class="dl-success-container w-100 h-100 bg-white text-center rounded">
							<div class="modal-header tkb-bg-color">
								<div class="modal-hl">
									<h4 class="modal-title font-bold">Cám ơn bạn đã đăng ký!</h4>
								</div>
							</div>
							<div class="modal-body">
								<div>
									<div class="dl-row">Cám ơn bạn đã đăng ký tài khoản trên TicketBox!</div>
									<div class="dl-row">
										<span class="ello-ok-circled-2" style="color: #ddd; font-size: 80px;"></span>
									</div>
									<div class="dl-row">Chúng tôi đã gửi email xác nhận đến địa chỉ email <span data-text="email-addr"></span></div>
								</div>
							</div>
							<div class="dl-success-footer modal-footer padding-top-0">
								<button data-toggle="modal" data-target="[modal='signin-modal']" data-dismiss="modal" class="btn tkb-bg-color rounded w-100 font-bold">Quay lại Đăng nhập</button>
							</div>
						</div>
					</div>
					<!-- modal under -->
					<div class="modal-under-footer text-center">
						<a class="underline padding-20 visible-xs color-white" data-dismiss="modal">Đóng</a>
					</div>
				</div>
			</form>


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