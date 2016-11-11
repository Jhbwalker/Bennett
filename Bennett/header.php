<?php
/*
 * @package WordPress
 * @subpackage Swenson
 * @since Swenson 1.0
 */

// Prevent loading this file directly
if ( ! defined( 'ABSPATH' ) ) { exit; }
global $gorilla;
global $ev_is_ipad;
global $ev_is_iphone;
global $ev_is_mobile;
global $ev_is_tablet;
global $ev_one_page_open;
global $ev_header_overlapping_option;
global $woocommerce;

if (!empty($gorilla['val_site_name'])) {
  $ev_wptitle = $gorilla['val_site_name'];
}
else {
  $ev_wptitle = get_bloginfo('name');
};

$ev_is_responsive = $gorilla['is_responsive_layout'];

if(!$ev_is_responsive){
  $ev_responsive_class = 'no-responsive ';
}
else {
  $ev_responsive_class = 'responsive ';
}

$ev_one_page_nav = get_post_meta( get_the_ID(), 'ev_one_page_nav', true );


$ev_mobile_class = "";

if($ev_is_mobile){
  $ev_mobile_class = "mobile-device ";
}
else {
  $ev_mobile_class = "no-mobile-device ";
}

$gorilla_OS_type = "";
$user_agent = getenv("HTTP_USER_AGENT");

