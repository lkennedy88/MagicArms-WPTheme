<?php
/**
 * Template Name: Resourcesb
 * Lori
 * @package Stone Arch
 */
$template_directory = get_bloginfo('template_directory');
get_header(); 
while ( have_posts() ) : the_post(); 

$the_title = get_the_title();

?>

<div class="container-fluid">

      <!--start of row ****************************************** --> 
      <div class="row-fluid gear_yellow">
        <div class="col-sm-12">
          <h1><?php echo($the_title);?></h1>
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 


      <!--start of row ****************************************** --> 
      <div class="row-fluid row-centered">
        <div class="col-sm-12">
          <h2 style="text-align:center;">Support Groups</h2>
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
<?php


if( have_rows('rs_support_groups') ){ 
    while ( have_rows('rs_support_groups') ) : the_row();
    $rs_type_of_condition = get_sub_field('rs_type_of_condition');
    $rs_support_group_name = get_sub_field('rs_support_group_name');
    $rs_support_group_description = get_sub_field('rs_support_group_description');
    $rs_support_group_website = get_sub_field('rs_support_group_website');
    

    $read_more_link = "";

    //check to see if there should be a link *****
    //if external link 
    if($rs_support_group_website){
      $read_more_link = $read_more_link .'<a href="'. $rs_support_group_website.'" target="_blank">Learn More</a>';
    }
   

       
?>            
        <div class="col-sm-6 col-centered">
          <div class="leadership_bio">
          <div class="med_content_block story">
         <div class="icon"></div> 
  
            
          <h3><b><?php echo($rs_type_of_condition);?></b></h3> 
          <h3><?php echo($rs_support_group_name );?></h3> 
           <h4><?php echo($rs_support_group_description);?></h4> 
          <h3><?php echo($read_more_link);?></h3> 
 

    </div>       

 

                          
            <?php if($rs_support_groups){ 
?>
               
<?php
            }?>
          </div><!--end of support_groups *** --> 
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




<!--start of row ****************************************** --> 
 <div class="row-fluid row-centered">
        <div class="col-sm-12">
    <h2 style="text-align:center;">Medical Blogs</h2>
  </div><!--end of column *** --> 
  <div class="clear"></div><!--end of clear *** -->
<?php
if( have_rows('rm_medical_blogs') ){ 
    while ( have_rows('rm_medical_blogs') ) : the_row();

    $rm_medical_blog_name = get_sub_field('rm_medical_blog_name');
    $rm_medical_blog_description = get_sub_field('rm_medical_blog_description');
    $rm_medical_blog_website = get_sub_field('rm_medical_blog_website');
 
 $read_more_link = "";

    //check to see if there should be a link *****
    //if external link 
    if($rm_medical_blog_website){
      $read_more_link = $read_more_link .'<a href="'. $rm_medical_blog_website.'" target="_blank">Learn More</a>';
    }


?>         
          <div class="col-sm- 6 col-centered">
          <div class="leadership_bio">
          <div class="med_content_block story">
         <div class="icon"></div> 
  
        
            <h3><b><?php echo($rm_medical_blog_name);?></b></h3>
            <h4><?php echo($rm_medical_blog_description);?></h4>
           <h3><?php echo($read_more_link);?></h3> 
 
          </div><!--end of medical_blog *** --> 
        </div><!--end of column *** --> 
<?php 
  
  endwhile; // end of the loop. ?>      
<?php } ?>          
  <div class="clear"></div><!--end of clear *** -->
</div>
<!--end of row ****************************************** --> 



</div><!--end of container-fluid ****** --> 



<?php endwhile; // end of the loop. ?>  
<?php get_footer(); ?>
