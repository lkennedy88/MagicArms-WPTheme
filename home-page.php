<?php
/**
 * Template Name:  Homepage Template
 *
 * @package Stone Arch
 */
$template_directory = get_bloginfo('template_directory');
get_header(); ?>

<div class="container-fluid ">

      <!--start of row ****************************************** --> 
      <div class="row-fluid homepage_banner">
        <div class="col-sm-12">
          
          <div class="homepage_banner_image_holder">
            <div class="headline_play_video">
              <h1>Helping kids be kids</h1>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#videoModal">Play Video <span class="glyphicon glyphicon-play-circle headline_play_icon"></span></button>
            </div>
          </div>
          
          <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <script>
                      jQuery("#videoModal .close, #videoModal .btn").live("click", function() {
                        jQuery("#videoModal iframe").attr("src", jQuery("#videoModal iframe").attr("src"));
                      });
                    </script>
                  </button>
                  <h4 class="modal-title" id="videoModalLabel">Give Kids Magic Arms</h4>
                </div>
                <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-FC4vH8ho7U" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
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


$wws_headline = get_field('wws_headline');
$wws_subheadline = get_field('wws_subheadline');
$wws_copy = get_field('wws_copy');

?>
<!--start of row ****************************************** --> 
      <div class="row-fluid standard_padding gear_aqua">
        <div class="col-lg-8 col-lg-offset-2">
          <h2><?php echo($wws_headline);?></h2>
          <h4><?php echo($wws_subheadline);?></h4>
          <?php echo($wws_copy);?>
        </div><!--end of column *** --> 

        <div class="clear"></div><!--end of clear *** -->
      </div>
<!--end of row ****************************************** --> 

<?php
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


      <!--start of row ****************************************** --> 
      <div class="row-fluid">
        <div class="col-sm-12">
          <img src="<?php echo($template_directory ); ?>/assets/img/image_bar.jpg"/>
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


      <!--start of row ****************************************** --> 
      <div class="row-fluid">
        <div class="col-sm-4 col-sm-offset-1">
          <div class="news_callout">
            <h2>News + Events</h2>
            <ul class="cta_list">

<?php 
$news_events_page_id = 41;
$news_event_added_count = 0;
if( have_rows('nef_news_or_event_group', $news_events_page_id) ){ 
    while ( have_rows('nef_news_or_event_group',$news_events_page_id) && $news_event_added_count < 4) : the_row();

    $nef_headline = get_sub_field('nef_headline');
    $nef_subhead = get_sub_field('nef_subhead');
    $nef_read_more_link_external = get_sub_field('nef_read_more_link_external');
    $read_more_link_internal = get_sub_field('read_more_link_internal');

    $nef_date = "";
    if(get_sub_field('nef_date')){
      $nef_date = DateTime::createFromFormat('Ymd', get_sub_field('nef_date'));
      $nef_date =$nef_date->format('M d, Y');
    }

    $read_more_link_start = "";
    $read_more_link_end = "";
    
    //check to see if there should be a link *****
    //if external link 
    if($nef_read_more_link_external){
      $read_more_link_start = '<a href="'.$nef_read_more_link_external.'" target="_blank">';
      $read_more_link_end = "</a>";
    }

    //if internal link 
    if($read_more_link_internal){
      $read_more_link_start = '<a href="'.$read_more_link_internal.'" target="_blank">';
      $read_more_link_end = "</a>";
    }
    

?>                  
              <li><?php echo($read_more_link_start);?><b><?php echo($nef_headline);?> • <?php echo($nef_subhead);?></b>  • <?php echo($nef_date);?><?php echo($read_more_link_end);?></li>
  <?php 
    $news_event_added_count = $news_event_added_count +1;
    endwhile; // end of the loop. ?>  
<?php } ?>

            </ul>
          </div><!--end of news_callout **** -->    
        </div><!--end of column *** --> 

        <div class="col-sm-6 news_image">
          <img src="<?php echo($template_directory ); ?>/assets/img/news_cta_image.jpg"/>
        </div><!--end of column *** --> 

        <div class="clear"></div><!--end of clear *** -->
      </div><!--end of row ****** --> 
      <!--end of row ****************************************** -->

      

</div><!--end of container-fluid ****** -->         





<?php get_footer(); ?>
