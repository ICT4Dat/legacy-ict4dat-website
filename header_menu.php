<a href="<?php echo get_home_url(); ?>" id="header_menu_logo"><img src="<?php bloginfo('template_directory'); ?>/images/header_logo.png" width="400" height="38" alt="logo"/></a>

<?php wp_nav_menu( array('menu' => 'MainMenu_Header', 'menu_class' => 'main_menu menu' )); ?>