<!doctype html>
<html lang="<?php echo ICL_LANGUAGE_CODE ?>" class="is-preloader{% if iOS %} {{ iOS }}{% endif %}{% if iPad %} ipad{% endif %}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, minimal-ui, shrink-to-fit=no">
        
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo ('name' ); ?>">
        <meta property="og:site_name" content="<?php bloginfo ('name' ); ?>">
        <meta property="og:url" content="<?php echo site_url(); ?>">
        <meta property="og:image" content="<?php echo get_template_directory(); ?>/assets/images/facebook.jpg">
        <meta property="og:image:width" content="450">
        <meta property="og:image:height" content="450">
        <meta property="og:description" content="<?php bloginfo ('description' ); ?>">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="">
        <meta name="twitter:creator" content="">
        <meta name="twitter:title" content="<?php the_title(); ?> | <?php bloginfo ('name' ); ?>">
        <meta name="twitter:description" content="<?php bloginfo ('description' ); ?>">
        <meta name="twitter:image" content="<?php echo get_template_directory(); ?>/assets/images/twitter.jpg">
        
        <title><?php the_title(); ?> | <?php bloginfo ('name' ); ?></title>

        <!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php //echo get_template_directory(); ?>/css/ie9.css">
            <script>var browser = 'ie9';</script>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <link href="<?php echo get_template_directory(); ?>/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="<?php echo get_template_directory(); ?>/build/app.min.css">


        
        <?php wp_head(); ?>

    </head>

    <svg id="icons"> </svg>


    <header></header>

    <body>
       