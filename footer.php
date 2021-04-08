<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package My_Little_Montessorian
 * @author Syed Mohammed Hassan <contactsyedmh@gmail.com>
 * @since 1.0
 */

?>

	<footer id="site-footer" class="site-footer">
		<div class="site-footer__top">
			<div class="site-footer__top__logo-container">
				<?php the_custom_logo(); ?>
			</div>
		</div><!-- .footer-top -->
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary-footer-navigation',
				'menu_id'        => 'primary-footer-navigation',
				'container_class'		 => 'site-footer__top__footer-navigation',
				'container'			 => 'nav'
				)
			);
		?>
		<div class="site-footer__footer-bottom">
		</div><!-- .footer-bottom -->
		<div class="site-footer__copyrights">
			<p>Copyrights © <?php echo get_bloginfo() ?> <?php echo date('Y'); ?></p> 
		</div>
	</footer><!-- #site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
