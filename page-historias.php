<?php 
/* Template Name: Historias */
get_header();
?>
<section class="historias mt-5">
        <div class="container mt-4">
            <div>
                <a href="/#historias" target="_self" type="button" class="btn btn-sm d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/left-arrow.png" class="left-arrow pr-2"/>
                    <p class="m-0 mb-1">volver</p>
                </a>
            </div>
            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'cels' );
            endif;
            ?>
        </div>
    </section>
<?php get_footer() ?>