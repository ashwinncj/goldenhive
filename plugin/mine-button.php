#Miner button implementation for Wordpress. Code to display Mine button on the front-end.

<meta name="viewport" content="width=device-width, initial-scale=1">        

<?php
wp_register_script('angular.min', plugins_url('../assets/angular.min.js', __FILE__));
wp_enqueue_script('angular.min');
wp_register_style('shape-main', plugins_url('css/main.css', __FILE__));
wp_enqueue_style('shape-main');
?>
