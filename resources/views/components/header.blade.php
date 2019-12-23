<header>
	<!-- header inner -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
					<div class="full">
						<div class="center-desk">
							<div class="logo">
								<a href="/"><img src="{{ asset('images/logo.jpg') }}" alt="logo" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
					<div class="menu-area">
						<div class="limit-box">
							<nav class="main-menu">
								<ul class="menu-area-main">
									<li class="active"> <a href="/">Trang Chủ</a> </li>
									<li> <a href="{{ route('get.list.article') }}">Tin tức</a> </li>
									@if (get_data_user('web'))
										<li> <a href="">Xin Chào : {{ get_data_user('web','name') }}</a> </li>
										<li> <a href="">Đăng xuất</a> </li>
									@else
										<li> <a href="{{ route('get.register') }}" title="Đăng ký">Đăng ký</a> </li>
										<li> <a href="{{ route('get.login') }}" title="Đăng nhập">Đăng nhập</a> </li>
									@endif

								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
					<form class="search">
						<input class="form-control" type="text" placeholder="Search">
						<button><img src="{{ asset('images/search_icon.png') }}"></button>
					</form>
				</div>
			</div>
		</div>
		<!-- end header inner -->
	</div>
</header>