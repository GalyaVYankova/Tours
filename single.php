<?php
/* 
 ** Template name: Post
 */
?>
<?php get_header(); ?>
        <div class="front-page">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
            <?php endwhile; endif; ?>
        </div>
        </div>

        <div class="post-thumbnail">
        <?php if(has_post_thumbnail()) :?>        
            <img src="<?php the_post_thumbnail_url(null, 'smallest');?>">
        <?php endif; ?>
        </div>

        <div class="single-page">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <div class="content"><?php the_content(); ?></div>
        <?php endwhile; endif; ?>
      
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>   
    <?php endif; ?>   
    </div>   


        
<?php get_footer(); ?>