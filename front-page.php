<?php get_header(); ?>

  <p>This is the front-page.php</p>

<?php
if ( have_posts() ) :
  while ( have_posts() ):
    the_post();
?>
    <h3><?php the_title(); ?></h3>

    <p><?php the_content(); ?></p>

    <hr>

<?php
  endwhile;
else:
?>
  <p>There are no posts or pages here.</p>

<?php endif; ?>

<?php get_footer(); ?>