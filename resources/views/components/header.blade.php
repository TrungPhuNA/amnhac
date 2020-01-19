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
				<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
					<div class="menu-area">
						<div class="limit-box">
							<nav class="main-menu">
								<ul class="menu-area-main">
									<li class="active"> <a href="/">Home</a> </li>
									<li> <a href="{{ route('get.list.article') }}">Post</a> </li>
									@if (\Cart::instance('cart')->count())
										<li>
											<a href="{{ route('get.form.pay') }}">Payment confirmation</a>
										</li>
									@endif
									@if (get_data_user('web'))
										<li>
											<a href="">Xin Chào : {{ get_data_user('web','name') }}</a>
											<ul>
												<li><a href="{{ route('get.transaction.history') }}">Ticket list</a></li>
												<li> <a href="{{ route('get.logout.user') }}" title="Logout">Logout</a> </li>
											</ul>
										</li>
									@else
										<li> <a href="{{ route('get.register') }}" title="Register">Register</a> </li>
										<li> <a href="{{ route('get.login') }}" title=""></a> </li>
									@endif
									<li>
										<a href="">{{ \Cart::count() }} Tour</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header inner -->
	</div>
</header>