<?php
/**
 * The template for displaying all our work.
 *
 * @package CreativeFolk
 */
?>
    <section id="portfolio">
        <div class="portHeader sectionHeader">
            <h1 class="sr-only">Our Portfolio</h1>
            <h3 class="visible-md visible-lg">We make awesome stuff</h3>
        </div>
        <div class="container-fluid">
            <?php query_posts('category_name=web'); ?>
            <?php if (have_posts()) : ?>
                <div class="row">
                    <div class="col-xs-12">
                        <h5>Web</h5>
                        <div class="row">
                            <ul class="list-unstyled portfolioList">
                                <?php while ( have_posts() ) : the_post(); ?>
                                <?php $blurb = get_field('blurb'); ?>
                                <li>
                                    <figure>
                                        <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'port-img' ) ); ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <figcaption>
                                                <h4><?php the_title();?></h4>
                                                <p><?php echo $blurb; ?></p>
                                            </figcaption>
                                        </a>
                                    </figure>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        </div>
                </div><!-- column -->
                <?php endif; ?>
                <?php wp_reset_query(); ?>

                <?php query_posts('category_name=print'); ?>
                <?php if (have_posts()) : ?>
                <div class="col-xs-12">
                    <h5>Print</h5>
                    <div class="row">
                        <ul class="list-unstyled portfolioList">
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php $blurb = get_field('blurb'); ?>
                            <li>
                                <figure>
                                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'port-img' ) ); ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <figcaption>
                                            <h4><?php the_title();?></h4>
                                            <p><?php echo $blurb; ?></p>
                                        </figcaption>
                                    </a>
                                </figure>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div><!-- column -->
                <?php endif; ?>
                <?php wp_reset_query(); ?>

                <?php query_posts('category_name=identity'); ?>
                <?php if (have_posts()) : ?>
                <div class="col-xs-12">
                    <h5>Identity</h5>
                    <div class="row">
                        <ul class="list-unstyled portfolioList">
                            <?php while ( have_posts() ) : the_post(); ?>
                            <?php $blurb = get_field('blurb'); ?>
                            <li>
                                <figure>
                                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'port-img' ) ); ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <figcaption>
                                            <h4><?php the_title();?></h4>
                                            <p><?php echo $blurb; ?></p>
                                        </figcaption>
                                    </a>
                                </figure>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div><!-- column -->
                <?php endif; ?>
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </section><!-- portfolio -->
<<<<<<< Updated upstream
<?php wp_reset_query(); ?>
=======
<<<<<<< Updated upstream
<?php wp_reset_query(); ?>

=======
    wp_reset_query()
>>>>>>> Stashed changes
>>>>>>> Stashed changes
