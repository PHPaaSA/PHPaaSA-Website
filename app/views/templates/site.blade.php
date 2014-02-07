@section('site.title')
	PHP as a Social Activity
@stop
<html>
	<head>
		<title>
			@yield('site.title')
		</title>
		<link rel="stylesheet" type="text/css" media="all" href="/css/normalize.css">
		<link rel="stylesheet" type="text/css" media="all" href="/css/layout.css">
		<style>

		</style>
	</head>
	<body>
		@yield('site.content', 'Extend Me!')
	</body>
</html>