<?php

function get_page_permalink_from_name( $page_name ) {
    global $post;
    global $wpdb;
	$post_title = $page_name;
	$sql = "SELECT ID FROM $wpdb->posts WHERE post_title = %s LIMIT 0, 1";
	// populate vars and run query
	$pageid_name = $wpdb->get_var( $wpdb->prepare( $sql, $post_title ) );		
    //$pageid_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $page_name . "' LIMIT 0, 1");
 return get_permalink($pageid_name);
}
