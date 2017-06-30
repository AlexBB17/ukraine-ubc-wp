<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
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
			<a href="<?php echo get_site_url(); ?>">
				<img class="img-logo" src="http://ukraine-ubc.kiev.ua/wp-content/uploads/2017/05/logo.png" alt="Ukraine-UBC">
			</a>
			<div class="logo-text">UKRAINE <span class="star">*</span> UNITED STATES OF AMERICA <span class="star">*</span> UNITED KINGDOM <span class="star">*</span> CANADA</div>
			<div class="logo-slogan">Стратегия решений иммиграционных и не иммиграционных вопросов</div>
		</div>
	</div>
</div>