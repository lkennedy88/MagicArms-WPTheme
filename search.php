<?php
/**
 * The template for displaying search results pages.
 *
 * @package magic_arms
 */

get_header(); ?>

<div class="container-fluid">

			<!--start of row ****************************************** -->	
			<div class="row-fluid gear_yellow">
				<div class="col-sm-12">

		<?php if ( have_posts() ) : ?>


				<h1><?php printf( __( 'Search Results for: %s', 'magic_arms' ), '<span>' . get_search_query() . '</span>' ); ?></h1>


				</div><!--end of column *** -->	
				<div class="clear"></div><!--end of clear *** -->
			</div><!--end of row *** -->		
			<!--end of row ****************************************** -->


			
			<!--start of row ****************************************** -->	
			<div class="row-fluid">	
				<div class="col-sm-10 col-sm-offset-1">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

			</div><!--end of column *** -->	
			<div class="clear"></div><!--end of clear *** -->
		</div>
		<!--end of row ****************************************** -->
</div><!--end of container-fluid ****** -->	

<?php get_footer(); ?>
