<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
        
        <script src="js/components.js"></script>
        
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button">
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                        The PiLons
                    </a>
                </div>
                <nav id="main-site-nav" class="navbar-collapse collapse">
                    <?php
                        wp_nav_menu(array(
                            'menu'       => 'header-menu',
                            'container'  => false,
                            'menu_class' => 'nav navbar-nav'
                        ));
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <label class="search" for="search-bar">
                            <input id="search-bar" type="text" />
                        </label>
                        <i class="fa fa-search"></i>                        
                    </ul>
                </nav>
            </div>
        </header>