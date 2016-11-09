<?php get_header(); ?>
<main>
    <div class="container">
        <div class="row blog-posts">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="blog-tile col-xs-12">
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="blog-tile-metadata">
                            <span class="meta-catergory"><?php $c = get_the_category(); echo $c[0]->name; ?></span>
                            <span class="meta-date"><?php the_date(); ?></span>
                            <span class="meta-title"><?php the_title(); ?></span>
                        </div>
                        <div class="blog-tile-pic" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);"></div>
                    </a>
                </div>
            <?php endwhile; else: ?>
                <div>No more posts found!</div>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>