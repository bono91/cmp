<!DOCTYPE html>
<html  lang ="es">
<head>
	<title>ADMIN - La Central Mueblera Pacheco</title>
	<meta charset="UTF-8">
	 <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/yeti/bootstrap.min.css" rel="stylesheet" >
	 <!--Latest compiled and minified CSS -->
    

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One|Architects+Daughter' rel='stylesheet' type='text/css'>
	
</head>
<body>

	@if(\Session::has('message'))
		@include('admin.partials.message')
	@endif
	
        @include('admin.partials.nav')
	<div class="">
		@yield('content')
	</div>
	

	@include('admin.partials.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    

    @yield('script')
</body>
</html>