<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<!--[if lt IE 7 ]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<title>Fancybox Demo</title>
		<meta name="description" content="Demo of Fancybox">
		<meta name="author" content="SeanJA">

		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/jquery.fancybox-1.3.4.css" media="screen" />
		<link rel="stylesheet" href="css/html5_top.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/html5_bottom.css">

		<script src="js/libs/modernizr-2.0.6.min.js"></script>
	</head>
	<body>

		<div id="container">
			<header>
				<h1>Fancybox Demo</h1>
			</header>
			<div id="main" role="main">
				<!-- spit out the image grid -->
				<?php include 'image_grid.php'; ?>
			</div>
			<footer>

			</footer>
		</div> <!--! end of #container -->

		<!--include jquery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
		<!-- include the fancybox js -->
		<script src="js/libs/jquery.fancybox-1.3.4.js"></script>
		<!-- scripts concatenated and minified via ant build script-->

		<!-- include script.js -->
		<script src="js/script.js"></script>
		<!-- end scripts-->

		<script>
			var _gaq=[['_setAccount','UA-4779209-5'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
				g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
			<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
		<![endif]-->

	</body>
</html>
