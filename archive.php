<?php get_header(); ?>
    <div class="front-page">
        <h1>Архив на страниците</h1>
        <img src="https://images.unsplash.com/photo-1505925119181-3537e71dbc72?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="img-fluid" alt="Responsive image">
    </div>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>
