<?php
/* 
 ** Template name: Posts
 */
?>
<?php get_header(); ?>
        <div class="front-page">
            <h1>Разкажи за своята Ваканция</h1>
        </div>

        <div class="single-post">
        <div class="post">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="content"><?php the_content(); ?></div>
            <?php endwhile; endif; ?>
        </div>

        <div class="single-page">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>   
        </div>
        </div>
        <?php endif; ?>


        
<?php get_footer(); ?>