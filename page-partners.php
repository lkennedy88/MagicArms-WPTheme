<?php
/**
 * Template Name: Partners
 *
 * @package Stone Arch
 */
$template_directory = get_bloginfo('template_directory');
$the_title = get_the_title();
get_header(); ?>

<div class="container-fluid">

      <!--start of row ****************************************** --> 
      <div class="row-fluid gear_orange">
        <div class="col-sm-12">
          <h1><?php echo($the_title);?></h1>
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 
  
<?php if( have_rows('sc_side_circle_callout') ){ 
    while ( have_rows('sc_side_circle_callout') ) : the_row();

    $sc_headline = get_sub_field('sc_headline');
    $sc_body_copy = get_sub_field('sc_body_copy');
    $sc_image = get_sub_field('sc_image');
    $sc_image_path = $sc_image[url];
    $sc_image_alt = $sc_image[alt];
?>    
      <!--start of row ****************************************** --> 
      <div class="row-fluid standard_padding side_circle_callout">
        <div class="col-lg-4 col-lg-offset-1">
          <img src="<?php echo($sc_image_path);?>" alt="<?php echo($sc_image_alt);?>"/>
        </div><!--end of column *** --> 

        <div class="col-lg-6">
          <h2><?php echo($sc_headline);?></h2>
          <?php echo($sc_body_copy);?>
        </div><!--end of column *** --> 

        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** -->
  
  <?php endwhile; // end of the loop. ?>      
<?php }   
?>

      <!--start of row ****************************************** --> 
      <div class="row-fluid standard_padding gear_aqua">
        <div class="col-sm-12">
            <h2>Our Partners</h2>

            <div class="row-fluid">
<?php if( have_rows('pl_partner_logo') ){ 
    while ( have_rows('pl_partner_logo') ) : the_row();
    
    $pl_client_site_link = get_sub_field('pl_client_site_link');
    $pl_logo_image = get_sub_field('pl_logo_image');
    $pl_logo_image_path = $pl_logo_image[url];
    $pl_logo_image_alt = $pl_logo_image[alt];

    
?>      
        <div style="width:16.66%; float:left;"> 
<?php
  if($pl_client_site_link){
?>
  <a href="<?php echo($pl_client_site_link);?>" target="_blank">
<?php   
  }
?>        
          <img src="<?php echo($pl_logo_image_path);?>" alt="<?php echo($pl_logo_image_alt);?>"/>
<?php
  if($pl_client_site_link){
?>
  </a>
<?php   
  }
?>            
        </div><!--end of nested column *** -->
  <?php endwhile; // end of the loop. ?>      
<?php }   
?>        
    </div><!--end of nested row *** --> 

  

        </div><!--end of column *** --> 

        <div class="clear"></div><!--end of clear *** -->
      </div><!--end of row ****** --> 
      <!--end of row ****************************************** -->
</div><!--end of container-fluid ****** --> 

<?php get_footer(); ?>
