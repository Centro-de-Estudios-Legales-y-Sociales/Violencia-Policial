<?php get_header()?>

<section class="caso mt-5">
        <div class="container">
            <div class="caso-btn d-flex justify-content-between my-2 pt-2">
                <div>
                    <a href="/#historias" target="_self" type="button" class="btn btn-sm d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/left-arrow.png" class="special-left-arrow pr-2"/>
                        <p class="m-0 mb-1">volver</p>
                    </a>
                </div>
                <div>
                    <a href="/historias" type="button" class="btn btn-sm d-flex align-items-center">
                        <p class="m-0 mb-1">ver más historias</p>
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/right-arrow.png" class="right-arrow pl-2"/>
                    </a>
                </div>
            </div>
            <?php while ( have_posts() ) : the_post();?>
            <!-- contenido -->
            <div class="victima d-block d-md-none">
                <?php if(!get_field('imagen_alternativa', false,false)):?>
                <img src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="img-fluid w-100" />
                <?php else: ?>
                    <img src="<?php echo get_field('imagen_alternativa')?>" alt="<?php the_title()?>" class="img-fluid w-100" />    
                <?php endif;?>    
            </div>
            <div class="contenido d-block d-md-none">
                <?php if(!get_field('titulo_alternativo')):?>
                    <h2 class="bold-font"><?php the_title()?></h2>
                <?php else: ?>
                    <h2 class="bold-font"><?php echo get_field('titulo_alternativo')?></h2>
                <?php endif;?>
                <p class="info light-font"><?php the_content()?></p>
            </div>
            <div class="contenido-desktop d-none d-md-block">
                <div class="d-flex flex-column bold-font align-items-top mb-3">
                <?php if(!get_field('titulo_alternativo')):?>
                    <h2 class="mr-4"><?php the_title()?></h2>
                <?php else: ?>
                    <h2 class="mr-4"><?php echo get_field('titulo_alternativo')?></h2>
                <?php endif;?>
                    <div class="d-flex">
                        <span class="mt-2 mr-2"><?php echo get_field('fecha', get_the_ID())?></span>
                        <span class="mt-2">
                            <?php
                                $terms = get_the_terms( $post->ID , 'lugares' );
                                if($terms) {
                                    foreach ( $terms as $term ) {
                                        echo $term->name;
                                      }
                                }
                            ?>
                        </span>
                    </div>
                </div>
                <div class="foto-historia">
                <?php if(!get_field('imagen_alternativa', false,false)):?>
                    <img src="<?php echo get_the_post_thumbnail_url()?>" style="shape-outside: url('<?php echo get_the_post_thumbnail_url()?>')"
                        alt="<?php the_title()?>" class="img-fluid text-form mr-5 mb-3" />
                        <?php else: ?>
                            <img src="<?php echo get_field('imagen_alternativa')?>" style="shape-outside: url('<?php echo get_the_post_thumbnail_url()?>')"
                        alt="<?php the_title()?>" class="img-fluid text-form mr-5 mb-3" />
                <?php endif;?>
                    <?php the_content()?>
                </div>
            </div>
            <!-- contenido -->
            
            <div class="caso-btn d-flex justify-content-between my-2 pt-2">
            <?php 
                echo get_the_post_navigation( array(
                    'next_text' => '<div><span type="button" class="btn btn-sm d-flex align-items-center"><p class="m-0 mb-1">siguiente</p><img src="'.get_template_directory_uri().'/assets/img/right-arrow.png" class="right-arrow pl-2"/></span></div>',
                    'prev_text' => '<div><span type="button" class="btn btn-sm d-flex align-items-center"><p class="m-0 mb-1"> <img src="'.get_template_directory_uri().'/assets/img/right-arrow.png" class="left-arrow pr-2"/> anterior</p></span></div>',
                ) );
            ?>
            </div>
            <?php endwhile;
        ?>
        </div>
    </section>

<?php get_footer()?>