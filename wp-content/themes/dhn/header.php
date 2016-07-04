<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DHN
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-header">

	<a href="http://dig-hum-nord.eu/" target="_blank" alt="Digital Humanities in the Nordic Countries" class="dhn-logo"></a>
	
	<a href="http://cdh.hum.gu.se/" target="_blank" alt="Centrum för digital humaniora" class="cdh-logo"></a>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo"></a>

	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo get_bloginfo( 'name' ); ?></a></h1>
	<div class="site-dates"><?php echo get_bloginfo( 'description' ); ?></div>

	<div class="nav-container">
		<button class="menu-button">Main menu</button>	
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</div>

</div>

<div class="site-wrapper">

	<div class="site-sidebar">
		<?php get_sidebar(); ?>
	</div>

	<div class="site-main">

