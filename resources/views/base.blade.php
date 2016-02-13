<!DOCTYPE html>
<html  lang ="es">
<head>
	<title>@yield('title','La Central Mueblera')</title>
	<meta charset="UTF-8">
	 <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/yeti/bootstrap.min.css" rel="stylesheet" >
	 <!--Latest compiled and minified CSS -->
    

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One|Architects+Daughter' rel='stylesheet' type='text/css'>
	<link rel="stylesheet"  href="{{ asset('css/main.css') }}">
</head>
<body>
	@include('store.partials.nav')
	@yield('content')

	@include('store.partials.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script  src="{{ asset('js/main.js')}}"></script>

</body>
</html>