<?php
/**
 * Setup menus in WP admin.
 *
 * @author 		WooThemes
 * @category 	Admin
 * @package 	WooCommerce/Admin
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'RWP_Admin_Menus' ) ) :

/**
 * WC_Admin_Menus Class
 */
class RWP_Admin_Menus {

	/**
	 * Hook in tabs.
	 */
	public function __construct() {
		// Add menus
		add_action( 'admin_menu', array( $this, 'admin_menu' ), 9 );
		/*add_action( 'admin_menu', array( $this, 'reports_menu' ), 20 );
		add_action( 'admin_menu', array( $this, 'settings_menu' ), 50 );
		add_action( 'admin_menu', array( $this, 'status_menu' ), 60 );

		if ( apply_filters( 'woocommerce_show_addons_page', true ) ) {
			add_action( 'admin_menu', array( $this, 'addons_menu' ), 70 );
		}

		add_action( 'admin_head', array( $this, 'menu_highlight' ) );
		add_filter( 'menu_order', array( $this, 'menu_order' ) );
		add_filter( 'custom_menu_order', array( $this, 'custom_menu_order' ) );*/
	}

	/**
	 * Add menu items
	 */
	public function admin_menu() {
        add_menu_page( __( 'Reward Point', 'rewardpoint' ), __( 'Reward Point', 'rewardpoint' ), 'manage_options', 'rewardpoint', array( $this, 'settings_page' ) );
	}
	/**
	 * Init the settings page
	 */
	public function settings_page() {
        do_action( 'rewardpoint_settings_start' );
        $current_tab     = empty( $_GET['tab'] ) ? 'behavior' : sanitize_title( $_GET['tab'] );
        $current_section = empty( $_REQUEST['section'] ) ? '' : sanitize_title( $_REQUEST['section'] );
        $tabs = apply_filters( 'woocommerce_settings_tabs_array', array(
            'behavior'      => 'Behaviors',
            'purchase'      => 'Purchases',
            'referral'      => 'Referrals',
            'invite'        => 'Invite and Share',
            'user-point'    => 'Use Reward Points',
        ) );
        include 'views/html-admin-page.php';
	}
}

endif;

return new RWP_Admin_Menus();