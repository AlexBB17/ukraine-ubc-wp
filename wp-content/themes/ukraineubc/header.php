<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">

<div class="header">
	<div class="head-menu-block row">
		<?php wp_nav_menu(['menu' => 'top_menu', 'menu_class' => 'nav-menu js-nav-menu']); ?>
	</div>
	<div class="head-logo-block">
		<div class="logo-content">
			<img class="img-logo" src="https://static.wixstatic.com/media/a9ff3b_bcb22b9fe58d4cbe8b2bfd13e1ac3ff5.png/v1/fill/w_75,h_75,al_c/a9ff3b_bcb22b9fe58d4cbe8b2bfd13e1ac3ff5.png" alt="">
			<div class="logo-text">UKRAINE-UBC</div>
		</div>
	</div>
</div>