@section('site.title')
	PHP as a Social Activity
@stop

@section('site.body')
<article>
	<header>
		<h1>article header h1</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
	</header>
	<section>
		<h2>article section h2</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
	</section>
	<section>
		<h2>article section h2</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
	</section>
	<footer>
		<h3>article footer h3</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
	</footer>
</article>

<aside>
	<h3>aside</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
</aside>
@stop

@section('site.header')
<h1 class="title">h1.title</h1>
<nav>
	<ul>
		<li><a href="#">nav ul li a</a></li>
		<li><a href="#">nav ul li a</a></li>
		<li><a href="#">nav ul li a</a></li>
	</ul>
</nav>
@stop
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>
			@yield('site.title')
		</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" type="text/css" media="all" href="/css/normalize.css">
		<link rel="stylesheet" type="text/css" media="all" href="/css/main.css">
		<link rel="stylesheet" type="text/css" media="all" href="/css/layout.css">
		<script src="/js/vendor/modernizr-2.7.1.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<div class="main-container">

			<div class="header-container">
				<header class="wrapper clearfix">
					@yield('site.header')
				</header>
			</div> <!-- #header-container -->

			<div class="main wrapper clearfix">
				@yield('site.body', 'Extend Me!')
			</div> <!-- #main -->

			<div class="footer-container">
				<footer class="wrapper">
					<h3>footer</h3>
				</footer>
			</div> <!-- #footer-container -->

		</div> <!-- #main-container -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

		<script src="/js/plugins.js"></script>
		<script src="/js/main.js"></script>

		<script>
			var _gaq=[['_setAccount','UA-19499387-1'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src='//www.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	</body>
</html>
