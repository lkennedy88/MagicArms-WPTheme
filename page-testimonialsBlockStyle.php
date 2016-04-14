<?php
/**
 * Template Name: testimonialsBlockStyle
 *
 * @package Stone Arch
 */
$template_directory = get_bloginfo('template_directory');
get_header(); 
while ( have_posts() ) : the_post(); 

$the_title = get_the_title();

?>

<div class="container-fluid">

      <!--start of row ****************************************** --> 
      <div class="row-fluid gear_orange">
        <div class="col-sm-12">
          <h1><?php echo($the_title);?></h1>
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 
     
<?php
$bios_added_count = 0;

if( have_rows('t_testimonials') ){ 
    while ( have_rows('t_testimonials') ) : the_row();


    $t_testimonials_image = get_sub_field('t_testimonials_image');
    $lb_bio_picture_path = $t_testimonials_image[url];
    $lb_bio_picture_alt = $t_testimonials_image[alt];
     $t_testimonials_quote = get_sub_field('t_testimonials_quote');
     

?>            
           <div class="col-sm-6 col-centered">
          <div class="leadership_bio">
          <div class="med_content_block story">
         <div class="icon"></div> 
  
          <img src="<?php echo($lb_bio_picture_path);?>" alt="<?php echo($lb_bio_picture_alt);?>"/>
           <h3><?php echo($t_testimonials_quote);?></h3>
             
          
          </div><!--end of leadership_bio *** --> 
        </div><!--end of column *** --> 
<?php 
  if($bios_added_count == 1){
    $bios_added_count = 0;
?>
    <div class="clear"></div><!--end of clear *** -->
<?php   

  }//end of if
  else{
    $bios_added_count = $bios_added_count+1;
  } 
  endwhile; // end of the loop. ?>      
<?php } ?>          
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 



</div><!--end of container-fluid ****** --> 



<?php endwhile; // end of the loop. ?>  
<?php get_footer(); ?>
