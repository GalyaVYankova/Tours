<?php get_header(); ?>
    <div class="menu-items">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1560157368-946d9c8f7cb6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Кайро</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1474022650697-7624c32312fa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Хургада</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="https://images.unsplash.com/photo-1561830608-3bac329162ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
          <div class="card-body">
            <p class="card-text">Луксор</p>
           </div>
        </div>
      </div>
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
