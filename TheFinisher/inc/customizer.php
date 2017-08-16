<?php
function finisher_customize_register($wp_customize){
	//showcase Section
	$wp_customize	->	add_section('showcase',array(
		'title'			=> __('Showcase','TheFinisher'),
		'description'	=> sprintf(__('Options for showcase','TheFinisher')),
		'priority'		=> 130
		));


	// showcase Image
	$wp_customize	->	add_setting('showcase_image',array(
		'default'	=> get_bloginfo('template_directory').'/img/yoga.jpg',
		'type'		=> 'theme_mod'
		));
	$wp_customize	->	add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(

		'label'		=> __('Showcase Image','TheFinisher'),
		'section'	=> 'showcase',
		'setting'	=> 'showcase_image',
		'priority'	=> 1

		)));


	//Heading section
	$wp_customize	->	add_setting('showcase_heading',array(
		'default'	=> _x('The Finisher Wordpress Theme','TheFinisher'),
		'type'		=> 'theme_mod'
		));
	$wp_customize	->	add_control('showcase_heading',array(
		'label'		=> __('Heading','TheFinisher'),
		'section'	=> 'showcase',
		'priority'	=> 2
		));


	// showcase text
	$wp_customize	->	add_setting('showcase_text',array(
		'default'	=> _x('Text','TheFinisher'),
		'type'		=> 'theme_mod'
		));
	$wp_customize	->	add_control('showcase_text',array(
		'label'		=> __('Text','TheFinisher'),
		'section'	=> 'showcase',
		'priority'	=> 3
		));


	// showcase button text
	$wp_customize	->	add_setting('showcase_btn_text',array(
		'default'	=> _x('Read More','TheFinisher'),
		'type'		=> 'theme_mod'
		));
	$wp_customize	->	add_control('showcase_btn_text',array(
		'label'		=> __('Button Text','TheFinisher'),
		'section'	=> 'showcase',
		'priority'	=> 4
		));


	// showcase button Url
	$wp_customize	->	add_setting('showcase_btn_url',array(
		'default'	=> _x('http://default.com','TheFinisher'),
		'type'		=> 'theme_mod'
		));
	$wp_customize	->	add_control('showcase_btn_url',array(
		'label'		=> __('Button URL','TheFinisher'),
		'section'	=> 'showcase',
		'priority'	=> 5
		));
}

add_action('customize_register','finisher_customize_register');

























?>