if(strpos($user_agent, "Mac") !== FALSE){
  $gorilla_OS_type = "Mac";
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="<?php echo esc_attr($ev_responsive_class).esc_attr($ev_mobile_class); ?>no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="<?php echo esc_attr($ev_responsive_class).esc_attr($ev_mobile_class); ?>no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="<?php echo esc_attr($ev_responsive_class).esc_attr($ev_mobile_class); ?>no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="<?php echo esc_attr($ev_responsive_class).esc_attr($ev_mobile_class); ?>no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="<?php echo esc_attr($ev_responsive_class).esc_attr($ev_mobile_class); ?>no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title(); ?></title>

<?php if (!empty($gorilla['val_favicon_url']['url'])) : ?>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url($gorilla['val_favicon_url']['url']); ?>">
<?php endif;?>
<link type="text/plain" rel="author" href="http://www.angrygorilla.us/humans.txt" />

<?php if ($gorilla['is_responsive_layout']) : ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<?php endif;?>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php echo esc_attr($ev_wptitle); ?>">
<meta name="format-detection" content="telephone=no" />
<?php if (!empty($gorilla['val_apple_touch_icon_url']['url'])) : ?>
<link rel="apple-touch-icon" sizes="128x128" href="<?php echo esc_url($gorilla['val_apple_touch_icon_url']['url']) ?>">
<link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php echo esc_url($gorilla['val_apple_touch_icon_url']['url']) ?>">
<link rel="apple-touch-startup-image" href="<?php echo esc_url($gorilla['val_apple_touch_icon_url']['url']) ?>">
<?php endif;?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<?php

  $ev_is_sticky_nav_on = $gorilla['is_sticky_nav_on'];

?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php

$ev_is_enable_loading = $gorilla['is_enable_loading'];

if($ev_is_enable_loading){

  $ev_loading_type =  $gorilla["loading_type"];
  $ev_loading_closing = $gorilla["loading_closing"];

?>
<div class="qLOverlay-back <?php echo esc_attr($ev_loading_closing); ?>"></div>
 <?php if($ev_loading_closing == "tunnel-vision"){ ?>
   <div id="loader" class="pageload-overlay" data-opening="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 -25.6875 C 70.750092 -25.6875 95.6875 -0.7500919 95.6875 30 C 95.6875 60.750092 70.750092 85.6875 40 85.6875 C 9.2499078 85.6875 -15.6875 60.750092 -15.6875 30 C -15.6875 -0.7500919 9.2499078 -25.6875 40 -25.6875 Z">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="xMidYMid slice">
      <path d="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 29.96875 C 40.01804 29.96875 40.03125 29.98196 40.03125 30 C 40.03125 30.01804 40.01804 30.03125 40 30.03125 C 39.98196 30.03125 39.96875 30.01804 39.96875 30 C 39.96875 29.98196 39.98196 29.96875 40 29.96875 Z"/>
    </svg>
  </div>
  <?php } elseif ($ev_loading_closing == "origami") { ?>

  <div id="loader" class="pageload-overlay" data-opening="m -10,-10 0,80 100,0 0,-80 z M 40,-40.5 120,30 40,100 -40,30 z">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none" >
      <path d="m -10,-10 0,80 100,0 0,-80 z m 50,-30.5 0,70.5 0,70 0,-70 z"/>
    </svg>
  </div>
  <?php }

  if($ev_loading_type == "qloader-type"){

    $loading_color = $gorilla["loading_color"];
    $loading_bg_color = $gorilla["loading_bg_color"];
    $loading_line_thick = $gorilla["loading_line_tickness"];
    $loading_show_percent = $gorilla["is_enable_loading_percentage"];

  ?>

  <div class="qLOverlay-clone <?php echo esc_attr($ev_loading_closing); ?>" data-color="<?php echo esc_attr($loading_color); ?>" data-bg-color="<?php echo esc_attr($loading_bg_color); ?>" data-line-thick="<?php echo esc_attr($loading_line_thick); ?>" data-show-percent="<?php echo esc_attr($loading_show_percent); ?>"></div>

<?php }

  else if($ev_loading_type == "icon-type"){

    $loading_icon_type_icons = $gorilla["loading_icon_type_icons"];

?>
  <div class="qLOverlay-clone <?php echo esc_attr($ev_loading_closing); ?>"></div>
  <div class="qLOverlay <?php echo esc_attr($ev_loading_closing); ?>">

    <div class="spinner <?php echo esc_attr($loading_icon_type_icons); ?>">

    <?php if($loading_icon_type_icons == "rotating-plane"){ ?>
      <div class="rotateplane"></div>
    <?php }
    else if($loading_icon_type_icons == "double-bounce"){ ?>
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    <?php }
    else if($loading_icon_type_icons == "wave"){ ?>
      <div class="wave-rect rect1"></div>
      <div class="wave-rect rect2"></div>
      <div class="wave-rect rect3"></div>
      <div class="wave-rect rect4"></div>
      <div class="wave-rect rect5"></div>
    <?php }
    else if($loading_icon_type_icons == "wandering-cubes"){ ?>
      <div class="cube1"></div>
      <div class="cube2"></div>
    <?php }
    else if($loading_icon_type_icons == "pulse"){ ?>
      <div class="pulse-circle"></div>
    <?php }
    else if($loading_icon_type_icons == "chasing-dots"){ ?>
      <div class="chase-dot1"></div>
      <div class="chase-dot2"></div>
    <?php }
    else if($loading_icon_type_icons == "three-bounce"){ ?>
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    <?php }
    else if($loading_icon_type_icons == "cube-grid"){ ?>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
      <div class="cube-grid-item"></div>
    <?php } ?>

    </div>
  </div>

<?php }

  else if($ev_loading_type == "custom-image-type"){
    $ev_custom_loading_image = $ev_custom_loading_retina_image = "";
    $ev_custom_loading_image = wp_get_attachment_image($gorilla["val_loading_custom_image"]["id"],"full");
    $ev_custom_loading_retina_image = wp_get_attachment_image($gorilla["val_loading_retina_custom_image"]["id"],"full");

  ?>

    <div class="qLOverlay-clone <?php echo esc_attr($ev_loading_closing); ?>"></div>
    <div class="qLOverlay <?php echo esc_attr($ev_loading_closing); ?>">

      <div class="spinner custom-image">
        <?php if($ev_is_mobile && !empty($ev_custom_loading_retina_image)){ echo $ev_custom_loading_retina_image; }
              else { echo $ev_custom_loading_image; }
        ?>
      </div>
    </div>

  <?php }

} ?>

<div id="wrapper">
  <div id="wrapper-inner">
  <?php if(!is_page_template( 'page-templates/blank-page.php' ) && !is_404()) : ?>
  <?php

  global $ev_is_header_on, $ev_val_header_preset, $ev_is_show_search_icon;

  $ev_val_header_preset=$gorilla['val_header_preset'];

  $ev_is_header_main_on = $gorilla['is_header_main_on'];
  $ev_is_header_top_on = $gorilla['is_header_top_on'];
  $ev_is_show_social_icons_at_header = $gorilla['is_show_social_icons_at_header'];
  $ev_val_show_social_icons_position = $gorilla['val_show_social_icons_position'];
  $ev_is_show_contact_info = $gorilla['is_show_contact_info'];
  $ev_val_show_social_icons_position = $gorilla['val_show_social_icons_position'];
  $ev_val_show_contact_info_position = $gorilla['val_show_contact_info_position'];
  $ev_is_show_search_icon = $gorilla['is_show_search_icon'];
  $ev_is_show_chart_icon = "";
  if(isset($gorilla['is_show_chart_icon'])){
    $ev_is_show_chart_icon = $gorilla['is_show_chart_icon'];
  }

  global $ev_header_overlapping;
  $ev_is_header_full_width = $gorilla['is_header_full_width'];
  $ev_is_header_bottom_class = $ev_is_header_full_width ? " full" : "";

  if($ev_val_header_preset == "vertical-header"){
	$ev_is_header_main_on = true;
  }

  ?>

    <header id="main-header" class="site-header <?php echo esc_attr($ev_val_header_preset).esc_attr($ev_is_header_bottom_class); ?>">

     <?php
     if ($ev_is_header_top_on && $ev_is_header_on) { ?>

      <?php
            $class = ' ' . $gorilla['val_header_top_area_style'];
			if($gorilla['is_center_header_top']){
				$class .= ' centered';
			}
        ?>
          <div class="header-bar<?php echo esc_attr($class); ?>">
            <div class="container wpb_row clearfix">
              <div class="vc_col-sm-12">

              <?php

                // Positioning the elmenents of header top area

              if($ev_is_show_social_icons_at_header) {
                  if($ev_val_show_social_icons_position == '1') {
                    $ev_social_icons_pos = "floatLeft";
                  }
                  else {
                     $ev_social_icons_pos = "floatRight";
                  }

              }

               if($ev_is_show_contact_info) {
                  if($ev_val_show_contact_info_position == '1') {
                     $ev_contact_info_pos = "floatLeft";
                  }
                  else {
                      $ev_contact_info_pos = "floatRight";
                  }
                }

                $ev_is_show_phone = $gorilla['is_show_phone'];
                $ev_is_show_address = $gorilla['is_show_address'];
                $ev_is_show_email = $gorilla['is_show_email'];
                $ev_val_phone_number = $gorilla['val_phone_number'];
                $ev_val_address_text = $gorilla['val_address_text'];
                $ev_val_email = $gorilla['val_email'];
                $ev_val_free_header_html = $gorilla['val_free_header_html'];

              ?>

              <?php
              if ( defined('ICL_SITEPRESS_VERSION') ):
                 ev_language_flags();
              endif;
              ?>


              <?php if ($ev_is_show_contact_info) { ?>
              <div class="info-area <?php echo esc_attr($ev_contact_info_pos); ?>">
                <div class="info-area-inner">
                  <?php if($ev_is_show_phone) { ?><span class="text"><span class="fa fa-phone"></span><?php _e("Call Us:", EV_THEME_NAME); ?> <span><?php echo esc_html($ev_val_phone_number); ?></span></span><?php } ?>
                  <?php if($ev_is_show_address) { ?><span class="text"><span class="fa fa-map-marker"></span><?php _e("Address:", EV_THEME_NAME); ?> <?php echo esc_html($ev_val_address_text); ?></span><?php } ?>
                  <?php if($ev_is_show_email) { ?><span class="text"><span class="fa fa-envelope"></span><?php _e("e-Mail:", EV_THEME_NAME); ?> <a href="mailto:<?php echo antispambot($ev_val_email,1); ?>"><?php echo antispambot($ev_val_email); ?></a></span><?php } ?>
                  <?php if(!empty($ev_val_free_header_html)) { ?><span class="text"><?php echo $ev_val_free_header_html; ?></span><?php } ?>
                </div>
              </div>
              <?php } ?>


              <?php

                // Social Icons
                $ev_val_header_social_icons = $gorilla['val_header_social_icons'];


                  if ($ev_is_show_social_icons_at_header) {
                    if($ev_val_header_social_icons){ ?>
                      <ul class="social-icons clearfix <?php echo esc_attr($ev_social_icons_pos); ?>"><?php
                         foreach ($ev_val_header_social_icons as $ev_selectedOption) {

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
                             echo '<li><a href="'. esc_url($gorilla['val_'. $ev_selectedOptionIcon]) .'" title="'. esc_attr($ev_selectedOption) .'"  class="qtipel" target="_blank" data-tip-position="bottom center" data-tip-cursor-position="top center"><span class="fa fa-'. esc_attr($ev_selectedOptionIcon).'"></span></a></li>';

                          }
                      ?></ul>
                <?php }
                } ?>
              </div>
            </div>
          </div>

        <?php } ?>

        <?php
            $class= ' ' . $gorilla['val_header_area_style'];
        ?>
        <div class="header-inner<?php echo esc_attr($class); ?>">

			<?php if ($ev_val_header_preset != "header_4" && $ev_val_header_preset != "header_3") { ?>
			<div class="container wpb_row clearfix">
              <div class="vc_col-sm-12">
			<?php } ?>

             <?php if (($ev_is_header_main_on && $ev_val_header_preset != "header_1") || $ev_val_header_preset == "header_1") { ?>
                <?php if ($ev_val_header_preset == "header_4" || $ev_val_header_preset == "header_3") { ?>
                  <div class="header-inner-container">
                   <div class="container clearfix">
                      <div class="vc_col-sm-12">
                <?php } ?>


                  <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( $gorilla['val_site_name'] ); ?>" rel="home">
                      <?php if ($gorilla['is_show_logo_image'] && !empty($gorilla['val_logo_image_url']['url'])) { ?>
                        <?php if (($ev_is_mobile || $ev_is_tablet || $gorilla_OS_type == "Mac") && !empty($gorilla['val_logo_image_retina_url']['url'])) { ?>
                            <?php if($ev_header_overlapping == "header_overlapping") {
                                $ev_image_src = $gorilla['val_logo_image_retina_url_female']['url']; ?>
                                <img class="header-overlap-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                            <?php }
                                $ev_image_src = $gorilla['val_logo_image_retina_url']['url']; ?>
                                <img class="default-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                        <?php } else { ?>
                            <?php if($ev_header_overlapping == "header_overlapping") {
                                $ev_image_src = $gorilla['val_logo_image_url_female']['url']; ?>
                                <img class="header-overlap-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                            <?php }
                                $ev_image_src = $gorilla['val_logo_image_url']['url']; ?>
                                <img class="default-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                        <?php } ?>


                      <?php } else if(!empty($gorilla['val_site_name'])) { echo "<span>".esc_html($gorilla['val_site_name'])."</span>"; }
                        else {
                          echo "<span>".get_bloginfo("name")."</span>";
                        }
                       ?>
                    </a>
                  </div>

                <?php if ($ev_val_header_preset == "header_3" && !empty($gorilla["val_free_header_spot_html"])) { ?>
                  <div class="free-html-area">
                    <div class="free-html-area-inner">
                      <?php echo $gorilla["val_free_header_spot_html"]; ?>
                    </div>
                  </div>
                <?php } ?>

                <?php if ($ev_val_header_preset == "header_4" || $ev_val_header_preset == "header_3") { ?>
                    </div>
                   </div>
                  </div>
                <?php } ?>
              <?php } ?>

              <?php if ($ev_val_header_preset == "header_4" || $ev_val_header_preset == "header_3") { ?>
                  <div class="header-bottom">
                     <div class="container wpb_row clearfix">
                      <div class="vc_col-sm-12">

                    <div class="navigation-container clearfix">
                  <?php } ?>

                  <div class="header-other-links">

                    <?php if (function_exists('is_woocommerce') && is_plugin_active('woocommerce/woocommerce.php') && $ev_is_show_chart_icon) {

                      $ev_chart_style = $gorilla['val_chart_style'] ? " innovative" : "";


                    ?>
                      <div class="shop-cart-popup-wrapper<?php echo esc_attr($ev_chart_style); ?>">
                        <div class="cart-icon">
                          <a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', EV_THEME_NAME); ?>" class="cart-link qtipel"><span class="cart-item-number"></span><span class="icon fa fa-shopping-cart"></span></a>
                        </div>
                        <div class="shop-cart-popup <?php echo esc_attr($gorilla['val_nav_menu_style']); ?>">
                          <div class="shop-cart-popup-content"></div>

                          <div class="shop-cart-popup-bottom clearfix">
                            <a class="btn btn-sml cart-btn" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>"><i class="ico fa  fa-shopping-cart"></i><?php esc_html_e('View Cart', EV_THEME_NAME); ?></a>
                            <div class="total-value"><span class="price"><?php echo esc_html($woocommerce->cart->get_cart_total()); ?></span></div>
                          </div>

                        </div>
                      </div>
                    <?php } ?>



                    <?php if ($ev_is_show_search_icon == "1") { ?>
                    <div class="search-link-wrapper"><a class="search-link" href="#"><span class="ico-container"><span class="fa fa-search"></span></span></a></div>
                    <?php } ?>

                    <!-- Mobile Menu link -->
                    <a href="#" class="mobile-menu-link"><span class="fa fa-bars"></span></a>
                    <!-- Mobile Menu link -->

                  </div>

                    <?php

                  /*
                  * display the main navigation menu
                  * modify the output in your wordpress admin backend at
                  appearance->menus

                  ?>*/
                  if(!empty($ev_one_page_nav) && $ev_one_page_open == "true"){
                    wp_nav_menu(array('theme_location' => "primary", 'menu' => $ev_one_page_nav, 'menu_class' => 'navigation clearfix','container_class' => 'main-navigation default '. $gorilla['val_nav_menu_style'] ,'fallback_cb' => 'ev_menu_add_alert',  'walker' => new ev_Themeslug_Page_Navigation_Walker ));
                  }
                  else {
                    wp_nav_menu(array('theme_location' => "primary", 'menu_class' => 'navigation clearfix','container_class' => 'main-navigation default '. $gorilla['val_nav_menu_style'] ,'fallback_cb' => 'ev_menu_add_alert',  'walker' => new ev_Themeslug_Page_Navigation_Walker ));
                  }

                  ?>

                    <?php if ($ev_val_header_preset == "header_4" || $ev_val_header_preset == "header_3") { ?>

                      </div>
                    </div>
                    </div>
                  </div>
                    <?php } ?>

			<?php if ($ev_val_header_preset != "header_4" && $ev_val_header_preset != "header_3") { ?>
                </div>
            </div>
			<?php } ?>
        </div>

    </header>

    <?php if($gorilla["val_header_preset"] == "vertical-header") : ?>
    <header id="main-header-vertical" class="site-header">

        <?php

          $class = ' ' . $gorilla['val_header_area_style'];

          if($gorilla["is_center_vertical_header_area"]){
            $class .= ' centered';
          }

        ?>
        <div class="header-inner<?php echo esc_attr($class); ?>">
           <div class="container wpb_row clearfix">
              <div class="vc_col-sm-12">

                  <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( $gorilla['val_site_name'] ); ?>" rel="home">
                      <?php if ($gorilla['is_show_logo_image'] && !empty($gorilla['val_logo_image_url']['url'])) { ?>
                        <?php if (($ev_is_mobile || $ev_is_tablet || $gorilla_OS_type == "Mac") && !empty($gorilla['val_logo_image_retina_url']['url'])) { ?>
                            <?php
                                $ev_image_src = $gorilla['val_logo_image_retina_url']['url']; ?>
                                <img class="default-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                        <?php } else { ?>
                            <?php
                                $ev_image_src = $gorilla['val_logo_image_url']['url']; ?>
                                <img class="default-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                        <?php } ?>


                      <?php } else if(!empty($gorilla['val_site_name'])) { echo "<span>".esc_html($gorilla['val_site_name'])."</span>"; }
                        else {
                          echo "<span>".get_bloginfo("name")."</span>";
                        }
                       ?>
                    </a>
                  </div>

                  <div class="header-other-links">

                    <?php if (function_exists('is_woocommerce') && is_plugin_active('woocommerce/woocommerce.php') && $ev_is_show_chart_icon) {

                      $ev_chart_style = $gorilla['val_chart_style'] ? " innovative" : "";


                    ?>
                      <div class="shop-cart-popup-wrapper<?php echo esc_attr($ev_chart_style); ?>">
                        <div class="cart-icon">
                          <a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php _e('View your shopping cart', EV_THEME_NAME); ?>" class="cart-link qtipel"><span class="cart-item-number"></span><span class="icon fa fa-shopping-cart"></span></a>
                        </div>
                        <div class="shop-cart-popup <?php echo esc_attr($gorilla['val_nav_menu_style']); ?>">
                          <div class="shop-cart-popup-content"></div>

                          <div class="shop-cart-popup-bottom clearfix">
                            <a class="btn btn-sml cart-btn" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>"><i class="ico fa fa-shopping-cart"></i><?php esc_html_e('View Cart', EV_THEME_NAME) ?></a>
                            <div class="total-value"><span class="price"><?php echo esc_html($woocommerce->cart->get_cart_total()); ?></span></div>
                          </div>

                        </div>
                      </div>
                    <?php } ?>



                    <?php if ($ev_is_show_search_icon == "1") { ?>
                    <div class="search-link-wrapper"><a class="search-link" href="#"><span class="ico-container"><span class="fa fa-search"></span></span></a></div>
                    <?php } ?>

                    <!-- Mobile Menu link -->
                    <a href="#" class="mobile-menu-link"><span class="fa fa-bars"></span></a>
                    <!-- Mobile Menu link -->

                  </div>

                  <?php

                  /*
                  * display the main navigation menu
                  * modify the output in your wordpress admin backend at
                  appearance->menus

                  ?>*/
                  if(!empty($ev_one_page_nav) && $ev_one_page_open == "true"){
                    wp_nav_menu(array('theme_location' => "vertical-header", 'menu' => $ev_one_page_nav, 'menu_class' => 'navigation clearfix','container_class' => 'main-navigation default '. $gorilla['val_nav_menu_style'] ,'fallback_cb' => 'ev_menu_add_alert',  'walker' => new ev_Themeslug_Page_Navigation_Walker ));
                  }
                  else {
                    wp_nav_menu(array('theme_location' => "vertical-header", 'menu_class' => 'navigation clearfix','container_class' => 'main-navigation default '. $gorilla['val_nav_menu_style'] ,'fallback_cb' => 'ev_menu_add_alert',  'walker' => new ev_Themeslug_Page_Navigation_Walker ));
                  }

                  ?>

                  <?php if(is_active_sidebar("vertical_header_area")){ ?>
                    <div class="vertical-header-widgets">
                    <?php dynamic_sidebar("vertical_header_area"); ?>
                    </div>
                  <?php } ?>

                </div>
            </div>
        </div>

    </header>
    <?php endif; ?>


    <?php if($ev_is_sticky_nav_on) : ?>
    <header id="main-header-sticky" class="site-header fixed-minify <?php echo esc_attr($ev_is_header_bottom_class);?>">

        <?php
            $class= ' ' . $gorilla['val_header_area_style'];
        ?>
        <div class="header-inner<?php echo esc_attr($class); ?>">
           <div class="container wpb_row clearfix">
              <div class="vc_col-sm-12">

                  <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( $gorilla['val_site_name'] ); ?>" rel="home">
                      <?php if (!empty($gorilla['val_sticky_image_url']['url'])) {

                            if (($ev_is_mobile || $ev_is_tablet || $gorilla_OS_type == "Mac") && !empty($gorilla['val_sticky_image_retina_url']['url'])) {

                                $ev_image_src = $gorilla['val_sticky_image_retina_url']['url']; ?>
                                <img class="default-logo" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                            <?php } else {

                                    $ev_image_src = $gorilla['val_sticky_image_url']['url']; ?>
                                    <img class="default-logo" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                            <?php }

                        }

                          else if (empty($gorilla['val_sticky_image_url']['url']) && $gorilla['is_show_logo_image'] && !empty($gorilla['val_logo_image_url']['url'])) { ?>
                        <?php if (($ev_is_mobile || $ev_is_tablet || $gorilla_OS_type == "Mac") && !empty($gorilla['val_logo_image_retina_url']['url'])) { ?>
                            <?php if($ev_header_overlapping == "header_overlapping") {
                                $ev_image_src = $gorilla['val_logo_image_retina_url_female']['url']; ?>
                                <img class="header-overlap-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                            <?php }
                                $ev_image_src = $gorilla['val_logo_image_retina_url']['url']; ?>
                                <img class="default-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                        <?php } else { ?>
                            <?php if($ev_header_overlapping == "header_overlapping") {
                                $ev_image_src = $gorilla['val_logo_image_url_female']['url']; ?>
                                <img class="header-overlap-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                            <?php }
                                $ev_image_src = $gorilla['val_logo_image_url']['url']; ?>
                                <img class="default-logo" height="<?php echo esc_attr($gorilla['val_logo_image_height']); ?>" width="<?php echo esc_attr($gorilla['val_logo_image_width']); ?>" src="<?php echo esc_url($ev_image_src); ?>" alt="<?php echo esc_attr($gorilla['val_site_name']); ?>">
                        <?php } ?>


                      <?php } else if(!$gorilla['is_show_logo_image'] && !empty($gorilla['val_site_name'])) { echo "<span>".esc_html($gorilla['val_site_name'])."</span>"; }
                        else {
                          echo "<span>".get_bloginfo("name")."</span>";
                        }
                       ?>
                    </a>
                  </div>


                  <div class="header-other-links">

                    <?php if (function_exists('is_woocommerce') && is_plugin_active('woocommerce/woocommerce.php') && $ev_is_show_chart_icon) {

                      $ev_chart_style = $gorilla['val_chart_style'] ? " innovative" : "";


                    ?>
                      <div class="shop-cart-popup-wrapper<?php echo esc_attr($ev_chart_style); ?>">
                        <div class="cart-icon">
                          <a href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', EV_THEME_NAME); ?>" class="cart-link qtipel"><span class="cart-item-number"></span><span class="icon fa fa-shopping-cart"></span></a>
                        </div>
                        <div class="shop-cart-popup <?php echo esc_attr($gorilla['val_nav_menu_style']); ?>">
                          <div class="shop-cart-popup-content"></div>

                          <div class="shop-cart-popup-bottom clearfix">
                            <a class="btn btn-sml cart-btn" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>"><i class="ico fa fa-shopping-cart"></i><?php esc_html_e('View Cart', EV_THEME_NAME) ?></a>
                            <div class="total-value"><span class="price"><?php echo esc_html($woocommerce->cart->get_cart_total()); ?></span></div>
                          </div>

                        </div>
                      </div>
                    <?php } ?>



                    <?php if ($ev_is_show_search_icon == "1") { ?>
                    <div class="search-link-wrapper"><a class="search-link" href="#"><span class="ico-container"><span class="fa fa-search"></span></span></a></div>
                    <?php } ?>

                    <!-- Mobile Menu link -->
                    <a href="#" class="mobile-menu-link"><span class="fa fa-bars"></span></a>
                    <!-- Mobile Menu link -->

                  </div>

                  <div class="nav-clone"></div>

                </div>
            </div>
        </div>

    </header>
  <?php endif; ?>


<?php endif; ?>
<div id="custom-header" class="container-fluid">


	<div class="container visible-md visible-lg">
		<div class="col-xs-12">
			<div class="col-md-4">
				<div class="the-nav">
					<ul>
						<li><a class="Services menu-item" href="http://nvg.site/bennett/services/">Services</a>
							
						</li>
						<li><a class="Clients menu-item clientpage" href="http://nvg.site/bennett/clients/">Clients</a></li>
						<li><a class="Tea menu-item teampage" href="http://nvg.site/bennett/team/">Team</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="the-logo">
					<a href="http://nvg.site/bennett/"><img id="ignore" class="superignore" src="<?php echo get_site_url();?>/wp-content/uploads/2016/08/logo_wht.png"></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="the-nav">
					<ul>
						<li><a class="Testimonials menu-item testipage"href="http://nvg.site/bennett/testimonials/">Testimonials</a></li>
						<li><a class="about menu-item aboutpage" href="http://nvg.site/bennett/about/">About</a>
              <ul>
                <li>Radio
                  <ul>
                    <li><i class="fa fa-caret-right" aria-hidden="true"></i>TV Shows</li>
                  </ul>
                </li>
              </ul>

            </li>
						<li><a class="contact menu-item contactpage"href="http://nvg.site/bennett/contact/">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$('.the-nav li').mouseover(function(){
	$(this).find('ul').show();
});
$('.the-nav li').mouseout(function(){
    $(this).find('ul').hide();
});
$(document).ready(function(){
	if(window.location.href == "http://nvg.site/bennett/services/"){
		$('.services.menu-item').addClass('active');
	}else if(window.location.href == "http://nvg.site/bennett/clients/"){
		$('.clientpage.menu-item').addClass('active');
	}else if(window.location.href == "http://nvg.site/bennett/team/"){
		$('.teampage.menu-item').addClass('active');
	}else if(window.location.href == "http://nvg.site/bennett/testimonials/"){
		$('.testipage.menu-item').addClass('active');
	}else if(window.location.href == "http://nvg.site/bennett/about/"){
		$('.aboutpage.menu-item').addClass('active');
	}else if(window.location.href == "http://nvg.site/bennett/contact/"){
		$('.contactpage.menu-item').addClass('active');
	}
});

</script>
<div id="container" role="main">

  <?php if(!is_page_template( 'page-templates/blank-page.php' )) : ?>
  <?php do_action( 'ev_before_main_container' ); ?>
  <?php endif; ?>

  <div class="container-wrapper">






