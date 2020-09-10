<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php if(is_front_page()) {
    bloginfo('name'); ?>
        -
        <?php    
    bloginfo('description');
  } else { 
    wp_title( '|', true, 'right' );
  } ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'header-one' ); ?>>


    <header class="main-header">
        <div class="container">
            <div class="grid">
                <div class="col-6">
                    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo-site"
                            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.svg"
                            alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
                </div>
                <div class="col-6">
                    <a class="button-pull-right" href="#"><i class="fas fa-unlock"></i> Log in</a>
                </div>
            </div>

        </div>
        <nav class="main-nav">
            nav
        </nav>
    </header>