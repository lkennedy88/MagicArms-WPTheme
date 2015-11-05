<?php
/**
 * Template Name:  News and Events
 *
 * @package Stone Arch
 */
$template_directory = get_bloginfo('template_directory');
get_header(); 
while ( have_posts() ) : the_post(); 

$the_title =get_the_title();

?>

<div class="container-fluid">

			<!--start of row ****************************************** -->	
			<div class="row-fluid gear_aqua">
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
		$nef_type = get_sub_field('nef_type');
		$nef_read_more_link_external = get_sub_field('nef_read_more_link_external');
		$read_more_link_internal = get_sub_field('read_more_link_internal');

		$nef_date = "";
		if(get_sub_field('nef_date')){
			$nef_date = DateTime::createFromFormat('Ymd', get_sub_field('nef_date'));
			$nef_date =$nef_date->format(' - M d, Y');
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
					
					<div class="med_content_block <?php echo($nef_type );?>">
						<div class="icon"></div>
						<h2><?php echo($nef_headline);?></h2>
						<h3><?php echo($nef_subhead ); ?> <?php echo $nef_date; ?></h3>
						<?php echo($nef_short_body_copy_paragraph );?>
						<?php echo($read_more_link);?>
					</div>

				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	
	<?php endwhile; // end of the loop. ?>	
<?php } ?>	

</div><!--end of container-fluid ****** -->	



<?php endwhile; // end of the loop. ?>	
<?php get_footer(); ?>
