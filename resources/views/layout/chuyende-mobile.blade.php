<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="classification" content="hospital" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
	<meta name="robots" content="index, follow" />
	<meta name="creator" content="Phòng khám Nam Khang" />
	<meta name="publisher" content="Phòng khám Nam Khang" />
    <meta name="author" content="{{ $setting->web_name }}">
    <!-- csrf -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- facebook -->
    <meta property="og:site_name" content="Phòng Khám Nam Khang" />
	<meta property="og:type" content="article" />
    <meta property="og:locale " content="vi_VN">
    <!-- link rss,sitemap -->
    
    <!-- link icon -->
    <link rel="shortcut icon" href="{{ asset('public/img/'.$setting->web_icon) }}" type="image/x-icon">
    @yield('title')
    @yield('keyword')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/glyphicon-bootstrap/glyphicon-bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/font-awesome/css/font-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/global/slick/slick-theme.css') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/mobile/mobile.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/chuyende/mobile/mobile-header.css') }}">
	<link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/bootstrap.css') }}">
	@yield('css')
	<!-- <link rel="stylesheet" href="{{ asset('public/css/chuyende/mobile/mobile-viem-nhiem-quy-dau-mediaqueries.css') }}"> -->
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-1.12.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.form.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery.popupoverlay.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/jquery-scrolltofixed-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/slick/slick.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/global/shake.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/mobile/mobile.js') }}"></script>
</body>
</html>
