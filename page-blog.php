<?php
/* 
 ** Template name: Blog
 */
?>
<?php get_header(); ?>
    <div class="front-page">
        <img src="https://images.unsplash.com/photo-1526233185109-093c40faef34?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
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
