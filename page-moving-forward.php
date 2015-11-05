<?php
/**
 * Template Name: Moving Forward
 *
 * @package Stone Arch
 */
$template_directory = get_bloginfo('template_directory');
$the_title = get_the_title();
get_header(); ?>

<div class="container-fluid">

			<!--start of row ****************************************** -->	
			<div class="row-fluid gear_aqua">
				<div class="col-sm-12">
					<h1><?php echo($the_title);?></h1>
				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	
	
<?php 
$interval_marker = 0;

if( have_rows('sc_side_circle_callout') ){ 
		while ( have_rows('sc_side_circle_callout') ) : the_row();

		$sc_headline = get_sub_field('sc_headline');
		$sc_body_copy = get_sub_field('sc_body_copy');
		$sc_image = get_sub_field('sc_image');
		$sc_image_path = $sc_image[url];
		$sc_image_alt = $sc_image[alt];

		$grey_class = "";

		if($interval_marker == 1){
			$grey_class = "grey";
			$interval_marker = 0;
		}
		else{
			$interval_marker = $interval_marker +1;
		}
?>		
			<!--start of row ****************************************** -->	
			<div class="row-fluid standard_padding <?php echo($grey_class);?> side_circle_callout">
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
	
	<?php 
	
	endwhile; // end of the loop. ?>			
<?php } ?>	

<!--start of row ****************************************** -->	
<div class="row-fluid">
	<div class="col-sm-12">
		<img src="<?php echo($template_directory ); ?>/assets/img/move_forward_image.jpg"/>
	</div><!--end of column *** -->	

	<div class="clear"></div><!--end of clear *** -->
</div>
<!--end of row ****************************************** -->
<?php
$qc_quote_text = get_field('qc_quote_text');
$qc_quote_author = get_field('qc_quote_author');
$qc_quote_author_title = get_field('qc_quote_author_title');
?>

<!--start of row ****************************************** -->	
<div class="row-fluid standard_padding gear">
	<div class="col-sm-8 col-sm-offset-2">
			<blockquote>
				“<?php echo($qc_quote_text);?>”
				<cite>-<?php echo($qc_quote_author);?>, <i><?php echo($qc_quote_author_title);?></i></cite>
			</blockquote>
	</div><!--end of column *** -->	

	<div class="clear"></div><!--end of clear *** -->
</div><!--end of row ****** -->	
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
						<iframe src='http://www.youtube.com/embed/<?php echo($vc_youtube_id)?>' frameborder='0' allowfullscreen>
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
