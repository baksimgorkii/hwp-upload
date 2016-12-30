<?php
/*
Plugin Name: hwp upload
Plugin URI: http://gorkii.com/
Description: allow hwp upload
Version: 0.9
Author: gorkii
Author URI: http://gorkii.com/
License: GPL2
*/

add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
$existing_mimes['hwp'] = 'application/hangul';
return $existing_mimes;
}