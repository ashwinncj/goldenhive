<?php

/**
 * Plugin Name:     GoldenHive
 * Plugin URI:      
 * Description:     Coinhive implementation for Wordpress
 * Author:          Ashwin Kumar C
 * Author URI:      
 * Text Domain:     
 * Domain Path:     
 * Version:         
 *
 * @package         
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

add_shortcode('goldenhive-mine-button', 'minebutton');

function minebutton() {
    require_once 'mine-button.php';
}
