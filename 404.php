<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package magic_arms
 */

get_header(); ?>

<div class="container-fluid">
    <!--start of row ****************************************** --> 
      <div class="row-fluid gear_yellow">
        <div class="col-sm-12">
          <h1>Page Not Found</h1>
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 

      <!--start of row ****************************************** --> 
      <div class="row-fluid standard_padding">
        <div class="col-sm-8 col-sm-offset-2">

        <section class="error-404 not-found">
          <header class="page-header">
            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'magic_arms' ); ?></h1>
          </header><!-- .page-header -->

          <div class="page-content">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'magic_arms' ); ?></p>

            <?php get_search_form(); ?>

          </div><!-- .page-content -->
        </section><!-- .error-404 -->
        </div><!--end of column *** --> 
        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** --> 
</div><!--end of container-fluid ****** --> 

<?php get_footer(); ?>
