<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="header">
    <div class="container">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <?php bloginfo('name'); ?>
        </a>

        <nav class="nav">
            <?php
                wp_nav_menu([
                    'theme_location' => 'header_menu',
                    'container'      => false,
                    'menu_class'     => 'menu',
                    'fallback_cb'    => false,
                ]);
            ?>
        </nav>

    </div>
</header>