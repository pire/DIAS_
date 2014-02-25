<?php get_header(); ?>

<?php
if ( is_page( 'contact') ) {
  get_template_part('content', 'map');
}
?>

<div class="container">
  <?php if ( !have_posts() ) : ?>
    <p>Sorry, this page does not exist.</p>
  <?php endif; ?>

  <?php
  while ( have_posts() ):
    the_post();
  ?>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>