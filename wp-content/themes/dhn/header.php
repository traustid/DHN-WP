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


<div class="site-sidebar">
	<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>

	<?php get_sidebar(); ?>
</div>

<div class="site-main">

	<div class="container site-header">
		<div class="row">
			<div class="twelve columns">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="red">Digital Humanities</span> <span class="blue">in the Nordic Countries</span></a></h1>

				<div class="nav-container">				
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>

			</div>
		</div>
	</div>
