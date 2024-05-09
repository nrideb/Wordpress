<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
    <meta charset="<?php echo bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <section class="site-logo">Logo</section>
        <section class="site-menus">
            <?php
                wp_nav_menu(
                    array(
                        "theme_location"=>"theme_primary_menu"
                    )
                )
            
            ?>
            <!-- <nav>
                <a href="#">Home</a>
                <a href="#">About us</a>
                <a href="#">Product</a>
                <a href="#">Contact us</a>
            </nav> -->
        </section>
    </header>