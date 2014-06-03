<?php get_header(); ?>

<div class="container entry">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_excerpt(); ?>
  <?php endwhile; else : ?>
    <h1>Oops!</h1>
    <p>
      There is no content to display
    </p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
