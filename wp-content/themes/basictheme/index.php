<?php get_header(); ?>
<div id="content-area">
    <section class="site-slider">Slider</section>
    <section class="new-arrivals">New arrivals</section>
    <section class="latest-products">Latest products</section>
    <section class="vendor-list">Vendor list</section>
    <section class="left-sidebar">
    <?php
                wp_nav_menu(
                    array(
                        "theme_location"=>"theme_sidebar_menu"
                    )
                )
            
            ?>
    </section>
</div>
<?php  get_footer();?>