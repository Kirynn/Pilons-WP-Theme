<?php /*
Template Name: Team Members Page
*/ ?>

<?php get_header(); ?>
<main>
    <div class="container sp">
        <div class="row">
            <aside class="col-xs-12 col-md-10 row">
                <article class="post-content">
                    <?php if(have_posts()): while(have_posts()): the_post(); the_content(); endwhile; endif; ?>
                </article>
                <article class="reapeater-field row" id="team-members">
                    <?php
                        $members = get_post_meta($post -> ID, 'team-members', true);
                        //$i = 0;
                        foreach(array_chunk($members, 3) as $member) {
                    ?>
                        <div class="row col-xs-12">
                            <?php foreach($member as $m) {?>
                                <?php if ($m['alumni'] != 'True'): ?>
                                    <div class="card">
                                        <div class="member-picture" style="background-image:url('<?php echo wp_get_attachment_image_url($m['member-picture']); ?>');"></div>
                                        <div class="member-name"><?php echo $m['member-name']; ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php } ?>
                        </div>
                    <?php
                        }
                    ?>
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
    </div>
</main>
<?php get_footer(); ?>