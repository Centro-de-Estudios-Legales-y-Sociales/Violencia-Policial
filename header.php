<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> ng-app="genApp" autoscroll="true">
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