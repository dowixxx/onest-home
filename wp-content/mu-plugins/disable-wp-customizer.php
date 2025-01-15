<?php
/*
 * Plugin name: Disable Customizer
 * Description: Completely turn off customizer on your site. NOTE: This is a copy of the plugin code: https://wordpress.org/plugins/customizer-disabler/
 * 
 * Author: Johannes Siipola
 * Author URI: https://siipo.la
 * Changed code URL: https://gist.github.com/doiftrue/6d8f975ed8af5ac325b6d9a1c52abf1c
 *
 * Version: 2.2.7 (changed)
 */

defined( 'ABSPATH' ) || exit;

Disable_WP_Customizer::get_instance()->init();

class Disable_WP_Customizer {

	public static function get_instance(): self {
		static $instance;
		$instance || $instance = new static();

		return $instance;
	}

	private function __construct() {
	}

	public function init(): void {
		add_action( 'init', [ $this, 'init_hook' ], 10 );
		add_action( 'admin_init', [ $this, 'admin_init_hook' ], 10 );
	}

	public function init_hook(): void {
		add_filter( 'map_meta_cap', [ $this, 'remove_customize_capability' ], 10, 4 );
	}

	public function admin_init_hook(): void {
		remove_action( 'plugins_loaded', '_wp_customize_include', 10 );
		remove_action( 'admin_enqueue_scripts', '_wp_customize_loader_settings', 11 );

		add_action( 'load-customize.php', [ $this, 'override_load_customizer_action', ] );
	}

	public function remove_customize_capability( $caps = [], $cap = '', $user_id = 0, $args = [] ) {
		if ( $cap === 'customize' ) {
			return [ 'nope' ];
		}

		return $caps;
	}

	public function override_load_customizer_action() {
		/** @noinspection ForgottenDebugOutputInspection */
		wp_die( 'The Customizer is currently disabled.' );
	}
}