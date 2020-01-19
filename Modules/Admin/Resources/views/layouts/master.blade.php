<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Admin</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('theme_admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    @yield('href')
    <link href="{{ asset('theme_admin/css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Hello {{ get_data_user('admins','name') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"></a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="{{ \Request::route()->getName() == 'admin.home' ? 'active' : '' }}">
                    <a href="{{ route('admin.home') }}">Dashboard</a>
                </li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.category' ? 'active' : '' }}"><a href="{{ route('admin.get.list.category') }}">Category</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.singer-bands' ? 'active' : '' }}"><a href="{{ route('admin.get.list.singer-bands') }}">Music group and singer</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.tour' ? 'active' : '' }}"><a href="{{ route('admin.get.list.tour') }}">Tours</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.menu' ? 'active' : '' }}"><a href="{{ route('admin.get.list.menu') }}">Meun Post</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.article' ? 'active' : '' }}"><a href="{{ route('admin.get.list.article') }}">Post</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.transaction' ? 'active' : '' }}"><a href="{{ route('admin.get.list.transaction') }}">Ticket management</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.user' ? 'active' : '' }}"><a href="{{ route('admin.get.list.user') }}">User</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.contact' ? 'active' : '' }}"><a href="{{ route('admin.get.list.contact') }}">Contact</a></li>
                <li class="{{ \Request::route()->getName() == 'admin.get.list.page_static' ? 'active' : '' }}"><a href="{{ route('admin.get.list.page_static') }}">Page Static</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible" style="position: fixed;right: 20px">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Thành công! </strong> {{ \Session::get('success') }}
                </div>
            @endif

            @if (\Session::has('danger'))
                <div class="alert alert-danger alert-dismissible" style="position: fixed;right: 20px">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Thất bại! </strong> {{ \Session::get('danger') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('theme_admin/js/bootstrap.min.js') }}"></script>
<script>
	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#out_img').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#input_img").change(function() {
		readURL(this);
	});
</script>
@yield('script')
</body>
</html>