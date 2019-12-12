<?php get_header(); ?>
    <div class="menu-items">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Закуска</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1564636242997-77953084df48?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Обяд</p>
           </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1496412705862-e0088f16f791?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Вечеря</p>
           </div>
        </div>
    </div>
</div>

    <div class="single-page">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <h1>Меню
          <div class="content"><?php the_content(); ?></div>
        <?php endwhile; endif; ?></h1>
      
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="secondary" class="widget-area" role="complementary">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>   
    <?php endif; ?>   
    </div>    

<?php get_footer(); ?>
