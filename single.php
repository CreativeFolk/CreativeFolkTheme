<?php
/**
 * The template for displaying all single posts.
 *
 * @package CreativeFolk
 */

get_header(); ?>


		<?php while ( have_posts() ) : the_post(); ?>
<article class="container">

			<?php get_template_part( 'content', 'single' ); ?>

</article>
		<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
