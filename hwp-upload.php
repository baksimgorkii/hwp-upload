<?php
/*
Plugin Name: hwp upload
Plugin URI: http://gorkii.com/
Description: allow hwp upload
Version: 1.0
Author: baksimgorkii
Author URI: http://gorkii.com/
License: GPL2
*/

function add_custom_mime_types ( $mimes ) {
	$mimes['hwp'] = 'application/hangul';
	return $mimes;
}
add_filter('upload_mimes', 'add_custom_mime_types');

/* wp-config.php
define( 'ALLOW_UNFILTERED_UPLOADS', true );
*/
