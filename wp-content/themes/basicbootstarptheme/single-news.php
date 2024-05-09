<?php
get_header();
the_post();
$thumbnail_url = get_the_post_thumbnail_url();
?>
<div class="card">
        <h2><?php the_title() ?></h2>
        <h5><?php echo get_the_date() ?></h5>
        <h5><?php the_author(); ?></h5>
        <!-- <div class="fakeimg" style="height:200px;"> -->
        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="Image" >
       
        
        <p><?php  the_content() ?></p>
        <!-- <div><?php //comment_form() ?></div> -->
        <div><?php comments_template()?></div>
      <!-- </div> -->
        
      
      </div>


<?php
get_footer();
?>