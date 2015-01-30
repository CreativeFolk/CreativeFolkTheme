<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CreativeFolk
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/typeplate.css">
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link type="text/plain" rel="author" href="humans.txt" />

    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <?php wp_head(); ?>
</head>
<body data-spy="scroll" data-target=".top-nav" data-offset="55" <?php body_class(); ?>>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header>

<nav class="navbar top-nav navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/#welcome"><img src="<?php bloginfo('template_directory')?>/img/logo-sm-orng.png" alt="Creative Folk"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <?php if (is_single()): ?>
              <ul class="nav navbar-nav navbar-right">
                <li style="display:none;"><a href="#welcome"></a></li>
                <li><a href="/#about">Meet the Team</a></li>
                <li><a href="/#services">What We Do</a></li>
                <li><a href="/#work">Our Work</a></li>
                <li><a href="/#contact">Contact</a></li>
              </ul>
            <?php else: ?>
              <ul class="nav navbar-nav navbar-right">
                <li style="display:none;"><a href="#welcome"></a></li>
                <li><a href="#about">Meet the Team</a></li>
                <li><a href="#services">What We Do</a></li>
                <li><a href="#work">Our Work</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            <?php endif; ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

</header>