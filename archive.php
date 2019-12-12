<?php
/* 
 ** Template name: Blog
 */
?>
<?php get_header(); ?>
    <div class="front-page">
        
        <img src="https://images.unsplash.com/photo-1505925119181-3537e71dbc72?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="Responsive image">
    </div>
<h1>Постове</h1>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
 			<div class="content-posts"><?php the_content(); ?></div>
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
