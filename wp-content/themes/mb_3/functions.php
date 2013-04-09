<?php


add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
		'primary' => __( 'Privary Nav'),
		)
	);
}
require_once('portfolio-type.php');


add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length) {

	return 25; 

}

add_filter('excerpt_more', 'new_excerpt_more');  

function new_excerpt_more($text){  

	return ' ';  

}  

function portfolio_thumbnail_url($pid){
	$image_id = get_post_thumbnail_id($pid);  
	$image_url = wp_get_attachment_image_src($image_id,'screen-shot');  
	return  $image_url[0];  
}

function add_slug_class_to_menu_item($output){
	$ps = get_option('permalink_structure');
	if(!empty($ps)){
		$idstr = preg_match_all('/<li id="menu-item-(\d+)/', $output, $matches);
		foreach($matches[1] as $mid){
			$id = get_post_meta($mid, '_menu_item_object_id', true);
			$slug = basename(get_permalink($id));
			$output = preg_replace('/menu-item-'.$mid.'">/', 'menu-item-'.$mid.' menu-item-'.$slug.'">', $output, 1);
		}
	}
	return $output;
}
add_filter('wp_nav_menu', 'add_slug_class_to_menu_item');

add_theme_support( 'post-thumbnails' );

function my_load_infinite_scroll( $load_infinite_scroll ) {
    if( is_page('portfolio') )
        return true;
    return $load_infinite_scroll;
}
add_filter('infinite_scroll_load_override', 'my_load_infinite_scroll');

?>