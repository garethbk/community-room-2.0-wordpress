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

			<a href="<?php bloginfo('url')?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="CR header image" /></a>

			<?php
				wp_nav_menu( array(
					'menu' => 'header-menu',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'nav navbar-nav',
					'walker' => new wp_bootstrap_navwalker()
					)
				);
			?>

	</nav>

	<nav class="nav-mobile navbar-fixed-top">
		<div class="container">
			<a href="<?php bloginfo('url')?>"><img src="<?php header_image(); ?>" alt="CR header image" /></a>
			<div class="dropdown">
				<div class="nav-mobile-fold dropdown-toggle" id="mobileNav" data-toggle="dropdown">
					&#9776;
				</div>
				<?php
				wp_nav_menu( array(
					'menu' => 'mobile-menu',
					'depth' => 2,
					'container' => false,
					'menu_class' => 'nav-mobile-menu dropdown-menu',
					'walker' => new wp_bootstrap_navwalker()
						)
					);
				?>
			</div>
		</div>
	</nav>