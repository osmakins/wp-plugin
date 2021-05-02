<?php
/*
Plugin Name: wp-plugin
Plugin URI: https://companysite.com/wp-plugin
Description: Experiment wordpress plugin
Version: 0.1.0
Author: M.O Akindayo
Author URI: http://companysite.com
*/

// Exit if accessed directly
if(!defined('ABSPATH')){
  exit;
}

require_once(plugin_dir_path(__FILE__).'/includes/wp-plugin-scripts.php');