<?php
/*
Plugin Name: اعضای ویژه
Plugin URI: http://amir77.xj
Description: پلاگین اعضای ویژه در وبسایت
Author: Amirhossein Ghods
Version: 1.0.0
Author URI: http://amir77.xj/
*/
defined('ABSPATH') || exit('NO ACCESS');

// define constants for WPVIP
define('WPVIP_DIR',trailingslashit(plugin_dir_path(__FILE__)));
define('WPVIP_URL',trailingslashit(plugin_dir_url(__FILE__)));
define('WPVIP_INC',trailingslashit(WPVIP_DIR.'include'));
define('WPVIP_TPL',trailingslashit(WPVIP_DIR.'templates'));
define('WPVIP_CSS',trailingslashit(WPVIP_URL.'assets'.'/'.'css'));
define('WPVIP_JS',trailingslashit(WPVIP_URL.'assets'.'/'.'js'));
define('WPVIP_IMAGES',trailingslashit(WPVIP_URL.'assets'.'/'.'images'));
define('WPVIP_DB_VERSION',1);

// write activation && deactivation hook'callback
function WPVIP_activate(){
    
   
}
function WPVIP_deactivate(){
   
}
register_activation_hook(__FILE__,'wps_activate');
register_deactivation_hook(__FILE__,'wps_deactivate');

if(is_admin()){
include WPVIP_INC.'admin_menu.php';
include WPVIP_INC.'admin_pages.php';
}
else{

}