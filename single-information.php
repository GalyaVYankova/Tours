<?php get_header(); ?>
    <div class="menu-items">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1489517456831-3994100a43bd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Времето</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1543465695-d5657dd2ee16?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Традиции</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1496950866446-3253e1470e8e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Носете си</p>
           </div>
        </div>
      </div>
</div>

    <div class="single-page">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <div class="content"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
      
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>   
    <?php endif; ?>   
    </div>  

<?php get_footer(); ?>
