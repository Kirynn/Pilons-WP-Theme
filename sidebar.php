<?php
    if(is_page('About')):
        wp_nav_menu(array (
            'menu'          => 'about-sidebar',
            'container'     => 'aside',
            'menu_class'    => 'col-md-2 sidebar'   
        ));
    endif;
?>