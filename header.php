<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Scrappy
 * @since Scrappy 1.3
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php
if (is_search() || is_archive() || is_paged()) {
  echo '<meta name="robots" content="noindex,follow" />'."\n";
}?>
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 ) {
    echo ' | ' . sprintf( __( 'Page %s', 'scrappy' ), max( $paged, $page ) );
  }
  ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
  wp_deregister_script('jquery');
  wp_head();
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" async></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <?php do_action( 'before' ); ?>
  <header id="masthead" class="site-header" role="banner">
    <div class="stripes"></div>
    <?php $header_image = get_header_image();
    if ( ! empty( $header_image ) ) { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
      </a>
    <?php } // if ( ! empty( $header_image ) ) ?>
    <hgroup>
      <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2 class="site-description" style="text-align: left; font-size: 1.0em;"><?php include('/opt/www/7io.org/app/kotoba.php/kotoba.php'); ?></h2>
    </hgroup>

    <nav role="navigation" class="site-navigation main-navigation">
      <h1 class="assistive-text"><?php _e( 'Menu', 'scrappy' ); ?></h1>
      <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'scrappy' ); ?>"><?php _e( 'Skip to content', 'scrappy' ); ?></a></div>
      <?php wp_nav_menu( array( 'theme_location' => 'menu' ) ); ?>
    </nav>
  </header><!-- #masthead .site-header -->

  <div id="main">
