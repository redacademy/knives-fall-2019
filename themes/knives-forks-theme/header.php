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
				<div class="nav-container">
					<a class="home-logo" href="<?php bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo/knives-forks-logo@2x.png" alt="logo"></a>
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
						<?php // if (is_page(array('our-story', 'how-it-work', 'events', 'become-investor'))) { } 
						?>
					</div>
					<i class="fas fa-bars hamburger" id="hamburger"></i>
					<!-- hidden menu -->
					<div class="hidden-menu hide">
						<i class="fas fa-times cross" id="hid-cross"></i>
						<?php wp_nav_menu(array('theme_location' => 'hidden', 'menu_id' => 'hidden-menu')); ?>
					</div>

					<!-- set 1 to primary menu & display none, display block-->
				</div>
			</nav><!-- #site-navigation -->
			<?php

			if (is_page('how-it-works') || is_front_page() || is_page('our-story')) { //START for BANNER's featured IMAGE with sayings
				// echo '
				
				// 	<section class="banner">
				// 		<nav class="banner-img">';
				// the_post_thumbnail('full');
				// echo '	</nav>
				// 		<nav class="banner-content">
				// 			<h2>
				// 				'. get_field('banner-description') .'
				// 			</h2>
				// 		</nav>
				// 	</section>
				// 	';

				echo '
				
					<section class="banner">
						<div class="banner-img">';
				the_post_thumbnail('full');
				echo '	<div class="banner-content">
				<h2>
					'. get_field('banner-description') .'
				</h2>
			</div> </div>
						
					</section>
					';
			} else if (is_page('events')) {
				// $arrays=get_field('featured-events');

				// echo '<pre>';
				// echo print_r($arrays);

				// echo '</pre>';

				$img = get_field('events_page_banner_image');
				$img2 = get_field('page_desktop_banner');
				// $img2=$img2['url'];
				// var_dump($img2);
				$tmp .= '
						<section class="banner">
							<nav class="banner-img banner-events">
								<img src="' . $img . '" 
								srcset="' . esc_url($img2) . ' 1000w, ' . $img . ' 499w" 
								 alt="knives-fork-events">
							</nav>
								<div class="banner-outer-content">
									<nav class="banner-content">
										<h2 class="event-title">
										' . esc_attr(get_field('upcoming_event_title')) . '
										</h2>
										<p class="event-location">
											' . esc_attr(get_field('upcoming_event_location')) . '
										<p>
									</nav>
									<a href="#" alt="Buy Tickets" class="btn btn-event">buy tickets</a>
									<a href="#" alt="Apply to Pitch" class="btn btn-event">apply to pitch</a>
								</div>
						</section>
						';


				echo $tmp;
			}


			?>


		</header><!-- #masthead -->

		<div id="content" class="site-content">