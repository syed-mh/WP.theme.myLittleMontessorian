<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Little_Montessorian
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<section class='page-opener boxed rounded'>
			<h1 class="entry-title page-opener__title">
			<?php
			the_title();
			?>
			</h1>
			<figure class='page-opener__icon'>
				<?php
				the_post_thumbnail('medium');
				?>
			</figure>
		</section>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
