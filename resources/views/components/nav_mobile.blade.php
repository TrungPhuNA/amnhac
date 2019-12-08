<div id="snap-drawers" class="snap-drawers visible-xs">
	<div class="snap-drawer snap-drawer-right">
		<div class="menu-containter relative w-100 h-100 table margin-bottom-0">
			<div class="menu-header table-row">
				<!-- if not logedin -->
				<div class="sign-block padding-5 text-center">
					<div class="sign-tkb">
						<div class="table valign-middle uppercase font-085">
							@if (!get_data_user('web'))
								<div class="signin-tkb table-cell w-50">
									<a data-toggle="modal" data-target="[modal='signin-modal']">Đăng nhập {{ get_data_user('web') }}</a>
								</div>
								<div class="signup-tkb table-cell">
									<a data-toggle="modal" data-target="[modal='signup-modal']" data-dismiss="modal">Đăng ký</a>
								</div>
							@else
								<div class="signup-tkb table-cell">
									<a href="">Xin Chào {{ get_data_user('web','name') }} - Đăng xuất</a>
								</div>
							@endif
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