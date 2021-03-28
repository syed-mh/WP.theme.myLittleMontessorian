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

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'my-little-montessorian' ); ?></a>
	<header id="top-header" class="top-header">
		<div class="half left">
		</div>
		<div class="half right">
		</div>
	</header> <!-- #top-header -->
	<header id="site-header" class="main-navigation">
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-navigation-left',
					'menu_id'        => 'header-navigation-left',
					'menu_class'		 => 'header-navigation-left header-navigation',
					'container'			 => 'nav'
					)
				);
				?>
			<div class="site-logo">
				<?php the_custom_logo(); ?>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-navigation-right',
					'menu_id'        => 'header-navigation-right',
					'menu_class'		 => 'header-navigation-left header-navigation',
					'container'			 => 'nav'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #site-header -->
