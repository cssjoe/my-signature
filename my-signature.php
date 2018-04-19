<?php
/*
Plugin Name:  My Signature
Plugin URI:   https://www.boldgrid.com
Description:  Add a signature content block using a shortcode.
Version:      2.0.0
Author:       Joe Cartonia
Author URI:   https://www.boldgrid.com/the-team/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  my-signature
Domain Path:  /languages
*/

if ( ! defined( 'WPINC' ) ) {
	die();
}

require dirname( __FILE__ ) . '/includes/class-my-signature.php';

new My_Signature();
