<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Little_Montessorian
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'my-little-montessorian' ); ?></a>
	<header id="header-top" class="header-top">
		<div class="boxed">
			<div class="inner equal-height">
				<div class="half left">
					<?php
						if(is_active_sidebar('sitewide-notice')):
							dynamic_sidebar('sitewide-notice');
						endif;
					?>
				</div>
				<div class="half right">
					<ul class='header-top__menu'>
						<li class="header-top__menu-item equal-height--inline">
							<img src="<?php echo get_template_directory_uri() . '/assets/icons/my-little-montessorian-contact-icon.svg' ?>" alt="">
							<a class='typography--accent' href=<?php echo get_bloginfo('url') . "/contact" ?> >Contact</a>
						</li>
						<li class="header-top__menu-item equal-height--inline">
							<img src="<?php echo get_template_directory_uri() . '/assets/icons/my-little-montessorian-login-icon.svg' ?>" alt="">
							<a class='typography--accent' href="<?php echo get_bloginfo('url') . "/login" ?>">Login/Register</a>
						</li>
						<li class="header-top__menu-item equal-height--inline">
							<img src="<?php echo get_template_directory_uri() . '/assets/icons/my-little-montessorian-cart-icon.svg' ?>" alt="">
							<a class='typography--accent' href=<?php echo get_bloginfo('url') . "/cart" ?>>Cart</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header> <!-- #header-top -->
	<header id="header-main" class="main-navigation header-main">
		<div class="boxed equal-height">
				<span class="header-main__widget-container left">	
				</span> <!-- .widget-container -->
				<span class="header-main__nav-container equal-height--inline">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-navigation-left',
							'menu_id'        => 'header-navigation-left',
							'container_class'		 => 'header-navigation-left header-navigation right two-fifths',
							'container'			 => 'nav'
							)
						);
						?>
					<div class="header-main__logo-container center fifth">
						<?php the_custom_logo(); ?>
					</div>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-navigation-right',
							'menu_id'        => 'header-navigation-right',
							'container_class'		 => 'header-navigation-left header-navigation left two-fifths',
							'container'			 => 'nav'
							)
						);
						?>
				</span> <!-- .nav-container -->
				<span class="header-main__widget-container right">
					<button class="theme-button pill rounded--full typography--accent">
						<a href="#" alt='Subscribe' class='no-click'>Subscribe</a>
					</button>
				</span> <!-- .widget-container -->
		</div><!-- .boxed -->
	</header><!-- #header-main -->
