<?php
/*
  Plugin Name: Reward Points Pro
  Plugin URI: https://github.com/huuhienqt90/reward-point
  Description: Reward Points Pro
  Version: 1.0.1
  Author: Hien(Hamilton) H.HO
  Author URI: https://github.com/huuhienqt90
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!class_exists('RewardPoint')) :
    final class RewardPoint
    {
        public $version = '1.0.1';
        protected static $_instance = null;

        /**
         * Instance class
         */
        public static function instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        /**
         * Constructor class
         */
        public function __construct()
        {
            // Define constants
            $this->define_constants();

            // Include required files
            $this->includes();

            // Hooks
            add_action('init', array($this, 'init'));
            add_action('widgets_init', array($this, 'include_widgets'));
            add_action('init', array($this, 'include_template_functions'));
            add_action('after_setup_theme', array($this, 'setup_environment'));
            do_action('rewardpoint_loaded');
        }

        /**
         * Auto-load WC classes on demand to reduce memory consumption.
         *
         * @param mixed $class
         * @return void
         */
        public function init(){

        }

         /**
         * Define IZ Constants
         */
        private function define_constants()
        {
            define('__PLUGIN_PATH__', plugin_dir_path( __FILE__ ) );
            define('RWP_PLUGIN_FILE', __FILE__);
            define('RWP_VERSION', $this->version);
            define('REWARDPOINT_VERSION', RWP_VERSION); // Backwards compat

            if (!defined('RWP_TEMPLATE_PATH')) {
                //define( 'RWP_TEMPLATE_PATH', $this->template_path() );
            }

            if (!defined('RWP_ROUNDING_PRECISION')) {
                define('RWP_ROUNDING_PRECISION', 4);
            }

            if (!defined('RWP_DELIMITER')) {
                define('RWP_DELIMITER', '|');
            }
        }

        /**
         * Include files
         */
        private function includes() {
            include_once('includes/admin/post-types/class-rwp-cpt.php');
            include_once('includes/admin/behaviors/class-behavior-settings-page.php');
            include_once( 'includes/admin/class-rwp-admin-menus.php' );
        }

        /**
         * Include core widgets
         */
        public function include_widgets()
        {
            do_action('rw_include_widgets');
        }

        /**
         * Function used to Init Reward Point Template Functions - This makes them pluggable by plugins and themes.
         */
        public function include_template_functions()
        {
            do_action('rw_include_template_functions');
        }

        /**
         * Ensure theme and server variable compatibility and setup image sizes..
         */
        public function setup_environment()
        {
            // IIS
            if (!isset($_SERVER['REQUEST_URI'])) {
                $_SERVER['REQUEST_URI'] = substr($_SERVER['PHP_SELF'], 1);
                if (isset($_SERVER['QUERY_STRING'])) {
                    $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
                }
            }

            // NGINX Proxy
            if (!isset($_SERVER['REMOTE_ADDR']) && isset($_SERVER['HTTP_REMOTE_ADDR'])) {
                $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_REMOTE_ADDR'];
            }

            if (!isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTP_HTTPS'])) {
                $_SERVER['HTTPS'] = $_SERVER['HTTP_HTTPS'];
            }

            // Support for hosts which don't use HTTPS, and use HTTP_X_FORWARDED_PROTO
            if (!isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
                $_SERVER['HTTPS'] = '1';
            }
        }
        
        /**
         * Get the plugin url.
         *
         * @return string
         */
        public function plugin_url() {
            return untrailingslashit( plugins_url( '/', __FILE__ ) );
        }

        /**
         * Get the plugin path.
         *
         * @return string
         */
        public function plugin_path() {
            return untrailingslashit( plugin_dir_path( __FILE__ ) );
        }

        /**
         * Get the template path.
         *
         * @return string
         */
        public function template_path() {
            return apply_filters( 'RWP_TEMPLATE_PATH', 'rewardpoint/' );
        }
    }
endif;

function RWP()
{
    return Reward_Point::instance();
}

// Global for backwards compatibility.
$GLOBALS['RewardPoint'] = RWP();