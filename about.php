<?php
/**
 * The template for pulling in all About Posts.
 *
 * @package CreativeFolk
 */
?>



<div id="team"></div> <!-- Blank space to make room for the position:fixed #teamback -->
<section id="teamBack">
	<div class="teamHeader sectionHeader">
		<h1 class="sr-only">Meet the Team</h1>
		<h3>Five designers with a common interest</h3>
		<p class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">We started Creative Folk with the intention of collaborating on design work outside of school. All of us are currently pursueing a B.F.A. in Graphic Design from the University of Akron. We wanted to get some real world experience, but we wanted to do it as a group, not as individuals.</p>
	</div>
	<figure>
		<div class="main-bg">
			<?php query_posts('category_name=about'); ?>
				<?php if (have_posts()) : ?>

					<?php while ( have_posts()) : the_post(); ?>
						
						<?php 
							$slug = $post->post_name;
							$title = get_field('title');
						?>

						<div class="hoverTrigger <?php echo $slug; ?>"></div>
						<figcaption class="profile col-xs-4 col-sm-4 col-md-3">
							<div class="moveme row">
								<h4><?php the_title(); ?></h4>
								<strong class="ampersand"><?php echo $title; ?></strong>
								<p><?php the_content(); ?></p>
							</div><!-- moveme -->
						</figcaption><!-- profile -->

					<?php endwhile; ?>

				<?php else : ?>
					<h1>These aren't the droids you're looking for.</h1>
					<p>Move along...</p>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

		</div><!-- main-bg -->
	</figure>
</section><!-- teamback -->