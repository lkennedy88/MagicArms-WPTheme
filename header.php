<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package magic_arms
 */
$template_directory = get_bloginfo('template_directory');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63170692-1', 'auto');
  ga('send', 'pageview');

</script>

  <!--fonts **************************************************** --> 
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,300italic' rel='stylesheet' type='text/css'>

  <!-- CSS **************************************************** --> 
  <link rel="stylesheet" href="<?php echo($template_directory ); ?>/assets/third_party/reset.css"> <!--reset -->
  <link rel="stylesheet" href="<?php echo($template_directory ); ?>/assets/third_party/bootstrap/css/bootstrap.css"> <!--bootstrap -->
  <link rel="stylesheet" href="<?php echo($template_directory ); ?>/style.css"> 

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--google analytics tracking info ************* -->


</head>

<body <?php body_class(); ?>>

  <header id="masthead" class="site-header" role="banner">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="col-sm-12">
          
<div id="main_nav_open_btn"></div>
<div id="main_nav_holder" > 
      <div class="content_holder">
        <div class="contents" role="navigation">
          <div id="main_nav_close_btn"></div>
          
          <a href="<?php echo home_url( '/' ); ?>" class="logo">
            <img src="<?php echo($template_directory ); ?>/assets/img/logo.png"/>
          </a>


            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main_nav' ) ); ?>
          

          <div class="clear"></div><!-- ********** clear both ********** -->

        </div><!--end of contents ******** -->
      </div><!--end of content_holder ******** -->  
</div><!-- end of main_nav_holder ******** -->  
          
          <a href="<?php echo home_url( '/' ); ?>" class="logo_mobile">
            <img src="<?php echo($template_directory ); ?>/assets/img/logo.png"/>
          </a>

          <div class="clear"></div><!--end of clear *** -->
        </div><!--end of column *** --> 

      </div><!--end of row ****** --> 
    </div><!--end of container-fluid ****** --> 
  </header><!-- #masthead -->
