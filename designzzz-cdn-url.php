<?php
/*
Plugin Name: Images URL Rewrite for CDN
Plugin URI: http://www.designzzz.com/
Description: This plugin will replace all your wordpress posts/pages images link from your site to cdn and on disabling will change them back to normal.
Author: Ayaz Malik
Author URI: http://www.designzzz.com/
Version: 1.0
*/

///variables globals
$dcr_options = get_option('dcr_settings');
///

include('includes/do-functions.php');
include('includes/options_page.php');

///Settings LInk in plugins page
function dcr_plugin_admin_action_links($links, $file) {
    static $my_plugin;
    if (!$my_plugin) {
        $my_plugin = plugin_basename(__FILE__);
    }
    if ($file == $my_plugin) {
        $settings_link = '<a href="options-general.php?page=dcr-options">Settings</a>';
        array_unshift($links, $settings_link);
    }
    return $links;
}

add_filter('plugin_action_links', 'dcr_plugin_admin_action_links', 10, 2);
?>