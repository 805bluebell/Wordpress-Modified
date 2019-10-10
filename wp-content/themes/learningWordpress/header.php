<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset=" <?php bloginfo('charset') ?>">
        <title><? bloginfo('name'); ?> </title>
        <?php wp_head(); ?>
    </head>

<body> <?php body_class(); ?>

    <div class='container'>

    <!-- site header -->
    <header class="site-header">
        <nav class="site-nav">
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu( $args); ?>
        </nav>
    </header>