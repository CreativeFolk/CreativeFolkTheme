<?php
/**
 * The template for displaying all our work.
 *
 * @package CreativeFolk
 */
?>

<section id="work">

  <figure class="sectionheader">
      <figcaption>
          <h1>Our Work</h1>
      </figcaption>
  </figure>
  <div class="container-fluid">

    <?php query_posts('category_name=work'); ?>
    <?php if (have_posts()) : ?>

      <ul class="list-unstyled row">

        <?php while ( have_posts() ) : the_post(); ?>
        <?php 
          $blurb = get_field('blurb'); 
          ?>

          <li class="col-xs-12 col-sm-6 col-lg-4 work-entry">
              <figure class="row">
                  <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'port-img' ) ); ?>
                  <figcaption class="col-xs-12">
                      <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                      <p><?php echo $blurb; ?></p>
                  </figcaption>
              </figure>
          </li>


        <?php endwhile; // end of the loop. ?>

      </ul>

    <?php else : ?>
      <h1>These aren't the droids you're looking for.</h1>
      <p>Move along...</p>
    <?php endif; ?>

  <?php wp_reset_query(); ?>
  </div><!-- container -->
</section><!-- work -->