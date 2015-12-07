<?php
/**
 * Template Name: Stories
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
			<div class="row-fluid gear_yellow">
				<div class="col-sm-12">
					<h1><?php echo($the_title);?></h1>
				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	

<?php if( have_rows('nef_news_or_event_group') ){ 
		while ( have_rows('nef_news_or_event_group') ) : the_row();

		$nef_headline = get_sub_field('nef_headline');
		$nef_subhead = get_sub_field('nef_subhead');
		$nef_short_body_copy_paragraph = get_sub_field('nef_short_body_copy_paragraph');
		$nef_read_more_link_external = get_sub_field('nef_read_more_link_external');
		$read_more_link_internal = get_sub_field('read_more_link_internal');
		$nef_youtube_id = get_sub_field('nef_youtube_id');

		$nef_date = "";
		if(get_sub_field('nef_date')){
			$nef_date = DateTime::createFromFormat('Ymd', get_sub_field('nef_date'));
			$nef_date =$nef_date->format(' - M d, yy');
		}

		$read_more_link = "";

		//check to see if there should be a link *****
		//if external link 
		if($nef_read_more_link_external){
			$read_more_link = $read_more_link .'<a href="'.$nef_read_more_link_external.'" target="_blank">Read More</a>';
		}

		//if internal link 
		if($read_more_link_internal){

			$read_more_link = $read_more_link .'<a href="'.$read_more_link_internal.'">Read More</a>';
		}
?>		
			<!--start of row ****************************************** -->	
			<div class="row-fluid">
				<div class="col-sm-10 col-sm-offset-1">
					
					<div class="med_content_block story">
						<div class="icon"></div>
						<h2><?php echo($nef_headline);?></h2>
						<h3><?php echo($nef_subhead ); ?> <?php echo $nef_date; ?></h3>
						<?php echo($nef_short_body_copy_paragraph );?>
<?php if($nef_youtube_id){?>
						<div class='embed-container'>
						<iframe src='http://www.youtube.com/embed/<?php echo($nef_youtube_id)?>' frameborder='0' allowfullscreen>
						</iframe>
					</div><!--end of embed-container ***** -->
<?php
}?>						
						<?php echo($read_more_link);?>
					</div>

				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	
	<?php endwhile; // end of the loop. ?>	
<?php } ?>	


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


</div><!--end of container-fluid ****** -->	



<?php endwhile; // end of the loop. ?>	
<?php get_footer(); ?>
