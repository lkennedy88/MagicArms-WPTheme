<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package magic_arms
 */
$template_directory = get_bloginfo('template_directory');
?>

  <footer id="colophon" class="site-footer" role="contentinfo">
      <!--start of row ****************************************** --> 
      <div class="row-fluid standard_padding grey">
        <div class="col-sm-4">
            <h3>Contact Information</h3>
            <p>Email: <a href="mailto:info@magicarms.org">info@magicarms.org</a><br/><br/>
            Angie Conley: 612.483.6100<br/>
            8560 Cottonwood St NW, #100<br/>
            Minneapolis, MN 55433</p>
        </div><!--end of column *** --> 

        <div class="col-sm-4">
          <h3>Keep in touch</h3>
          <a class="social facebook" href="https://www.facebook.com/pages/Magic-Arms-for-the-World/616804565080190" target="_blank"><span class="screen_reader_only">Facebook</span></a>
          <a class="social twitter" href="https://twitter.com/magicarmsus" target="_blank"><span class="screen_reader_only">Twitter</span></a>
        </div><!--end of column *** --> 

        <div class="col-sm-4 last">
          <h3>Newsletter</h3>
          

          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="//magicarms.us10.list-manage.com/subscribe/post?u=d55f3091bb38fc241cd69ea6a&amp;id=88fc96a101" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
            <p>Sign up for our newsletter</p>
          <div class="mc-field-group">
            <input type="email" value="" placeholder="Enter Address" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
            <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_d55f3091bb38fc241cd69ea6a_88fc96a101" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
          </form>
          </div>
          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->
        </div><!--end of column *** --> 

        <div class="clear"></div><!--end of clear *** -->
      </div>
      <!--end of row ****************************************** -->
  </footer><!-- #colophon -->


<!--pull in javascript *********** -->
  <script type="text/javascript" src="<?php echo($template_directory); ?>/assets/third_party/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="<?php echo($template_directory); ?>/assets/third_party/rotation/jquery-css-transform.js"></script>
  <script type="text/javascript" src="<?php echo($template_directory); ?>/assets/third_party/rotation/jquery-animate-css-rotate-scale.js"></script>
  <script type="text/javascript" src="<?php echo($template_directory); ?>/assets/third_party/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php echo($template_directory); ?>/assets/third_party/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo($template_directory); ?>/assets/js/main.js"></script>
  
  
  <script type='text/javascript' src='<?php echo($template_directory ); ?>/assets/third_party/modernizr.custom.61563.js'></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60673174-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>
</html>
