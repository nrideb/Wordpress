<?php
    // Template Name:news page
?>
<?php 

get_header();
the_post();
$paged=get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$search_data=(isset($_GET['search']))?$_GET['search']:'';

?>

<h1>News</h1>

<div class="search-container">
    <form method="get">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><?php echo apply_filters("change_text","Submit") ?></button>
    </form>
  </div>
<a href="<?php echo site_url("add-news") ?>">Add news</a>

<?php
$wparr=array(
    "post_type"=>"news",
);
$wpbquery = new WP_Query($wparr);
while($wpbquery->have_posts()){
    $wpbquery ->the_post();
 
    
    // Get the post's featured image
    $thumbnail_url = get_the_post_thumbnail_url();
    // $post_id = 90;

    ?>
  

        <h2> <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h2>


  
    <?php
  }
  ?>



  <?php get_footer(); ?>
