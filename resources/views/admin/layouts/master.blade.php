<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title')</title>
	<!-- Main Styles -->
	<link rel="stylesheet" href="{{ asset('admin/styles/style-horizontal.min.css') }}">
	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{ asset('admin/plugin/waves/waves.min.css') }}">
	<!-- Color Picker -->
	<link rel="stylesheet" href="{{ asset('admin/color-switcher/color-switcher.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/plugin/datatables/media/css/dataTables.bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
	@yield('heade')
</head>
<body>
	@include('admin.layouts.header')
	<div id="wrapper">
		<div class="main-content container">
			<div class="row small-spacing">
				<div class="col-xs-12">
					@yield('content')
				</div>
			</div>
			@include('admin.layouts.footer')
		</div>
	</div>
</body>
@yield('script')
</html>