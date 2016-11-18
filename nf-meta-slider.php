<?php

/*
 * Plugin Name: Ninja Forms - Meta Slider
 * Description: Adds compatibility for embedding a Meta Slider shortcode in a Ninja Forms html field.
 * Version: 0.0.1
 * Author: Kyle B. Johnson, The WP Ninjas
 * License: GPL v2
 */

/*
    Copyright 2016 - The WP Ninjas

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
 */

add_filter( 'ninja_forms_enqueue_scripts', 'nf_meta_slider' );
function nf_meta_slider() {
    wp_enqueue_script( 'nf_meta_slider', plugin_dir_url( __FILE__ ) . 'nf-meta-slider.js', array( 'jquery' ), false, true );
}
