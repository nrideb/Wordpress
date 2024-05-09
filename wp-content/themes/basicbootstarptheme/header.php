<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php echo bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo bloginfo('title') ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
            <a class="navbar-brand" href="<?php echo home_url('/') ?>">
                <?php
                if(has_custom_logo()){
                    the_custom_logo();
                }else{
                    echo bloginfo("title");
                }
                
                ?>
            </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                    </ul> -->
                
                    <?php
                            wp_nav_menu(
                                array(
                                    "theme_location"=>"theme_primary_menu",
                                    "container"=>false,
                                    "menu_class"=>"navbar-nav ms-auto mb-2 mb-lg-0",
                                    // "items_warp"=>'<ul class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>'
                                )
                            )
            
                    ?>
                      <?php if (class_exists("WooCommerce")) :  ?>

<?php if (is_user_logged_in()) : ?>

    <a class="btn btn-primary" href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")) ?>">My Account</a>


    <a class="btn btn-danger" style="margin-left: 10px;" href="<?php echo wp_logout_url(get_permalink(get_option("woocommerce_myaccount_page_id"))) ?>">Logout</a>

<?php else : ?>

    <a class="btn btn-primary" href="<?php echo get_permalink(get_option("woocommece_myaccount_page_id")); ?>">Login/Register</a>

<?php endif; ?>

<a style="margin-left: 10px;" href="<?php echo wc_get_cart_url(); ?>" class="btn btn-primary">
    Cart (<span class="items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>)
</a>

<?php endif; ?>

<!-- <ul class="navbar-nav ml-auto">
<li class="nav-item active">
    <a class="nav-link" href="#">Home
        <span class="sr-only">(current)</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">About</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Services</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
</li>
</ul> -->
</div>
</div>
</nav>