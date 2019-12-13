<?php
/* 
 ** Template name: Blog
 */
?>
<?php get_header(); ?>
    <div class="front-page">
        <img src="https://images.unsplash.com/photo-1526233185109-093c40faef34?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
    </div>
    <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'container_class' => 'custom-menu-class',
                )
            )
        ?>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <div class="content"><?php the_content(); ?></div>
        <?php endwhile; endif; ?>
<?php get_footer(); ?>
