<?php
add_action('admin_menu','wpvip_add_admin_menu');
function wpvip_add_admin_menu(){

    add_menu_page('کاربران ویژه','کاربران ویژه','manage_options','wpvip_admin','wpvip_dashboard','dashicons-groups');
   
    add_submenu_page('wpvip_admin','داشبورد','داشبورد','manage_options','wpvip_admin','wpvip_dashboard');
    add_submenu_page('wpvip_admin','داشبورد','محصولات','manage_options','wpvip_admin_plans','wpvip_plans_page');

}