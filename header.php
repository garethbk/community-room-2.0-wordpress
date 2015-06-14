<!DOCTYPE html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Community Room</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_url') ?>/images/favicon.png" />

<!-- CSS -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

<?php wp_head(); ?>

</head>


<body>

	<nav id="main-nav" class="navbar-fixed-top" role="navigation">

		<div class="container">

			<a href="front-page.html"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="CR header image" /></a>

			<ul class="nav navbar-nav">
				<li><a href="about.html">ABOUT</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SHOWS<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="current-show.html">CURRENT</a></li>
						<li><a href="shows.html">PAST</a></li>
					</ul>
				</li>
				<li><a href="">SUBMIT</a></li>
			</ul>

		</div>

	</nav>

	<nav class="nav-mobile navbar-fixed-top">
		<div class="container">
			<a href="front-page.html"><img src="<?php header_image(); ?>" alt="CR header image" /></a>
			<div class="dropdown">
				<div class="nav-mobile-fold dropdown-toggle" id="mobileNav" data-toggle="dropdown">
					&#9776;
				</div>
				<ul class="nav-mobile-menu dropdown-menu" role="menu" aria-labelledby="mobileNav">
					<li><a href="">ABOUT</a></li>
					<li><a href="">CURRENT SHOW</a></li>
					<li><a href="">PAST SHOWS</a></li>
					<li><a href="">SUBMIT</a></li>
				</ul>
			</div>
		</div>
	</nav>