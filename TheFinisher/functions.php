<?php
// register nav walker class
require_once('wp-bootstrap-navwalker.php');

//Theme Support
function theme_setup(){

	//add post thumbnail
	add_theme_support('post-thumbnails');
	// Nav Menus
	register_nav_menus(array(
		'primary'=> __('Primary Menu')
		));
}

add_action('after_setup_theme','theme_setup');

//Evcerpt Length Control
function set_excerpt_length(){
	return 50;
}

add_filter('excerpt_length','set_excerpt_length');


// Widgets Locations
function wpb_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		));

	register_sidebar(array(
		'name' => 'Box1',
		'id' => 'box1',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));

	register_sidebar(array(
		'name' => 'Box2',
		'id' => 'box2',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));

	register_sidebar(array(
		'name' => 'Box3',
		'id' => 'box3',
		'before_widget' => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
		));
}

add_action('widgets_init','wpb_widgets');



// Customizer File
require get_template_directory().'/inc/customizer.php';

























?>