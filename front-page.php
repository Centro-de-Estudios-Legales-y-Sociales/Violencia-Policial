<?php 
/* Template Name: Home */
get_header('home') ?>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'cels' );
endif;
?>
<?php get_footer()?>