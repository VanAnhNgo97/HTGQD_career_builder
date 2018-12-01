<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/common/favicon.ico') }}" />
	<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css?v522') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css?v522') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('styles/pc/main2.min.css?v522') }}" type="text/css">
    <script src="{{ asset('js/config.dist.min.js?v522') }}"></script>
    <script src="{{ asset('js/require.min.js?v522') }}" data-main="main_multi"></script>
	@yield('head')
</head>
<body>
	@include('client.layouts.header')
	@yield('content')
	@include('client.layouts.footer')
</body>
@yield('script')
</html>