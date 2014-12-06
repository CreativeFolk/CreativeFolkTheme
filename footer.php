<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CreativeFolk
 */
?>

	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.parallax.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.bxslider.min.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-57266603-1', 'auto');
      ga('send', 'pageview');

    </script>
    <?php wp_footer(); ?>
</body>
</html>
