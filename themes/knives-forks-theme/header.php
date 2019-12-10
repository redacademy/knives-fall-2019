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

		<header id="masthead" class="site-header" role="banner">

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="home-logo" href="<?php bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo/knives-forks-logo.svg" alt="logo"></a>
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html('mobile menu'); ?></button> -->
				<?php //if( when it's width is 600 and more ) 
				?>
				<!-- mobile menu -->
				<div class="mobile-menu hide">
					<i class="fas fa-times cross" id="cross"></i>
					<?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_id' => 'mobile-menu')); ?>
				</div>
				<!-- desktop menu -->
				<div class="desktop-menu">
					<?php wp_nav_menu(array('theme_location' => 'desktop', 'menu_id' => 'desktop-menu')); ?>
				</div>
				<i class="fas fa-bars hamburger" id="hamburger"></i>
				<!-- hidden menu -->
				<div class="hidden-menu hide">
					<i class="fas fa-times cross" id="hid-cross"></i>
					<?php wp_nav_menu(array('theme_location' => 'hidden', 'menu_id' => 'hidden-menu')); ?>
				</div>

				<!-- set 1 to primary menu & display none, display block-->

			</nav><!-- #site-navigation -->
			<?php

			if (is_page('how-it-works')) { //START for BANNER's featured IMAGE with sayings
				echo '
				
					<section class="banner">
						<nav class="banner-img">';
				the_post_thumbnail('large');
				echo '	</nav>
						<nav class="banner-content">
							<h2>
								Together at Knives & Forks, we’re harnessing the power of local capital — keeping it flowing within the community.
							</h2>
						</nav>
					</section>
					';
			}

			?>


		</header><!-- #masthead -->

		<div id="content" class="site-content">