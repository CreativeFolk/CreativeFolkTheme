<?php
/**
 * The template for pulling in all Service Posts.
 *
 * @package CreativeFolk
 */
?>


<section id="about">
  <div class="aboutHeader sectionHeader">
    <h1 class="sr-only">About Us</h1>
    <h3>Design solutions for businesses, organizations, and individuals</h3>
    <p class="col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">Creative Folk is a group of five designers whose collective skills cover a wide range. Our specialties are in Web Design, Identity, and Print Design. That being said, if you've got a crazy idea for a project, we want to hear about it!</p>
  </div>
  <div class="container">
    <div class="row">
      <?php query_posts('category_name=services'); ?>
      <?php if (have_posts()) : ?>

        <?php while ( have_posts() ) : the_post(); ?>
          
          <div class="col-xs-12 col-md-4">
            <div class="row">
              <?php 
              $subHead = get_field('subhead');
              $icon = get_field('icon');
              ?>
              <figure class="col-xs-12 col-sm-6 col-md-12 serviceheader">
                <img class="icon col-xs-8 col-xs-offset-2 com-sm-6 col-sm-offset-1 col-md-8 col-md-offset-2" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"/>
                <figcaption class="col-xs-12">
                  <h4><?php the_title(); ?></h4>
                </figcaption>
              </figure>

              <div class="col-xs-12 col-sm-6 col-md-12">
                <h4><?php echo $subHead; ?></h4>
                <?php the_content(); ?>
              </div>

            </div><!-- row -->
          </div>
        <?php endwhile; // end of the loop. ?>


      <?php else : ?>
        <h1>These aren't the droids you're looking for.</h1>
        <p>Move along...</p>
      <?php endif; ?>

      <?php wp_reset_query(); ?>

    </div><!-- row -->
  </div><!-- container -->
</section>