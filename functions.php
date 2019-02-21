<?php
	//setting style
function calling_resources(){
	wp_enqueue_style('style' , get_stylesheet_uri(), '', '1.0.0' );
	wp_enqueue_style('404_style' , get_template_directory_uri().'/css/404.css', '', '1.0.0' );
}
add_action('wp_enqueue_scripts' , 'calling_resources');


function our_theme_setup(){
	// register nav
	register_nav_menus(array(
		'primary' => __( 'Primary Menu' ),
	));
		// thumbnail image
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme' , 'our_theme_setup');

	// sidebar register
function ourWidgetInit(){
	register_sidebar(array(
		'name' => 'Primary Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<aside class="single_sidebar">',
		'after_widget' => '</aside>',
	));
}
add_action('widgets_init' , 'ourWidgetInit');

// Excerpt Function
function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='"."readmore"."'>...  Continue Reading &raquo;</a>";
	echo $excerpt;
}










