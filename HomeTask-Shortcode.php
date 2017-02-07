<?php

/*
Plugin Name: HomeTask-ShortCode
Plugin URI: 
Description: HometaskShortCode
Version: 1.0
Author: babychroman
Domain Path: /languages/

*/
require_once plugin_dir_path(__FILE__) . '/config-path.php';
require_once HOMETASKSHORTCODE_PlUGIN_DIR.'/includes/common/HomeTaskAutoload.php';
require_once HOMETASKSHORTCODE_PlUGIN_DIR.'/includes/HomeTaskPlugin.php';


register_activation_hook( __FILE__, array('includes\HomeTaskPlugin' ,  'activation' ) );
register_deactivation_hook( __FILE__, array('includes\HomeTaskPlugin' ,  'deactivation' ) );


