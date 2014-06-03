<?php get_header( 'front-page' ); ?>
<div class="jumbotron front">
  <div class="container">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <p><?php bloginfo( 'description' ); ?></p>
  </div>
</div>
<div class="container entry">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
    <h1>Oops!</h1>
    <p>
      There is no content to display
    </p>
  <?php endif; ?>
  <div class="row">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4">

    </div>
  </div>
</div>
<section class="img">

</section>

<?php get_footer(); ?>
