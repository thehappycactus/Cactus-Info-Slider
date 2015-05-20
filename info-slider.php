<?php
/**
* Plugin Name: Cactus Info Slider
* Plugin URI: http://happycactusdev.com/info-slider
* Description: Info Slider is for users who want a step-by-step set of slides to explain a process.  Each slide contains
* text (on the left) and an image (on the right).  Sliding functionality is from the Unslider.js library.
* Version: 1.0
* Author: Happy Cactus Dev
* Author URI: http://happycactusdev.com
* License: GPL2
*/

// Hooks are Events!
// Some hooks are designated as "actions", others are called "filters"

// Filters: accepts input, returns output - intended to modify/"filter" output
// Actions: no inputs, all output is ignored
add_action('wp_enqueue_scripts', 'register_externals');
add_shortcode('cactus-slider', 'slider_setup');
add_shortcode('slider-item', 'add_slider_item');

// Adds CSS & JS to plugin
function register_externals() {
	wp_register_style( 'info-slider', plugins_url( 'InfoSlider/css/info-slider.css' ) );
	
	wp_enqueue_style('info-slider');
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-latest.min.js' );
	wp_enqueue_script( 'unslider', plugins_url( 'InfoSlider/js/unslider.min.js' ) );
	wp_enqueue_script( 'infoslider', plugins_url( 'InfoSlider/js/InfoSlider.js' ) );
}

// Creates slider
// function slider_setup($atts, $content=null) {
// 	extract(
// 		shortcode_atts( 
// 			array(
// 				"is_disabled" => false), 
// 			$atts));

// 	// If "is_disabled" is true, just display the text of all shortcodes.  For code-demoing only.
// 	if ($is_disabled) {
// 		$output = '[cactus-slider]'.$content.'[/cactus-slider]';
// 	} else {
// 		add_shortcode('slider-item', 'add_slider_item');
		
// 		$inner_shortcodes = do_shortcode($content);
// 		$output .= '<div class="slider-container"><ul>'.$inner_shortcodes.'</ul></div>
// 					<br><br>
// 					<button class="unslider-arrow prev"><< Previous</button>
// 					<button class="unslider-arrow next">Next >></button>';
// 	}
	
// 	return $output;
// }
function slider_setup($atts, $content=null) {
	$output = do_shortcode($content);
	return '<div class="slider-container"><ul>'.$output.'</ul></div>
			<br><br>
			<button class="unslider-arrow prev"><< Previous</button>
			<button class="unslider-arrow next">Next >></button>';
}

// Creates single slide
function add_slider_item($atts, $content=null) {
	extract(
		shortcode_atts( 
			array(
				"nbr" => 1,
				"title" => null,
				"img" => null), 
			$atts));

	$output = '<li class="slider-container-li">';
	$output .= '<div class="info"><h2>'.$title.'</h2><p>'.$content.'</p></div>';
	$output .= '<div class="image"><img src="'.$img.'"></div>';
	$output .= '</li>';

	return $output;
}