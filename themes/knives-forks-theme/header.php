<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Lora:400,700&display=swap" rel="stylesheet"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<p class="site-description"><?php bloginfo('description'); ?></p>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a href="<?php bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/knives-forks-logo.svg" alt="logo"></a>
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('Primary Menu'); ?></button> -->
				<?php //if( when it's width is 600 and more ) 
				?>
				<div></div>
				<i class="fas fa-bars"></i>
				<!-- <i class="fas fa-times"></i> -->
				<?php wp_nav_menu(array('menu_id' => 'mobile-menu')); ?>
			</nav><!-- #site-navigation -->

			<!-- <?php if(is_front_page()): ?> -->
			<!--START for BANNER's featured IMAGE with sayings-->
			<section class="banner">
				<nav class="banner-img">
					<?= the_post_thumbnail('full') ?>
				</nav>
				<nav class="banner-content">
					<h2>
						<!-- TODO please don't hardcode this text and use a custom field for this -->
						Together at Knives & Forks, we’re harnessing the power of local capital — keeping it flowing within the community.
					</h2>
				</nav>
			</section>
			<!-- <?php endif; ?> -->

		</header><!-- #masthead -->

		<div id="content" class="site-content">