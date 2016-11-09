<?php get_header(); ?>
<main>
    <div class="container sp">
        <div class="row">
            <article class="col-xs-12 col-md-10">
                <?php if(have_posts()): while(have_posts()): the_post(); the_content(); endwhile; endif; ?>
            </article>
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>