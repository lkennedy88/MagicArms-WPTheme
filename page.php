<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package magic_arms
 */
$template_directory = get_bloginfo('template_directory');
get_header(); 

while ( have_posts() ) : the_post(); 

$the_title = get_the_title();


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
						<?php the_content();?>
					</div><!--end of content_wrapper *** -->
					
				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div>
			<!--end of row ****************************************** -->	
</div><!--end of container-fluid ****** -->	
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
