<?php
/**
 * Plugin Name: MV Slider
 * Plugin URI: https://www.wordpress.org/mv-slider
 * Description: My plugin's description
 * Version: 1.0
 * Requires at least: 5.6
 * Author: Alex Pradas
 * Author URI: https://alexpradas.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/license/gpl-2.0.html
 * Text Domain: mv-slider
 * Domain Path: /languages
 */



if ( ! defined( 'ABSPATH' )){
    exit;
}

if ( ! class_exists( 'MV_Slider')) {
    class MV_Slider{
       function __construct(){
           $this->define_constants();
       }
       public function define_constants(){
           define( 'MV_SLIDER_PATH', plugin_dir_path( __FILE__ ));
           define( 'MV_SLIDER_URL', plugin_dir_url( __FILE__ ));
           define( 'MV_SLIDER_VERSION', '1.0.0');
       } 
    }
}

if ( class_exists( 'MV_Slider' )){
    $mv_slider = new MV_Slider();
}