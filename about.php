<?php
/**
 * The template for pulling in all About Posts.
 *
 * @package CreativeFolk
 */
?>

<figure class="mainheader">
	<img src="<?php bloginfo('template_directory');?>/img/creative_folk_handtype.png" class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2" />
	<figcaption id="about">
		<h1>Meet The Team</h1>
	</figcaption>
</figure>

<section class="aboutsection">
	<div class="container">

		<?php query_posts('category_name=about'); ?>
		<?php if (have_posts()) : ?>

			<ul class="list-unstyled hidden-xs">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php 
					$title = get_field('title');
					?>

					<li class="col-xs-12 col-sm-6 col-md-4 about-entry">
						<div class="headshot">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mugshot hidden-lg">
						</div>

						<h2><?php the_title(); ?></h2>
						<h3><?php echo $title; ?></h3>
						<p><?php the_content(); ?></p>
					</li>

				<?php endwhile; // end of the loop. ?>
			</ul>


			<ul class="list-unstyled visible-xs about-slider">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php 
					$title = get_field('title');
					$image = get_field('mugshot'); 
					?>

					<li class="col-xs-12 about-entry">
						<div class="headshot">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="mugshot">
						</div>

						<h2><?php the_title(); ?></h2>
						<h3><?php echo $title; ?></h3>
						<p><?php the_content(); ?></p>
					</li>

				<?php endwhile; // end of the loop. ?>
			</ul>



		<?php else : ?>
			<h1>These aren't the droids you're looking for.</h1>
			<p>Move along...</p>
		<?php endif; ?>

		<?php wp_reset_query(); ?>
	</div><!-- container -->
</section><!-- about -->