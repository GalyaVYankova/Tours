<?php
/* 
 ** Template name: Post
 */
?>
<?php get_header(); ?>
        <div class="front-page">
            <h1>Разкажи за своята Ваканция</h1>
        </div>

        <div class="single-page">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <h1>Предстои да видите
          <div class="content"><?php the_content(); ?></div>
        <?php endwhile; endif; ?></h1>
      
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>   
    <?php endif; ?>   
    </div>   


        
<?php get_footer(); ?>