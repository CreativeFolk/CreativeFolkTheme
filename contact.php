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
          <h1>Contact</h1>
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