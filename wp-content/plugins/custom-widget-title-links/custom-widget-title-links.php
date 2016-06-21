<?php
/*
Plugin Name: Custom Widget Title Links
Plugin URI: http://www.playforward.net/
Description: Allows you to define a link that is wrapped around widget titles.
Version: 1.0
Author: Playforward | Dustin Dempsey
Author URI: http://www.playforward.net/
*/

function custom_widget_link( $title ) {

	// assume there's a link attached to the title because it starts with ww, http, or /
	if ( ( substr( $title, 0, 4) == "www." ) || ( substr( $title, 0, 4) == "http" ) || ( substr( $title, 0, 1) == "/" ) ) {

		// split our title in half
		$title_pieces = explode( "|", $title );

		// if there's two pieces
		if ( count( $title_pieces ) == 2 ) {

			// add http if it's just www
			if ( substr( $title, 0, 4) == "www." ) {
				$title_pieces[0] = str_replace( "www.", "http://www.", $title_pieces[0] );
			}

			// create new title from url and extracted title
			$title = '<a href="' . $title_pieces[0] . '" title="' . $title_pieces[1] . '">' . $title_pieces[1] . '</a>';
		}
	}

	return $title;
}
add_filter( "widget_title", "custom_widget_link" );

?>