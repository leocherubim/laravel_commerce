<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<!-- Vendor Styles -->
	@if(Config::get('app.debug'))
		<!-- Vendor Styles -->
        <link rel="stylesheet" href="{{ asset('build/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/css/vendor/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('build/css/vendor/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('build/css/vendor/jasny-bootstrap.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    @endif

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ route('admin.index') }}">Home</a></li>
					<li><a href="{{ route('categories') }}">Categories</a></li>
					<li><a href="{{ route('products') }}">Products</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
    @if(Config::get('app.debug'))
    	<!-- Vendor Scripts -->
        <script src="{{ asset('build/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/angular.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/angular-animate.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/angular-messages.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/ui-bootstrap.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/navbar.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/jasny-bootstrap.min.js') }}"></script>
        <script src="{{ asset('build/js/vendor/holder.js') }}"></script>
    @else
        <script src="{{ elixir('js/all.js') }}"></script>
    @endif

</body>
</html>
