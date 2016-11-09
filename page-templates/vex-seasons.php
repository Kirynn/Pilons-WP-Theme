<?php /*
Template Name: Past Vex Seasons
*/ ?>
<?php get_header(); ?>
<main>
    <section class="container sp">
        <div class="row">
            <aside class="col-xs-12 col-md-10 row">
                <article class="reapeater-field row" id="vex-seasons">
                    <ul>
                        <?php
                            $seasons = get_post_meta($post -> ID, 'vex-seasons', true);
                            foreach($seasons as $season) {
                        ?>
                            <li></li>
                        <?php
                            }
                        ?>
                    </ul>
                </article>
            </aside>
            <?php
                wp_nav_menu(array (
                'menu'          => 'about-sidebar',
                'container'     => 'aside',
                'menu_class'    => 'col-md-2 sidebar'   
                ));
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>