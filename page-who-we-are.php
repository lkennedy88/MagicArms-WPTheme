<?php
/**
 * Template Name: Who we are
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
?>		
			<!--start of row ****************************************** -->	
			<div class="row-fluid standard_padding side_circle_callout">
				<div class="col-lg-4 col-lg-offset-1">
					<img src="<?php echo($sc_image_path);?>"/>
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


		$tc_circle_one_copy = get_field('tc_circle_one_copy');
		$tc_circle_two_copy = get_field('tc_circle_two_copy');
		$tc_circle_three_copy = get_field('tc_circle_three_copy');
?>		
			<!--start of row ****************************************** -->	
			<div class="row-fluid standard_padding gear_grey">
				<div class="col-sm-4">
					<div class="drawn_circle_bkg">
						<?php echo($tc_circle_one_copy ); ?>
					</div><!--end of drawn_circle_bkg *** -->
				</div><!--end of column *** -->	

				<div class="col-sm-4">
					<div class="drawn_circle_bkg">
						<?php echo($tc_circle_two_copy ); ?>
					</div><!--end of drawn_circle_bkg *** -->
				</div><!--end of column *** -->	

				<div class="col-sm-4">
					<div class="drawn_circle_bkg">
						<?php echo($tc_circle_three_copy ); ?>
					</div><!--end of drawn_circle_bkg *** -->
				</div><!--end of column *** -->	

				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->
<?php
	$vc_youtube_id = get_field('vc_youtube_id');
	$vc_headline = get_field('vc_headline');
	$vc_body_copy = get_field('vc_body_copy');
?>


			<!--start of row ****************************************** -->	
			<div class="row-fluid standard_padding video">
				<div class="col-sm-8 col-sm-offset-2">
					<div class='embed-container'>
						<iframe src='https://www.youtube.com/embed/<?php echo($vc_youtube_id)?>' frameborder='0' allowfullscreen>
						</iframe>
					</div><!--end of embed-container ***** -->
					<h2><?php echo($vc_headline);?></h2>					
					<?php echo($vc_body_copy);?>
					<div class="clear"></div><!--end of clear *** -->
				</div><!--end of column *** -->		
			</div>
			<!--end of row ****************************************** -->
</div><!--end of container-fluid ****** -->	

<?php get_footer(); ?>
