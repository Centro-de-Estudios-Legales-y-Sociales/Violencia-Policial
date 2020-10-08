<!DOCTYPE html >
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-app="genApp" autoscroll="true">
    <div class="red-nav-container d-none">
        <nav class="navbar navbar-default navbar-fixed-top position-fixed w-100">
            <div class="navbar-header d-flex justify-content-between w-100">
                <div>
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <p class="m-0 pr-2 pt-1 navbar-title" style="font-size: 25px"><?php echo bloginfo('name') ?></p>
                        <p class="medium-font m-0" style="padding-top: 3px"><?php echo bloginfo('description') ?></p>
                    </a>
                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar d-flex m-1"></span>
                    <span class="icon-bar middle-bar d-flex m-1"></span>
                    <span class="icon-bar bottom-bar d-flex m-1"></span>
                </button>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'menu-2', 'menu_class' => 'nav navbar-nav', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'bs-example-navbar-collapse-1')); ?>
        </nav>

    </div>
    <section class="header d-flex flex-column flex-md-row justify-content-between" style="background-image:  url(<?php echo get_theme_mod('imagen_header') ?>);">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        $logo = $image[0];
        ?>
        <img src="<?php echo $logo ?>" alt="Logo CELS" class="logo-img img-fluid mobile ml-2 d-block d-md-none" />
        <div class="description desc-desktop d-none d-md-block w-50 vh-100">
            <div class="p-3" style="margin: 0 50px">
                <img src="<?php echo $logo ?>" alt="Logo CELS" class="logo-img img-fluid" />
                <h1 class="title bold-font"><?php echo get_theme_mod('text_h_1', 'violencia <br/>policial') ?></h1>
                <p class="reg-font mt-3"><?php echo get_theme_mod('text_h_2', '  Violencia policial es una plataforma que reúne datos actualizados sobre lesiones y
                muertes producidas por
                las fuerzas de seguridad argentinas para contribuir a monitorear sus intervenciones y orientar políticas
                de seguridad
                desde una perspectiva de derechos humanos.') ?></p>
                <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_class' => 'content-list medium-font', 'container' => 'ol')); ?>
                <div class="redes">
                    <ul class="d-flex flex-row p-0 position-absolute">
                        <li><a href="<?php echo get_theme_mod('facebook', 'https://www.facebook.com/CELS.Argentina/') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.png" class="img-fluid" alt="Facebook logo" /></a></li>
                        <li><a href="<?php echo get_theme_mod('instagram', 'https://www.instagram.com/cels_argentina/') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram.png" class="img-fluid" alt="Instagram logo" /></a></li>
                        <li><a href="<?php echo get_theme_mod('videos', 'https://www.youtube.com/user/CELSAUDIOVISUAL') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/videos.png" class="img-fluid" alt="Videos logo" /></a></li>
                        <li><a href="<?php echo get_theme_mod('twitter', 'https://twitter.com/CELS_Argentina') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png" class="img-fluid" alt="Twitter logo" /></a></li>
                        <!-- <li class="search-item">
                        <input type="search" class="search-box" />
                        <span class="search-button">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/search.png" class="img-fluid" id="search-icon" alt="Search icon" />
                        </span>
                    </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="arrow w-50 d-none d-md-block">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/arrow.png" alt="" class="img-fluid" />
        </div>
        <div class="epigrafe d-none d-md-block">
            <small>Mauricio Centurión</small>
        </div>
        <div class="redes d-block d-md-none">
            <ul class="d-flex flex-row p-0">
                <li><a href="<?php echo get_theme_mod('facebook', 'https://www.facebook.com/CELS.Argentina/') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.png" class="img-fluid" alt="Facebook logo" /></a></li>
                <li><a href="<?php echo get_theme_mod('instagram', 'https://www.instagram.com/cels_argentina/') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram.png" class="img-fluid" alt="Instagram logo" /></a></li>
                <li><a href="<?php echo get_theme_mod('videos', 'https://www.youtube.com/user/CELSAUDIOVISUAL') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/videos.png" class="img-fluid" alt="Videos logo" /></a></li>
                <li><a href="<?php echo get_theme_mod('twitter', 'https://twitter.com/CELS_Argentina') ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png" class="img-fluid" alt="Twitter logo" /></a></li>
            </ul>
        </div>
    </section>
    <div class="container epigrafe d-block d-md-none">
        <small><b><?php echo get_theme_mod('epigrafe', 'Mauricio Centurión') ?></b></small>
    </div>