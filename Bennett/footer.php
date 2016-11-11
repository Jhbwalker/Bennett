<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Swenson
 * @since Swenson 1.0
 *
 */

// Prevent loading this file directly
if ( ! defined( 'ABSPATH' ) ) { exit; }
global $gorilla, $ev_is_show_search_icon;
?>

<?php do_action( 'ev_before_footer' ); ?>

  </div>
</div>

<?php if(!is_page_template( 'page-templates/blank-page.php' ) && !is_404()) : ?>
<?php

  global $ev_footer_top;

  $ev_is_footer = ev_footer_controller::$ev_is_footer;
  $ev_footer_column_class = ev_footer_controller::$ev_footer_column_class;
  $ev_footer_column_number = ev_footer_controller::$ev_footer_column_number;

  $class= ' ' . $gorilla['val_footer_area_style'];

?>

<?php if($ev_is_footer){

  $ev_val_footer_behaviour = $gorilla['val_footer_behaviour'];

?>
<div id="custom-footer" class="container-fluid">
	<div class="container">
		<div class="col-xs-12">
			<div id="footer-socials">
				<a href="https://www.facebook.com/BPUnlimited"><i class="fa fa-facebook" aria-hidden="trsue"></i></a>
				<a href="https://www.instagram.com/bennett_unlimited_pr/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://twitter.com/kellybpu"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="https://plus.google.com/+KellyBennettBPUnlimited"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<!--<a href="https://www.youtube.com/user/TheKellybpu#g/u"><i class="fa fa-youtube" aria-hidden="true"></i></a>-->
				<!--<i class="fa fa-pinterest" aria-hidden="true"></i>-->
				<!--<i class="fa fa-yelp" aria-hidden="true"></i>-->
			</div>
			<p id="copytxt">Copyright 2016. All Rights Reserved.</p>
		</div>
	</div>
</div>
<footer class="<?php echo esc_attr($ev_val_footer_behaviour); ?>">

  <div class="custom-footer">
     <div class="wpb_row">
		<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('custom_footer_area')){ ?>
		<?php } ?>
    </div>
  </div>

  <?php if($ev_footer_top): ?>

    <div class="footer-top<?php echo esc_attr($class); ?>">


      <div class="container wpb_row">

          <div class="column <?php echo esc_attr($ev_footer_column_class); ?>">
            <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('footer_column_1')){ ?>
            <?php } else { ?>
              <div class="widget">
                <h2 class="widget-title">Widget Area 1</h2>
                <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
              </div>
            <?php } ?>
          </div>


          <?php if ($ev_footer_column_number >= 2) { ?>
          <div class="column <?php echo esc_attr($ev_footer_column_class); ?>">
            <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('footer_column_2')){ ?>
            <?php } else { ?>
              <div class="widget">
                <h2 class="widget-title">Widget Area 2</h2>
                <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
              </div>
            <?php } ?>
          </div>
          <?php }; ?>

          <div class="clear-both"></div>

          <?php if ($ev_footer_column_number >= 3) { ?>
          <div class="column <?php echo esc_attr($ev_footer_column_class); ?>">
            <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('footer_column_3')){ ?>
            <?php } else { ?>
              <div class="widget">
                <h2 class="widget-title">Widget Area 3</h2>
                <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
              </div>
            <?php } ?>
          </div>
          <?php }; ?>


          <?php if ($ev_footer_column_number >= 4) { ?>
          <div class="column <?php echo esc_attr($ev_footer_column_class); ?>">
            <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('footer_column_4')){ ?>
            <?php } else { ?>
              <div class="widget">
                <h2 class="widget-title">Widget Area 4</h2>
                <p class="no-widget-added"><a href="<?php echo admin_url('widgets.php'); ?>">Click here to assign a widget to this area.</a></p>
              </div>
            <?php } ?>
          </div>
          <?php }; ?>

      </div>
    </div>
<?php endif; ?>

