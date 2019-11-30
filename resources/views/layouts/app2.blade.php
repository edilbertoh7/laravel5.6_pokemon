<!DOCTYPE html>
<html>
<head>
	<title>l.5.6 -@yield('title')</title>
	<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4.css') }}">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
		<a href="#" class="navbar-brand">pokemon</a>
	</nav>
	<div class="container">
@yield('content')
</div>
</body>
</html>