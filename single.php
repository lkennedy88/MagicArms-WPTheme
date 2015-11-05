<?php
/**
 * The template for displaying all single posts.
 *
 * @package magic_arms
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); 
	
if(in_category( 'event_base_free(event_base)') || in_category( 'press') || in_category( 'pov') || in_category( 'news') || in_category( 'stories')){

	$class_tag = "";
	$section_header = "";

	if(in_category( 'event')){
		$class_tag = "event";
		$section_header = "Event"; 
	}
	else if(in_category( 'press')){
		$class_tag = "press";
		$section_header = "Press Release"; 
	}
	else if(in_category( 'pov')){
		$class_tag = "pov";
		$section_header = "POV"; 
	}
	else if(in_category( 'news')){
		$class_tag = "news";
		$section_header = "News"; 
	}
	else if(in_category( 'stories')){
		$class_tag = "stories";
		$section_header = "Story"; 
	}

	$headline = get_the_title();
	$body_copy = get_the_content();
	$pov_author = get_field('pov_author');
	$pnef_subhead = get_field('pnef_subhead');
	$pnef_read_more_link_external = get_field('pnef_read_more_link_external');

	$read_more_link = "";
	//check to see if there should be a link *****
	//if external link 
	if($pnef_read_more_link_external){
		$read_more_link = $read_more_link .'<a href="'.$pnef_read_more_link_external.'" target="_blank">Read Story</a>';
	}
?>
			<!--start of row ****************************************** -->	
			<div class="row-fluid gear_yellow">
				<div class="col-sm-12">
					<h1><?php echo($section_header);?></h1>
				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	
			<!--start of row ****************************************** -->	
			<div class="row-fluid standard_padding">
				<div class="col-sm-10 col-sm-offset-1">
					
					<div class="med_content_block <?php echo($class_tag );?>">
						<div class="icon"></div>
						<h2><?php echo($headline);?></h2>
						<h3><?php echo($pnef_subhead ); ?> <?php echo $nef_date; ?></h3>
						<?php echo($body_copy );?>
						<?php echo($read_more_link);?>
					</div>

				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	

<?php 
	}//end of if
	else {
		//all other catagories		
		$headline = get_the_title();
		$body_copy = get_the_content();
	?>
		<!--start of row ****************************************** -->	
			<div class="row-fluid standard_padding">
				<div class="col-sm-10 col-sm-offset-1">
					
					<div class="med_content_block ">
						<div class="icon"></div>
						<h2><?php echo($headline); ?></h2>
						<?php echo($body_copy );?>
					</div>

				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	
	<?php }//end of else ?>		
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
