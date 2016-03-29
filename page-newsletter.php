<?php
/**
 * Template Name: Newsletter
 *
 * @package Stone Arch
 */
$template_directory = get_bloginfo('template_directory');
get_header(); 
?>

<?php 

$args = array (
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' => 'newsletter',
  'posts_per_page' => 1,
  'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
  'order' => 'DSC',
  'orderby' => 'date',
);

$newsletter_query = new WP_Query($args);

if ($newsletter_query->have_posts()):
  while ( $newsletter_query->have_posts() ) : $newsletter_query->the_post(); 

$the_title = get_the_title();
$body_copy = get_the_content();


?>

<div class="container-fluid">
      <!--start of row ****************************************** --> 
      <div class="row-fluid gear_aqua">
        <div class="col-sm-12">
          <h1><?php echo($the_title)?></h1>
          
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 

      <!--start of row ****************************************** --> 
      <div class="row-fluid">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="content_wrapper">
            <?php echo($body_copy );?>
          </div><!--end of content_wrapper *** -->
          
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 
</div><!--end of container-fluid ****** --> 
<?php endwhile; // end of the loop. ?>
<?php endif; // end of if statement. ?>

<?php get_footer(); ?>
