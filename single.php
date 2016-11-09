<?php get_header(); ?>
<main>
    <div class="container">
        <div class="row">
            <?php if(have_posts()): while(have_posts()) : the_post(); ?>
                <section class="blog-post">
                    <header class="blog-post-header">
                        <div class="blog-post-title"><?php the_title(); ?></div>
                        <div class="blog-post-metadata">
                            By: <?php the_author(); ?>
                            under <a href="<?php get_category_link(the_ID()); ?>"><?php $c = get_the_category(); echo $c[0]->name; ?></a>
                            on: <?php echo the_date(); ?>
                        </div>
                    </header>
                    <article class="blog-post-content">
                        <?php /*<img src="<?php echo the_post_thumbnail_url(); ?>" />*/ ?>
                        <?php the_content(); ?>
                    </article>
                </section>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>
<style>
    main {
    
        background: linear-gradient(#0D1F2D 31%, #dedede 0%);
        min-height: 700px;
        margin-bottom: 0;
    }   
</style>
<?php get_footer(); ?>