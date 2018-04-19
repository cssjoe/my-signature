<?php
/**
 * File: class-my-signature.php
 *
 * @since 2.0.0
 */

/**
 * Class: My_Signature
 *
 * @package My_Signature
 *
 * @since 1.0.0
 */
class My_Signature {
	/**
	 * Constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		// Register the shortcode.
		add_shortcode( 'my-signature', array(
			$this,
			'display_signature',
		) );
	}

	/**
	 * Display signature.
	 *
	 * @since 1.0.0
	 *
	 * @global WP_Filesystem $wp_filesystem Access the filesystem via WordPress class methods.
	 * @link https://developer.wordpress.org/reference/functions/wp_filesystem/
	 *
	 * @return string
	 */
	public function display_signature() {
		global $wp_filesystem;

		// Ensure that the WP Filesystem API is loaded.
		if ( empty( $wp_filesystem ) ) {
			require_once ABSPATH . '/wp-admin/includes/file.php';
			WP_Filesystem();
		}

		return $wp_filesystem->get_contents(
			dirname( dirname( __FILE__ ) ) . '/public/templates/my-signature.html'
		);
	}
}
