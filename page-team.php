<?php
/**
 * Template Name: Team
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


			<!--start of row ****************************************** -->	
			<div class="row-fluid">
				<div class="col-sm-12">
					<h2 style="text-align:center;">Leadership</h2>
				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
<?php
$bios_added_count = 0;

if( have_rows('lb_leader_bio') ){ 
		while ( have_rows('lb_leader_bio') ) : the_row();

		$lb_bio_picture = get_sub_field('lb_bio_picture');
		$lb_bio_picture_path = $lb_bio_picture[url];
		$lb_bio_picture_alt = $lb_bio_picture[alt];
		$lb_bio_user_first_and_last_name = get_sub_field('lb_bio_user_first_and_last_name');
		$lb_position = get_sub_field('lb_position');
		$lb_quote = get_sub_field('lb_quote');
		$lb_bio_content = get_sub_field('lb_bio_content');
		$lb_email = get_sub_field('lb_email');


?>						
				<div class="col-sm-8 col-sm-offset-2">
					<div class="leadership_bio">
						<img src="<?php echo($lb_bio_picture_path);?>" alt="<?php echo($lb_bio_picture_alt);?>"/>
						<h3><?php echo($lb_bio_user_first_and_last_name);?></h3>
						<h4><?php echo($lb_position);?></h4>
						<blockquote>&ldquo;<?php echo($lb_quote);?>&rdquo;</blockquote>
						<?php echo($lb_bio_content );?>
						<?php if($lb_email){
?>
							<a class="email_icon" href="mailto:<?php echo($lb_email);?>"></a>
<?php
						}?>
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




<!--start of row ****************************************** -->	
<div class="row-fluid advisory_board">
	<div class="col-sm-12">
		<h2 style="text-align:center;">Advisory Board</h2>
	</div><!--end of column *** -->	
	<div class="clear"></div><!--end of clear *** -->
<?php
if( have_rows('ab_advisory_board_member') ){ 
		while ( have_rows('ab_advisory_board_member') ) : the_row();

		$ab_member_name = get_sub_field('ab_member_name');
		$ab_member_title = get_sub_field('ab_member_title');


?>						
				<div class="col-sm-6 col-sm-offset-3">
					<div class="advisory_bio">
						<h3><?php echo($ab_member_name);?></h3>
						<h4><?php echo($ab_member_title);?></h4>
					</div><!--end of leadership_bio *** -->	
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
