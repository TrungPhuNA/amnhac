<div id="navbarheader">
	<div class="overlay-menu smooth-trans hidden"></div>
	<nav data-opm="header" class="navbar tkb-navbar navbar-default showsearch">
		<div class="w-100">
			<button type="button" data-menu-trigger="true" class="navbar-toggle cd-nav-trigger pull-right">
				<span></span>
			</button>
			<a class="tkb-brand navbar-brand" href="/" data-opm="logo">
				<img class="tkb-logo" src="{{ asset('images/logo.png') }}">
			</a>
			<div class="searcher pull-left">
				<span class="search-btn-m smooth-trans hidden color-white"><span class="ello-search smooth-trans"></span></span>
				<div class="input-group rounded search-form smooth-trans hid">
					<span class="search-btn input-group-addon bg-white smooth-trans" data-search-url="/events" data-search-click="true"><span class="ello-search smooth-trans rotate-90"></span></span>
					<input data-autocomplete="search" type="text" class="form-control" placeholder="Tìm sự kiện" aria-describedby="sizing-addon1" tabindex="1" autocomplete="off">
					<span class="btn-submit-m input-group-addon bg-white smooth-trans" data-search-url="/events" data-search-click="true"><span class="ello-right smooth-trans"></span></span>
				</div>
				<div class="search-res smooth-trans relative hid" data-search-result="true" tabindex="2">
					<div class="autocomplete-suggestions" style="position: absolute; display: none; z-index: 9999;"></div>
				</div>
			</div>
			<div class="location-selector pull-left">
				<div class="btn-group">
					<button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
						<span class="location-icon ello-location-1"></span>
						<span class="location-name hidden-xs">Chọn địa điểm</span>
						<span class="down-icon ello-angle-down hidden-xs"></span>
						<span class="down-icon caret hidden-sm hidden-md hidden-lg"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li data-redirect-location-url="/events/ho-chi-minh" data-city="ho-chi-minh">
							Hồ Chí Minh
						</li>
						<li data-redirect-location-url="/events/ha-noi" data-city="ha-noi">
							Hà Nội
						</li>
						<li data-redirect-location-url="/events/other-locations" data-city="other-locations">
							Các địa điểm khác
						</li>
					</ul>
				</div>
			</div>
			<ul class="nav navbar-nav navbar-right nav-lang nav-lang-mobi pull-right">
				<li class="dropdown">
					<a class="dropdown-toggle" role="button" data-toggle="dropdown">
						<span class="lang pull-left rounded vi"></span><span class="caret tkb-dark-color"></span>
					</a>
					<ul class="dropdown-menu smooth-trans" role="menu">
						<li>
							<a data-opm="lang" data-select-language="" href="" data-language="vi">
								<span class="lang vi pull-left rounded"></span>Tiếng Việt
							</a>
						</li>
						<li>
							<a data-opm="lang" data-select-language="" href="" data-language="en">
								<span class="lang en pull-left rounded"></span>English
							</a>
						</li>
					</ul>
				</li>
				<li class="hidden-xs hidden-sm">
					<div data-action="create-e" data-toggle="modal" data-target="[modal='create-e-modal']" class="btn-create-e tkb-btn rounded tkb-bg-color center">
						<span class="ello-plus tkb-dark-color"></span>
						<span class="font-bold">Tạo sự kiện</span>
					</div>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li>
					<a data-toggle="modal" data-target="[modal='signin-modal']">Đăng nhập</a>
				</li>
				<li>
					<a class="nav-bullet color-white">|</a>
				</li>
				<li>
					<a data-toggle="modal" data-target="[modal='signup-modal']">Đăng ký</a>
				</li>
			</ul>
		</div>
	</nav>
</div>