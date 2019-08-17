<?php
/**
 * Plugin Name:     WP Netlify Deploy
 * Plugin URI:      https://github.com/scottopolis/
 * Description:     Trigger a deployment (or Gatsby rebuild) on Netlify when posts or pages are created or updated.
 * Version:         0.1.0
 * Author:          Scott Bolinger
 * Text Domain:     wp-netlify-deploy
 *
 * @author          Scott Bolinger
 * @copyright       Copyright (c) Scott Bolinger 2019
 *
 */


// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) exit;

if( !class_exists( 'WP_Netlify_Deploy' ) ) {

    /**
     * Main WP_Netlify_Deploy class
     *
     * @since       0.1.0
     */
    class WP_Netlify_Deploy {

        /**
         * @var         WP_Netlify_Deploy $instance The one true WP_Netlify_Deploy
         * @since       0.1.0
         */
        private static $instance;


        /**
         * Get active instance
         *
         * @access      public
         * @since       0.1.0
         * @return      self The one true WP_Netlify_Deploy
         */
        public static function instance() {
            if( !self::$instance ) {
                self::$instance = new WP_Netlify_Deploy();
                self::$instance->setup_constants();
                self::$instance->includes();
                self::$instance->load_textdomain();
            }

            return self::$instance;
        }


        /**
         * Setup plugin constants
         *
         * @access      private
         * @since       0.1.0
         * @return      void
         */
        private function setup_constants() {
            // Plugin version
            define( 'WP_Netlify_Deploy_VER', '0.1.0' );

            // Plugin path
            define( 'WP_Netlify_Deploy_DIR', plugin_dir_path( __FILE__ ) );

            // Plugin URL
            define( 'WP_Netlify_Deploy_URL', plugin_dir_url( __FILE__ ) );

        }


        /**
         * Include necessary files
         *
         * @access      private
         * @since       0.1.0
         * @return      void
         */
        private function includes() {

            if( is_admin() )
                require_once WP_Netlify_Deploy_DIR . 'includes/class-wp-netlify-deploy-admin.php';
            
        }


        /**
         * Internationalization
         *
         * @access      public
         * @since       0.1.0
         * @return      void
         */
        public function load_textdomain() {

            load_plugin_textdomain( 'wp-netlify-deploy' );
            
        }

    }
} // End if class_exists check


/**
 * The main function responsible for returning the one true
 * instance to functions everywhere
 *
 * @since       0.1.0
 * @return      \WP_Netlify_Deploy The one true WP_Netlify_Deploy
 *
 */
function WP_Netlify_Deploy_load() {
    return WP_Netlify_Deploy::instance();
}
add_action( 'plugins_loaded', 'WP_Netlify_Deploy_load' );


/**
 * The activation hook is called outside of the singleton because WordPress doesn't
 * register the call from within the class, since we are preferring the plugins_loaded
 * hook for compatibility, we also can't reference a function inside the plugin class
 * for the activation function. If you need an activation function, put it here.
 *
 * @since       0.1.0
 * @return      void
 */
function WP_Netlify_Deploy_activation() {
    /* Activation functions here */
}
// register_activation_hook( __FILE__, 'WP_Netlify_Deploy_activation' );