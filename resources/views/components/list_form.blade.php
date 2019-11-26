
<style type="text/css">
	.signinup .modal-content {
		max-width: 360px;
		margin: 0 auto;
	}
	.signinup .dl-success-body {
		border-radius: 40px;
	}
	.text-wrap a { white-space: normal; }
</style>
<!-- signin -->
<form modal="signin-modal" class="signinup mover-actor modal fade dl-one" role="dialog" novalidate="novalidate">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content rounded color-6">
			<button type="button" class="close dl-close hidden-xs" data-dismiss="modal"><span class="ello-cancel-2"></span></button>
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
							<span class="fb-bg-color input-group-addon"><span class="ello-facebook"></span></span>
							<span class="fb-bg-color form-control text-center font-bold">Đăng nhập bằng Facebook</span>
						</a>
					</div>
				</div>
				<div class="dl-row mover-up-el">
					<table class="w-100 a-row">
						<tbody>
						<tr>
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
						</tbody>
					</table>
				</div>
				<div data-err="alerter" class="dl-er-message hide">
					<div class="alert alert-warning" role="alert">
						<span data-err="message">Oops!</span>
					</div>
				</div>
				<div class="dl-row mover-up-el">
					<div class="cs1-inp-group dl-input-groups">
						<div class="dl-input-row input-group">
							<span class="input-group-addon"><span class="ello-mail-alt color-c"></span></span>
							<input required="true" name="email" type="email" class="form-control padding-left-0" placeholder="Email" tabindex="100" aria-required="true">
						</div>
						<div class="dl-input-row input-group">
							<span class="input-group-addon"><span class="ello-lock-3 color-c"></span></span>
							<input required="true" name="password" type="password" class="form-control padding-left-0" placeholder="Mật khẩu" tabindex="101" aria-required="true">
						</div>
					</div>
				</div>
				<div class="dl-row mover-up-el">
					<table class="w-100 a-row">
						<tbody>
						<tr>
							<td class="text-left">
								<input type="checkbox" name="remember" class="material-cb">
								Ghi nhớ
							</td>
							<td class="text-right">
								<a class="color-6" data-toggle="modal" data-target="[modal='resetpwd-modal']" data-dismiss="modal">Quên mật khẩu</a>
							</td>
						</tr>
						</tbody>
					</table>
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
<!-- sign up -->
<form modal="signup-modal" class="signinup mover-actor modal fade dl-one" role="dialog" novalidate="novalidate">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content rounded color-6">
			<!-- dl close btn -->
			<button type="button" class="close dl-close hidden-xs" data-dismiss="modal"><span class="ello-cancel-2"></span></button>
			<!-- dl body -->
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
								<span class="fb-bg-color input-group-addon"><span class="ello-facebook"></span></span>
								<span class="fb-bg-color form-control text-center font-bold">Đăng ký bằng Facebook</span>
							</a>
						</div>
					</div>
					<div class="dl-row mover-up-el">
						<table class="w-100 a-row">
							<tbody>
							<tr>
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
							</tbody>
						</table>
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
										<span class="input-group-addon"><span class="ello-user-2 color-c"></span></span>
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
								<span class="input-group-addon"><span class="ello-mail-alt color-c"></span></span>
								<input required="true" name="email" type="email" class="form-control padding-left-0" placeholder="Email" tabindex="105" aria-required="true">
							</div>
							<div class="dl-input-row input-group">
								<span class="input-group-addon"><span class="ello-lock-3 color-c"></span></span>
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
<!-- reset pwd -->
<form modal="resetpwd-modal" class="signinup mover-actor modal fade dl-one" role="dialog" novalidate="novalidate">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content rounded color-6">
			<button type="button" class="close dl-close hidden-xs" data-dismiss="modal"><span class="ello-cancel-2"></span></button>
			<div class="w-100">
				<div class="modal-header dl-one-header">
					<div class="modal-hl">
						<h4 class="modal-title font-bold">Quên mật khẩu</h4>
					</div>
					<div class="modal-hr">
						<span class="color-6">Or</span> <a data-toggle="modal" data-target="[modal='signin-modal']" data-dismiss="modal" class="tkb-color underline">Đăng nhập</a>
					</div>
				</div>
				<div class="modal-body mover-up-actions">
					<div data-err="alerter" class="dl-er-message hide">
						<div class="alert alert-warning" role="alert">
							<span data-err="message">Opps!</span>
						</div>
					</div>
					<div class="dl-row mover-up-el">
						<div class="dl-input-groups cs1-inp-group">
							<div class="input-group">
								<span class="input-group-addon"><span class="ello-mail-alt color-c"></span></span>
								<input required="true" name="email" type="email" class="form-control padding-left-0" placeholder="Email" tabindex="108" aria-required="true">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer padding-top-0">
					<button data-style="zoom-out" type="submit" class="ladda-button btn tkb-bg-color rounded w-100 font-bold" tabindex="109"><span class="ladda-label">Hoàn tất</span><span class="ladda-spinner"></span></button>
				</div>
			</div>
			<!-- dl success -->
			<div class="dl-success-container w-100 h-100 bg-white text-center rounded">
				<div class="modal-body">
					<div class="dl-row">
						<span class="ello-ok-circled-2" style="color: #ddd; font-size: 80px;"></span>
					</div>
					<div class="dl-row">
						Mật khẩu mới đã được gửi đến email của bạn.
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
<!-- create event -->
<style type="text/css">
	/* category selector */
	.create-select-kind {
		padding: 5px 0 0 0;
	}
	.create-select-kind .select2-selection__rendered {
		padding: 0 !important;
	}
	.create-select-kind .select2-search__field {
		width: auto !important;
	}
	.select2-container .select2-search--inline {
		float: none;
	}
	.create-e-modal .select2-container .select2-selection__choice__remove {
		display: inline;
	}
	@media (min-width: 768px) {
		/* create event */
		.create-e-modal .modal-content {
			max-width: 520px;
			margin: 0 auto;
		}
		.create-e {
			padding: 50px 0;
			background-color: #fff;
		}
		.create-e-intro {
			font-size: 27px;
			line-height: 1.2em;
			margin-bottom: 30px;
		}
	}
</style>
