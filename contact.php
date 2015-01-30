<?php
/**
 * The template for pulling in the contact form.
 *
 * @package CreativeFolk
 */
?>
<section id="contact">

  <figure class="sectionheader">
      <figcaption>
          <h1 class="sr-only">Contact us</h1>
            <h3>Based out of the home of the Akron Zips</h3>
            <p class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">Our base of operations is Akron, Ohio. If you're nearby we'd love to meet up and talk about stuff. If you're not nearby, we're pretty tech savvy people and we'll virtually meet up with you any way that's convienent.</p>
      </figcaption>
  </figure>
  <div class="container">

    <?php query_posts('category_name=contact'); ?>
    <?php if (have_posts()) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; // end of the loop. ?>

    <?php else : ?>
      <h1>These aren't the droids you're looking for.</h1>
      <p>Move along...</p>
    <?php endif; ?>

  <?php wp_reset_query(); ?>
  </div><!-- container -->
</section><!-- contact -->