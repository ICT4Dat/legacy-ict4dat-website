<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

    <head profile="http://gmpg.org/xfn/11">

        <!-- Framework CSS Blueprint -->
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueprint/screen.css" type="text/css" media="screen, projection" />
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueprint/print.css" type="text/css" media="print" />
    	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->

        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

        <title><?php bloginfo('name'); ?></title>

        <?php wp_enqueue_script( 'jquery' ); ?>

        <?php wp_head(); ?>

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

         <script type="text/JavaScript" src="<?php bloginfo('template_directory'); ?>/js/ict4d.js"></script>


	<script type="text/JavaScript">
		// Array filled with image URLs to preload them
		var preLoadImgsUrls = new Array("https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif",
										"<?php bloginfo('template_directory'); ?>/images/slideshow_homepage/slideshow1.png", // Slideshow
										"<?php bloginfo('template_directory'); ?>/images/slideshow_homepage/slideshow2.png",
										"<?php bloginfo('template_directory'); ?>/images/slideshow_homepage/slideshow3.png",
										"<?php bloginfo('template_directory'); ?>/images/social/rssfeed_color.png", // Social links
										"<?php bloginfo('template_directory'); ?>/images/social/xing_color.png",
										"<?php bloginfo('template_directory'); ?>/images/social/twitter_color.png",
										"<?php bloginfo('template_directory'); ?>/images/social/youtube_color.png",
										"<?php bloginfo('template_directory'); ?>/images/social/facebook_color.png",
										"<?php bloginfo('template_directory'); ?>/images/social/in_color.png",
										"<?php bloginfo('template_directory'); ?>/images/social/flickr_color.png",
										"<?php bloginfo('template_directory'); ?>/images/partner/adc_color.png", // Sidebar
										"<?php bloginfo('template_directory'); ?>/images/partner/fossfa_color.png",
										"<?php bloginfo('template_directory'); ?>/images/partner/mewe_color.png",
										"<?php bloginfo('template_directory'); ?>/images/partner/silver_color.png",
										"<?php bloginfo('template_directory'); ?>/images/partner/edev_color.png",
										"<?php bloginfo('template_directory'); ?>/images/partner/olp_color.png",
										"<?php bloginfo('template_directory'); ?>/images/partner/tu_color.png",
										"<?php bloginfo('template_directory'); ?>/images/partner/footer_rise.png", // footer
										"<?php bloginfo('template_directory'); ?>/images/partner/footer_world4you.png");

		for(var i=0; i < preLoadImgsUrls.length; i++) {
			tmp = new Image();
			tmp.src = preLoadImgsUrls[i]; //Preload Image
		}
    </script>

    </head>

    <body>

    <div id="wrapper">

        <div id="header">
        	<?php include("header_social.php"); ?>

        	<?php include("header_menu.php"); ?>


        </div><!-- header -->

        <?php include("header_donate.php"); ?>