<?php
  $ev_is_footer_bottom_full_width = $gorilla['is_footer_bottom_full_width'];
  $ev_is_footer_bottom_class = $ev_is_footer_bottom_full_width ? " full" : "";
  $ev_class_center_footer_bottom = $gorilla['is_center_footer_bottom'] ? ' centered': '';

    $ev_val_footer_bottom_area = $gorilla['val_footer_bottom_area'];

      $ev_class_bottom= ' ' . $gorilla['val_footer_bottom_area_style'] . $ev_is_footer_bottom_class . $ev_class_center_footer_bottom;
      ?>

      <div class="footer-bottom<?php echo esc_attr($ev_class_bottom); ?>">
        <div class="container">
          <div class="container-inner clearfix">
          <p class="copyright">
          <?php if (!empty($ev_val_footer_bottom_area)) {
              echo $ev_val_footer_bottom_area;
          }?>
          </p>

          <?php
          // Social Icons
          $ev_is_show_footer_social_icons = $gorilla['is_show_footer_social_icons'];
          $ev_val_footer_social_icons = "";
          if(isset($gorilla['val_footer_social_icons'])){
            $ev_val_footer_social_icons = $gorilla['val_footer_social_icons'];
          }


            if ($ev_is_show_footer_social_icons) {  ?>
            <div class="social-icons-area">
            <?php
              if($ev_val_footer_social_icons){ ?>
                 <ul class="social-icons clearfix">
              <?php
                   foreach ($ev_val_footer_social_icons as $ev_selectedOption) {
                      if($ev_selectedOption == "google+"){
                        $ev_selectedOptionIcon = 'google-plus';
                      }
                      elseif($ev_selectedOption == "vimeo"){
                        $ev_selectedOptionIcon = "vimeo-square";
                      }
                      else {
                        $ev_selectedOptionIcon = $ev_selectedOption;
                      }

                      if (empty($gorilla['val_'. $ev_selectedOption])) {
                        $gorilla['val_'. $ev_selectedOption] = "#";
                      }
                      echo '<li><a href="'. esc_url($gorilla['val_'. $ev_selectedOptionIcon]) .'"  title="'. esc_attr($ev_selectedOption) .'" class="qtipel" target="_blank" data-tip-position="top center" data-tip-cursor-position="bottom center"><span class="fa fa-'. esc_attr($ev_selectedOptionIcon).'"></span></a></li>';
                  }
                ?>
                </ul>
          <?php } ?>
            </div>
        <?php  } ?>
          </div>
        </div>
      </div>

</footer>

<?php } ?>

<?php endif; ?>

</div>
</div>

<?php if ($ev_is_show_search_icon == "1") { ?>
<div class="search-area layer">
    <form class="search-area-form" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
      <fieldset>
        <legend><?php _e("Search Anything",EV_THEME_NAME); ?></legend>
        <div class="input-wrapper">
          <input class="search-input" name="s" placeholder="<?php _e("Type here and hit enter",EV_THEME_NAME); ?>" autocomplete="off" type="text">
          <button type="submit"></button>
        </div>
      </fieldset>
    </form>
    <a class="close" href="#"><span class="fa fa-times"></span></a>
</div>
<?php } ?>

<?php if ($gorilla['is_back_to_top']) { ?><a class="goto-top" href="#"><span class="fa fa-chevron-up"></span></a> <?php } ?>

<?php
if(isset($gorilla['val_custom_js'])){
  $ev_val_customJS = trim($gorilla['val_custom_js']);
}
if (!empty($ev_val_customJS)) { ?><script type="text/javascript"><?php echo $ev_val_customJS; ?></script><?php } ?>

<?php if (!empty($gorilla['val_tracking_code'])) {
  echo html_entity_decode($gorilla['val_tracking_code']);
} ?>

<?php wp_footer(); ?>

</body>
<style>
/* 	CLIENTS PAGE */
.image-container div.after{
	left:3.3%;
}
.image-container div.after_ml{
	left:19.8%;
}
.image-container div.after_mr{
	left:-19.9%;
}
.image-container div.after_rt{
	left:-3.5%;
}
/* clients page for big screens */
@media screen and (min-width:1300px){
	.image-container div.after{
	left:7.3%;
}
.image-container div.after_ml{
	left:22.6%;
}
.image-container div.after_mr{
	left:-22.5%;
}
.image-container div.after_rt{
	left:-7.5%;
}
}
</style>
</html>