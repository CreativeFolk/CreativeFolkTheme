<?php
/**
 * The template for pulling in all Service Posts.
 *
 * @package CreativeFolk
 */
?>

<section id="services">

  <figure class="sectionheader">
      <figcaption>
          <h1>What We Do</h1>
      </figcaption>
  </figure>
  <div class="container">

    <?php query_posts('category_name=services'); ?>
    <?php if (have_posts()) : ?>

          <?php while ( have_posts() ) : the_post(); ?>
            
        <div class="col-xs-12 col-md-4">
        <div class="row">
            <?php 
              $subHead = get_field('subhead');
              $icon = get_field('icon');
              ?>

          <div class="col-xs-12 col-sm-6 col-md-12 serviceheader">
            <img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
              <h2><?php the_title(); ?></h2>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-12">
              <h4><?php echo $subHead; ?></h4>
              <?php the_content(); ?>
          </div>

        </div>
        </div>
          <?php endwhile; // end of the loop. ?>


    <?php else : ?>
      <h1>These aren't the droids you're looking for.</h1>
      <p>Move along...</p>
    <?php endif; ?>

  <?php wp_reset_query(); ?>
  </div><!-- container -->
</section><!-- services -->