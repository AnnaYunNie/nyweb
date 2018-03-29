<?php

/**
 * Kirki Advanced Customizer
 * @package static-mag
 */
 
// Early exit if Kirki is not installed
if ( !class_exists( 'Kirki' ) ) {
	return;
}

Kirki::add_field( 'first_mag_settings', array(
	'type'			   => 'switch',
	'settings'	   => 'static-mag-get-featured',
	'label'			   => __( 'Sticky posts', 'static-mag' ),
	'description'	 => __( 'Enable or disable sticky posts on homepage. This will display latest 3 sticky posts inside the section below the main menu.', 'static-mag' ),
	'section'		   => 'layout_section',
	'default'		   => 1,
	'priority'		 => 10,
) );
